<?php
    session_start();
    $error = '';
    if(array_key_exists('logout',$_GET)) {
        session_unset();
        setcookie('id','',time() - 60*60);
        $_COOKIE['id'] = Null;

    } else if(isset($_COOKIE['id']) OR isset($_SESSION['id'])) {
        header('Location: LoggedInPage.php');
    }

    if (array_key_exists('signIn', $_POST)) {
        include('connection.php');

        if (!$_POST['email']) {
            $error = $error."An email is required!<br />";
        }
        if (!$_POST['password']) {
            $error = $error."The password is required!<br />";
        }
        if ($error == ''){
            if ($_POST['signIn'] == 1){

                $query = "SELECT id FROM users WHERE email = '".mysqli_real_escape_string($conn,$_POST['email'])."'";
                $result= mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0) {
                    $error = "This email address has already been taken!<br />";

                } else {
                    $option = [
                        'cost' => 12,
                    ];
                    $password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT, $option);
                    $addRecord = "INSERT INTO users (email, password) VALUES ('".mysqli_real_escape_string($conn, $_POST['email'])."', '".$password."')";
                    if (!mysqli_query($conn, $addRecord)) {
                        $error = "Couldn't Sign in! Please try again.";
                    } else {
                        $_SESSION['id'] = mysqli_insert_id($conn);
                        if ($_POST['stayLoggedIn'] == 0) {
                            setcookie('id', mysqli_insert_id($conn), time() + 60*60*24*30);
                        }
                        header("Location: LoggedInPage.php");
                    }
                }
            } else {
                $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($conn, $_POST['email'])."' LIMIT 1";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                if (mysqli_num_rows($result)  > 0){
                    if (password_verify($_POST['password'], $row['password'])) {
                        $_SESSION['id'] = $row['id'];
                        if ($_POST['stayLoggedIn'] == 0) {
                            setcookie('id', $_SESSION['id'], time() + 60*60*24*30);
                        }
                        header("Location: LoggedInPage.php");
                    } else {
                        $error = "Please enter the correct password!";
                    }
                } else {
                    $error = "This id doesn't exist. Please try signing up!";
                }
            }
        }

    }


    include('header.php');
?>
    <div class="container con text-center">
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <h1 class="display-3 text-muted">Welcome to Your Secret World</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <h4 class="text-muted">Your secrets are safe with us</h4>
            </div>
        </div>
        <div class="row formMargin justify-content-center margin">
            <div class="col-md-5">
                <form method = "post"  id ="signUpForm">
                    <div class="form-group">
                        <input type="email" name ="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name = "stayLoggedIn" class="form-check-input" id="stayLoggedIn">
                        <label class="form-check-label text-muted" for="stayLoggedIn" value="1"><span style="color:white">Remember me</span></label>
                    </div>
                    <input type="hidden" name="signIn" value="1">
                    <button type="submit" name = "signUp" class="btn btn-dark margin">Sign up</button>
                    <div class="row text-muted justify-content-center">
                        <div class="col-md-12">
                            <h5 class="text-muted margin">
                                Already a member?<br /><button type="button" id = "logInButton" class="btn btn-dark margin">Log in</button>
                            </h5>
                        </div>
                    </div>
                </form>

                <form method = "post" id="logInForm">
                    <div class="form-group">
                        <input type="email" name ="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name = "stayLoggedIn" class="form-check-input" id="stayLoggedIn">
                        <label class="form-check-label text-muted" for="stayLoggedIn" value = "1"><span style="color:white">Remember me</span></label>
                    </div>
                    <input type="hidden" name="signIn" value="0">
                    <button type="submit" name = "Log In" class="btn btn-dark margin">Log in</button>
                    <div class="row text-muted justify-content-center">
                        <div class="col-md-12">
                            <h5 class="text-muted margin">
                                 Not a member?<br /><button type="button" class="btn btn-dark margin" id = "signUpButton">Sign up</button>
                            </h5>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php
                if($error != '') {
                    echo
                    '<div class="col-sm-4">
                        <div class="alert alert-dark" role="alert">'.$error.'</div>
                    </div>';
                }
            ?>
        </div>


        <?php
            include('footer.php');
        ?>

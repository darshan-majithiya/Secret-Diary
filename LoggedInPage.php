<?php
    session_start();
    $diaryContent = '';
    if(isset($_COOKIE['id'])) {
        $_SESSION['id'] = $_COOKIE['id'];
    }
    if(isset($_SESSION['id'])) {
        include('connection.php');
        $query = "SELECT diary_content FROM users where id = '".mysqli_real_escape_string($conn, $_SESSION['id'])."'";
        $row = mysqli_fetch_array(mysqli_query($conn, $query));
        $diaryContent = $row['diary_content'];
    } else {
        header("Location: index.php");
    }
    include('header.php');
?>
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar justify-content-between" id="header">
                <a class="navbar-brand" style="font-size: 35px;">Your Secret World</a>
                <form class="form-inline">
                    <a href='index.php?logout=1'><button class="btn btn-dark my-2 my-sm-0" type="button" style="font-size: 18px;">Logout</button></a>
                </form>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="container con2">
                <textarea id = "diary" name="content" class="form-control mr-sm-2"><?php
                    echo $diaryContent;
                ?></textarea>
            </div>
        </div>
    </div>


<?php
    include('footer.php');

?>

<?php
    session_start();
    if (isset($_POST['content'])) {
        include('connection.php');
        $query = "UPDATE users SET diary_content = '".mysqli_real_escape_string($conn, $_POST['content'])."' WHERE id = '".mysqli_real_escape_string($conn, $_SESSION['id'])."' LIMIT 1";
        echo mysqli_error($conn);

        mysqli_query($conn, $query);

    }


?>

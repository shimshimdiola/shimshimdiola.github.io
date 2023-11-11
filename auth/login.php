<?php
if (isset($_POST['login_user'])) {
    # code...
    session_start();
    $_SESSION['user_auth'] = "kazaki";
    header("./index.php");
    exit();
} else {
    # code...
}

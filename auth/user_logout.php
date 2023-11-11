<?php
session_start();
unset($_SESSION['user_auth']);
sleep(2);
header("location:../login.php");
exit();

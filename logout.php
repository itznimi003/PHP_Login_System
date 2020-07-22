<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: /PHP_Login_System/login.php");

?>

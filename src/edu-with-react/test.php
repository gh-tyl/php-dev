<?php
header('Access-Control-Allow-Origin: *');
$userName = $_POST['uname'];
$pass = $_POST['pass'];
echo "Hello $userName. Your password is: $pass";
?>
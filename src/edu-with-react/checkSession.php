<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Header:Content-Type');
header('Content-Type:application/json');
include "./config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];

    $dbcon = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);

    $select = "SELECT * FROM user_table WHERE email='$email'";
    if ($dbcon->connect_error) {
        echo "connection failed " . $dbcon->connect_error;
    } else {
        $result = $dbcon->query($select);

        $dbcon->close();
        echo "User Logged";
    }
}
?>
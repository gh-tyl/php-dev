<?php
include './config.php';
function dbConnect()
{
    global $MYSQL_HOST;
    global $MYSQL_USERNAME;
    global $MYSQL_PASSWORD;
    global $MYSQL_DATABASE;
    $dbcon = new mysqli($MYSQL_HOST, $MYSQL_USERNAME, $MYSQL_PASSWORD, $MYSQL_DATABASE);
    if ($dbcon->connect_error) {
        return false;
    }
    return $dbcon;
}
function dbInsert($id, $fname, $lname, $mail, $pass)
{
    $newRow = "INSERT INTO stu_tb VALUES ($id, '$fname', '$lname', '$mail', '$pass');";
    $con = dbConnect();
    if ($con->query($newRow) === true) {
        $con->close();
        return true;
    } else {
        $con->close();
        return false;
    }
    ;
    // $con->close();
}
?>
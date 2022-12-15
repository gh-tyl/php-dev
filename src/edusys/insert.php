<?php
include './services/dbservices.php';
if ($con = dbConnect()) {
    echo "
    <form action='insert.php' method='post'>
    <input type='number' name='id' placeholder='id'>
    <input type='text' name='fname' placeholder='fname'>
    <input type='text' name='lname' placeholder='lname'>
    <input type='text' name='email' placeholder='email'>
    <input type='text' name='password' placeholder='password'>
    <input type='submit' name='submit' value='submit'>
    </form>
    ";
    if (isset($_POST['submit'])) {
        // id: convert to int
        $id = (int) $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = dbInsert($id, $fname, $lname, $email, $password);
        if ($result) {
            echo "inserted";
        } else {
            echo "not inserted";
        }
    }
} else {
    echo "disconnected";
}
?>
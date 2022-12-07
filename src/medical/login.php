<?php
// 1. Check the req method and redirect to login [*]
// 2. Open and read the data.txt and load the data []
// 3. get the medid and pass.
// 4. loop through the array of users and comapre the medid and pass
include './data/config.php';
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: " . $baseName . "index.php");
    exit();
} else {
    if (file_exists('./data/data.txt')) {
        $medid = $_POST['medid'];
        $pass = $_POST['pass'];
        $file = fopen('./data/data.txt', 'r');
        $data = fread($file, filesize('./data/data.txt'));
        fclose($file);
        $users = json_decode($data, true);
        foreach ($users as $user) {
            if ($user['id'] == $medid && $user['pass'] == $pass) {
                // print_r($user);
                // redirect to profile page
                $_SESSION['logUser'] = $user;
                // print_r($_SESSION['logUser']);
                header("Location: " . $baseName . "profile.php");
                break;
            }
        }
    } else {
        header("Location: " . $baseName . "regform.php");
        exit();
    }
}

?>
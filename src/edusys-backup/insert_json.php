<?php
include './services/dbservices.php';
// load json
$json = file_get_contents('./data/users.json');
// decode json to array
$users = json_decode($json, true);
// loop through array
foreach ($users as $user) {
	$id = $user['uid'];
	$fname = $user['fname'];
	$lname = $user['lname'];
	$email = $user['email'];
	$password = $user['pass'];
	$role = $user['role'];
	$result = dbInsertFromJson($id, $fname, $lname, $email, $password, $role);
	if ($result) {
		echo "inserted";
	} else {
		echo "not inserted";
	}
}
?>
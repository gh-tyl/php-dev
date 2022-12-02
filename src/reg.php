<?php
$data = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	// array_push($data, [$fname, $lname]);
	// print_r($data);
	$dataFile = fopen("./data/reg.txt", "a") or die("Unable to create the file!");
	fwrite($dataFile, "[$fname, $lname]");
	fclose($dataFile);
}
?>
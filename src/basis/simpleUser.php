<?php
// read data from json file
$simpleUserData = file_get_contents('./data/simpleuserData.json');
// convert json to array
$simpleUserData = json_decode($simpleUserData, true);

// // print_r($simpleUserData);
// $simpleProduct = file_get_contents('./data/simpleProducts.json');
// // print_r($simpleUserData);

// if post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get data from post request
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	print($id);
	print($fname);
	print($lname);
	// update data
	$simpleUserData[$id]['first_name'] = $fname;
	$simpleUserData[$id]['last_name'] = $lname;

	// convert array to json
	$simpleUserData = json_encode($simpleUserData, true);
	// write data to json file
	file_put_contents('./data/simpleuserData.json', $simpleUserData);
	// redirect to simpleUser.php
	// header('Location: ./simpleUser.php');
}

// read data from json file
$simpleUserData = file_get_contents('./data/simpleuserData.json');
// convert json to array
$simpleUserData = json_decode($simpleUserData, true);

?>
<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
	<header>
		<!-- place navbar here -->
	</header>
	<main>
		<!-- display in the table -->
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>first name</th>
					<th>last name</th>
					<th>edit</th>
				</tr>
			</thead>
			<tbody>
				<?php
                foreach ($simpleUserData as $user) {
	                echo "<tr>";
	                echo "<td>" . $user['id'] . "</td>";
	                echo "<td>" . $user['first_name'] . "</td>";
	                echo "<td>" . $user['last_name'] . "</td>";
	                echo "<td><a href='simpleUserEdit.php?id=" . $user['id'] . "'>edit</a></td>";
	                echo "</tr>";
                }
                ?>
			</tbody>
		</table>

	</main>
	<footer>
		<!-- place footer here -->
	</footer>
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
		</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
		</script>
</body>

</html>
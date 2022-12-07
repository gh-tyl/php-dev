<?php
$filePath = './data/userData.txt';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$newData = ['fname' => $fname, 'lname' => $lname];
	if (file_exists($filePath)) {
		$dataFile = fopen($filePath, 'r');
		$stringData = fread($dataFile, filesize($filePath));
		fclose($dataFile);
		$mainArray = json_decode($stringData, true);
		array_push($mainArray, $newData);
		$dataFile = fopen($filePath, 'w');
		fwrite($dataFile, json_encode($mainArray));
		fclose($dataFile);
	} else { //file doesn't exists = no DATA
		$mainArray = [];
		array_push($mainArray, $newData);
		$dataFile = fopen($filePath, 'w');
		fwrite($dataFile, json_encode($mainArray));
		fclose($dataFile);
	}
}
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
		<div class="table-responsive">
			<table class="table table-primary">
				<thead>
					<tr>
						<th scope="col">fname</th>
						<th scope="col">lname</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    foreach ($mainArray as $key => $value) {
	                    echo ("<tr>");
	                    echo ("<td>" . $value['fname'] . "</td>");
	                    echo ("<td>" . $value['lname'] . "</td>");
	                    echo ("</tr>");
                    }
                    ?>
				</tbody>
			</table>
		</div>

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
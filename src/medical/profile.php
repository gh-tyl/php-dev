<?php include './pages/header.php'; ?>
<?php
// show profile
$logUser = $_SESSION['logUser'];
?>
<div>
	<div class="card text-white bg-dark col-4">
		<img class="card-img-top" src="<?php echo $logUser['img'] ?>" alt="Title">
		<div class="card-body">
			<?php
            echo ("<h3 class='card-text'>" . $logUser['fname'] . " " . $logUser['lname'] . "</h3>");
            ?>
		</div>
	</div>
</div>
<?php include './pages/footer.php'; ?>
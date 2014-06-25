<?php 	if($_SESSION['admin'] != 1) {
	header('location:login.php');
} ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hav.oc</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel='icon' type='image/icon' href='assets/img/favicon.ico'>
</head>
<body>
	<header>
		<a href="index.php"><img class="logo" src="../public/assets/img/fullTextLogo.png" alt="logo"></a>
		<div class="buttons">
			<div class="adminbutton"><a href="index.php">Public</a></div>
				
				<?php 	if(Login::is_logged_in() && $_SESSION['admin'] != 1) {
						header('location:login.php');
					}
					else if (Login::is_logged_in() && $_SESSION['admin'] == 1) {
						echo '<a href="index.php" class="adminbutton"><div>Public</div></a>';
						echo '<a href="logout.php" class="adminbutton" id="logout"><div>Log Out</div></a>';
					}
					else {
						echo '<a href="login.php"><div class="adminbutton">Log In</div></a>';
					}
			?>
				
		</div>
	</header>
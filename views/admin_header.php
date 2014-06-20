<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hav.oc</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<img class="logo" src="../public/assets/img/fullTextLogo.png" alt="logo">
		<div class="buttons">
			<div class="adminbutton"><a href="index.php">Public</a></div>
				
				<?php 
				if(Login::is_logged_in()): ?>
				<div class="adminbutton" id="logout">	
					<a href="logout.php">Log Out</a>
				</div>
				<? endif; ?>

			</div>
				
		</div>
	</header>
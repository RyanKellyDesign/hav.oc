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
		<a href="cart.php" class="cartbutton" id="admincart"><div>Cart (<?=Cart::get_total()?>)</div></a>
			<?php if(Login::is_logged_in() && !Login::is_admin()) {
						echo '
							<div class="adminbutton">	
								<a href="logout.php">Log Out</a>
							</div>';
					}
					else if (Login::is_logged_in() && Login::is_admin()) {
						echo '<a href="admin.php" class="adminbutton"><div>Admin</div></a>';
						echo '<a href="logout.php" class="adminbutton" id="Adminlogout"><div>Log Out</div></a>';
					}
					else {
						echo '<a href="login.php"><div class="adminbutton">Log In</div></a>';
					}
			?>

			

		
	</header>
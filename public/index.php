<?php 

session_start();
if($_SESSION['intro_seen'] == 1) {
	include '../views/header.php';
	include '../views/nav.php';
	include '../views/home_page.php';
}
else {
	$_SESSION['intro_seen'] = 1;
	header('location:../intro.php');
	exit;
}

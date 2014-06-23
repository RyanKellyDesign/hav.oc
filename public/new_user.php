<?php
	require_once('../models/user.model.php');

	$user = new User();

	$user->username = 'hello';
	$user->password = 'hello';

	$user->save();
?>
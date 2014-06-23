<?php
	require_once('../models/admin.model.php');

	$admn = new Admin();

	$admn->username = 'hello';
	$admn->password = 'hello';

	$admn->save();
	

?>
<?php
	$connect=mysqli_connect('localhost','root','enter_your_password_here') or die('Cannot connect to server');
	mysqli_select_db($connect,'ccmsdatabase') or die ('Cannot find database');
?>

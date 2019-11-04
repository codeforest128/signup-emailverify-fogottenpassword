<?php
	session_start();
	session_destroy();
	// $message = "You have been logout";
	// echo "<script type='text/javascript'>alert('$message');</script>";
	header('Location: index.php');
?>
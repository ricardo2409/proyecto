<?php
	$segundos = -10 +time();
	setcookie(loggedin, date("F jS - g:i a"), $segundos);
	session_destroy();
	header("location:index.php");
?>
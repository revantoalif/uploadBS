<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "download";

	$konek = mysqli_connect($server, $user, $password, $db);
	if ($konek->connect_error) {
		die("Connection Failed");
	}
?>
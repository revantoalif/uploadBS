<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "bpk";

	$konek = mysqli_connect($server,$user,$password,$db);
	if ($konek->connect_error) {
		die("Connection Failed");
	}
?>
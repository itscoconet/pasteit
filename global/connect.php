<?php
//database details
	$DB_server = "localhost";
	$DB_user   = "root";
	$DB_pass   = "";
	$DB_name   = "projects";
	
//connevt to database
	$connect = mysqli_connect($DB_server, $DB_user, $DB_pass, $DB_name);
	if(mysqli_connect_errno($connect)){
		echo "Cannot establish connection with server";
	}
?>
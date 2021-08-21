<?php
	//Connection
	$servername = "localhost";
	$username = "id17452751_spaksdb";
	$password = "Va@123456789";
	$dbname = "id17452751_sparks";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
<?php

    // Configuration for database connection
    $dbHost = "127.0.0.1";
    $dbName = "lapharagustus2023";
    $dbUser = "root";
    $dbPassword = "";

    //     Establish database connection
	$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

?>
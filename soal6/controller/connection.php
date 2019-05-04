<?php

function Open()
{
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'qcount';

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Koneksi ke Database Gagal : " . $conn->error);

	return $conn;
}

function Close($conn)
{
	$conn->close();
}


?>
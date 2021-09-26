<?php

	$dsn = 'mysql:host=localhost;dbname=corona';
	$user = 'root';
	$pass = '';
    //$dsn = 'mysql:host=db741781044.db.1and1.com;dbname=db741781044';
	//$user = 'dbo741781044';
	//$pass = 'Amer121Zaza#';
	$option = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);
	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo 'The Connection with DB is OK'; // Test DB Connection
	}
catch(PDOException $e) {
	echo 'Failed To Connect with DB' . $e->getMessage();
}
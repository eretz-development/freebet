<?php

	define('HOST', 'mysql-freebet.alwaysdata.net');
	define('DB_NAME', 'freebet_db');
	define('USER', 'freebet');
	define('PASS', 'Freebetcestsympa01');

	try{
		$db = new PDO("mysql:host=". HOST . ";dbname=" . DB_NAME, USER, PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Connect > OK <br>";
	} catch(PDOException $e){
		echo $e;
	}
?>
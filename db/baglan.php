<?php
@ob_start();
@session_start();
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL ^ E_NOTICE);
		$host = "localhost";
		$db = "cigdem_beykent";
		$ad = "root";
		$pw = "";
		try {
			$veritabani =new PDO("mysql:host=$host;dbname=$db;charset=utf8","$ad","$pw");
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
?>
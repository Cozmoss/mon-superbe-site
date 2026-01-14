<?php

class MyPDO
{
	private const DB_HOST = "localhost";
	private const DB_NAME = "lpw_animal";
	private const DB_USER = "ifapme";
	private const DB_PASS = "ifapme";
	private static $myPDOInstance = null;

	public static function getPDO(): PDO
	{
		//Pattern Singleton
		if (is_null(self::$myPDOInstance)) {
			//Créer la connexion
			try {
				$options = [
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				];
				$url = "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME;
				self::$myPDOInstance = new PDO($url, self::DB_USER, self::DB_PASS);
			} catch (PDOException $e) {
				$message = "Erreur de connexion à la DB : " . $e->getMessage();
				die($message);
			}
		}

		//Renvoyer l'instance qui existe déjà

		return self::$myPDOInstance;
	}
}

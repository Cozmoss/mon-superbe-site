<?php

if (isset($_POST["submit"])) {
	$nombre1 = $_POST["nombre1"];
	$nombre2 = $_POST["nombre2"];
	$operation = $_POST["operation"];
	switch ($operation) {
		case "add":
			$resultat = $nombre1 + $nombre2;
			break;
		case "sub":
			$resultat = $nombre1 - $nombre2;
			break;
		case "mul":
			$resultat = $nombre1 * $nombre2;
			break;
		case "div":
			if ($nombre2 != 0) {
				$resultat = $nombre1 / $nombre2;
			} else {
				$resultat = "Erreur : Division par zéro";
			}
			break;
		default:
			$resultat = "Opération invalide";
			break;
	}
}

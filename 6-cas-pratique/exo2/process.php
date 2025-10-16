<?php

if (isset($_POST["submit"])) {
	$nombre1 = $_POST["nombre1"];
	$nombre2 = $_POST["nombre2"];
	$operation = $_POST["operation"];
	switch ($operation) {
		case "add":
			$resultat = $nombre1 + $nombre2;
			$operateur = "+";
			break;
		case "sub":
			$resultat = $nombre1 - $nombre2;
			$operateur = "-";
			break;
		case "mul":
			$resultat = $nombre1 * $nombre2;
			$operateur = "*";
			break;
		case "div":
			if ($nombre2 != 0) {
				$resultat = $nombre1 / $nombre2;
				$operateur = "/";
			} else {
				$resultat = "Erreur : Division par zéro";
				$operateur = "/";
			}
			break;
		default:
			$resultat = "Opération invalide";
			break;
	}
}

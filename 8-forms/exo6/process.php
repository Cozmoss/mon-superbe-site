<?php

if (isset($_POST["submit"])) {
	$page = $_POST["submit"];

	switch ($page) {
		case 'vendre':
			echo "Vous avez choisi de vendre un bien.";
			break;
		case 'acheter':
			echo "Vous avez choisi d'acheter un bien.";
			break;
		case 'louer':
			echo "Vous avez choisi de louer un bien.";
			break;
		default:
			echo "Page non reconnue.";
			break;
	}
} else {
	echo "Aucune action sélectionnée.";
}

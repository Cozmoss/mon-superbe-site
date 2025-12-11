<?php

require __DIR__ . "/../classes/arme.php";

// Fonction pour supprimer les caractères spéciaux (même que dans la classe Arme)
function removeSpecialChars($str)
{
	$str = strtolower($str);
	$str = str_replace(["é", "è", "ê", "ë"], "e", $str);
	$str = str_replace(["à", "â", "ä"], "a", $str);
	$str = str_replace(["î", "ï"], "i", $str);
	$str = str_replace(["ô", "ö"], "o", $str);
	$str = str_replace(["ù", "û", "ü"], "u", $str);
	$str = str_replace(["ç"], "c", $str);
	return $str;
}

// require __DIR__ . "/../classes/player.php";
$armes = [
	new Arme("Epée", 1, 5, "Une arme tranchante"),
	new Arme("Arc", 1, 2, "Une arme à distance"),
	new Arme("Hache", 1, 5, "Une arme tranchante ou un outil qui permet aussi de couper du bois"),
	new Arme("Fléau", 1, 5, "Une arme contondante du moyen-âge"),
];

// Vérifier si un paramètre GET existe pour chaque arme et mettre à jour le level
foreach ($armes as $arme) {
	$nomSansAccents = removeSpecialChars($arme->getName());
	$paramName = "level" . $nomSansAccents;

	if (isset($_GET[$paramName])) {
		$newLevel = intval($_GET[$paramName]);
		// Vérifier que le level est valide (entre 1 et levelMax)
		if ($newLevel >= 1 && $newLevel <= $arme->getLevelMax()) {
			$arme->setLevel($newLevel);
		}
	}
}

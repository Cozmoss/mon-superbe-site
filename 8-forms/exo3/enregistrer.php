<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3.5 : Forms";

//Mettre le nom du titre de la page que vous voulez

if (isset($_POST["submit"])) {
	$lastname = htmlspecialchars(trim($_POST["lastname"]));
	$firstname = htmlspecialchars(trim($_POST["firstname"]));
	$birthday = htmlspecialchars(trim($_POST["birthday"]));
	$address = htmlspecialchars(trim($_POST["address"]));

	echo "Le nouveau membre s'appelle $firstname $lastname. Il/elle est né(e) le $birthday. Il/elle habite à $address ";
}

/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";

?>

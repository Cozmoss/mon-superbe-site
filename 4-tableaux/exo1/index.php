<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 1 : Tableaux";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$pays = [
    "Allemagne" => "Berlin",
    "Italie" => "Rome",
    "Belgique" => "Bruxelles",
    "Maroc" => "Rabat",
    "Espagne" => "Madrid",
];

$pays2 = [
    "Allemagne" => "Berlin",
    "Italie" => "Rome",
    "Belgique" => "Bruxelles",
    "Maroc" => "Rabat",
    "Espagne" => "Madrid",
];
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

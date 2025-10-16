<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Tableaux";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$pays_population = [
    "France" => 67595000,
    "Suede" => 9998000,
    "Suisse" => 8417000,
    "Kosovo" => 1820631,
    "Malte" => 434403,
    "Mexique" => 122273500,
    "Allemagne" => 82800000,
];

echo "La population de la France est $pays_population[France]";
echo "<br>La population du Mexique est $pays_population[Mexique]";
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

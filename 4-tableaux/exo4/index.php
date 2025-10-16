<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 4 : Tableaux";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$personnes = ["Jean" => 16, "Manuel" => 19, "André" => 66];
if ($personnes["Jean"] > $personnes["Manuel"]) {
    echo "Jean est plus grand grand que Manuel";
} else {
    echo "Manuel est plus grand grand que Jean";
}
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

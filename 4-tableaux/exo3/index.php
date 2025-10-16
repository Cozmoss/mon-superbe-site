<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3 : Tableaux";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$personnes = ["Jean" => 16, "Manuel" => 19, "André" => 66];

foreach ($personnes as $nom => $age) {
    echo "$nom a $age ans<br>";
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

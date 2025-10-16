<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Conditions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$heure = 19;
if ($heure >= 18 || $heure < 6) {
    echo "C'est la nuit";
} elseif ($heure >= 12) {
    echo "C'est l'après-midi";
} else {
    echo "C'est le matin";
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

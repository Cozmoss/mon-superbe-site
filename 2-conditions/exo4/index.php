<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 4 : Conditions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$nombre1 = 19;
$nombre2 = 36;
if ($nombre1 > $nombre2) {
    echo "$nombre1 est plus grand que $nombre2";
} elseif ($nombre1 < $nombre2) {
    echo "$nombre1 est plus petit que $nombre2";
} else {
    echo "$nombre1 est égal à $nombre2";
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

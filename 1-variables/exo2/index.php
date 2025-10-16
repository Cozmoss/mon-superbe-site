<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Variables";

//Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$nombre1 = 15;
$nombre2 = 10;

$sum = $nombre1 + $nombre2;

echo "La somme de $nombre1 + $nombre2 = $sum";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

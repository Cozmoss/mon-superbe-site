<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 4 : Strings";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$str = "lE cHaT eSt sUR lA tABLE";
$str_min = strtolower($str);
$str_capitalized = ucwords($str_min);

echo $str_capitalized;
?>








<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

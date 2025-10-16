<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Strings";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$str1 = "Etoiles de mer";
$str2 = "chat et la souris";

$str1_min = strtolower($str1);
$str2_min = strtolower($str2);

if ($str1_min < $str2_min) {
    echo $str1 . "<br>";
    echo $str2 . "<br>";
} else {
    echo $str2 . "<br>";
    echo $str1 . "<br>";
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

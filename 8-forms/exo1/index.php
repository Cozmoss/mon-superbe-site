<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 1 : Strings";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$str = "Bonjour et bienvenue au cours de programmation";
$arr = str_split($str);

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
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

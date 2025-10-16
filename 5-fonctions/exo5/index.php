<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Fonctions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$notes = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

function check($arr, $n)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $n) {
            return "true";
        }
    }
    return "false";
}

$check = check($notes, 20);
echo $check;
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

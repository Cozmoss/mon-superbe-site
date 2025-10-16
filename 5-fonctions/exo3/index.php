<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3 : Fonctions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$notes = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

function moyenne($arr)
{
    $somme = 0;
    $moyennne = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $somme += $arr[$i];
        $moyennne = $somme / count($arr);
    }
    echo "La moyenne des notes est de : $moyennne";
}

moyenne($notes);
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

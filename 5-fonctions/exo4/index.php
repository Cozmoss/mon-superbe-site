<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 4 : Fonctions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$notes = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

function maxNote($arr)
{
    echo "La note la plus élevée est : " . max($arr);
}
function minNote($arr)
{
    echo "La note la plus basse est : " . min($arr);
}

maxNote($notes);
echo "<br>";
minNote($notes);
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Fonctions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
function factorielle($n)
{
    $facto = 1;
    for ($i = $n; $i >= 1; $i--) {
        $facto *= $i;
    }
    echo "la factorielle de $n est $facto";
}

factorielle(3);
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

<?php ob_start(); //NE PAS MODIFIER
$titre = "Partie 3 - Les tableaux associatifs";

//Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$taille = 5;

for ($i = 1; $i <= $taille; $i++) {
    for ($j = 1; $j <= $taille; $j++) {
        echo $i * $j . " ";
    }
    echo "<br>";
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

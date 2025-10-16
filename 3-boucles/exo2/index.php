<?php ob_start(); //NE PAS MODIFIER
$titre = "Partie 3 - Les tableaux associatifs";

//Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$numbers = [10, 20, 30, 40, 50];
foreach ($numbers as $number) {
    echo "<p>Le nombre est : $number</p>";
}
if (in_array(20, $numbers)) {
    echo "<p>Le nombre 20 est dans le tableau</p>";
} else {
    echo "<p>Le nombre 20 n'est pas dans le tableau</p>";
}
if (in_array(35, $numbers)) {
    echo "<p>Le nombre 35 est dans le tableau</p>";
} else {
    echo "<p>Le nombre 35 n'est pas dans le tableau</p>";
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

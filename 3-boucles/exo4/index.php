<?php ob_start(); //NE PAS MODIFIER
$titre = "Partie 3 - Les tableaux associatifs";

//Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$numbers = [10, 20, 20, 30, 30, 30, 40, 50, 50];
$unique = array_unique($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
echo "<br>";
foreach ($unique as $number) {
    echo "$number ";
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

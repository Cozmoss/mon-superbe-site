<?php ob_start(); //NE PAS MODIFIER
$titre = "Partie 3 - Les tableaux associatifs";

//Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
for ($i = 1; $i <= 10; $i++) {
    $star = str_repeat("*", $i);
    echo "$star <br>";
}
echo "<br>";
for ($i = 10; $i >= 1; $i--) {
    $star = str_repeat("*", $i);
    echo "$star <br>";
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

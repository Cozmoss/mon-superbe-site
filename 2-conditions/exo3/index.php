<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3 : Conditions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$age = 36;
if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous n'êtes pas majeur";
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

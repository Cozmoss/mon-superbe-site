<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 8 : Conditions";
?>

<?php
$age = 36;
switch ($age) {
    case $age <= 5:
        echo "Vous êtes un bébé.";
        break;
    case $age > 6 && $age <= 12:
        echo "Vous êtes un enfant.";
        break;
    case $age > 13 && $age <= 19:
        echo "Vous êtes un adolescent.";
        break;
    case $age > 20 && $age <= 59:
        echo "Vous êtes un adulte.";
        break;
    case $age >= 60:
        echo "Vous êtes un senior.";
        break;
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

<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Conditions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$budget = 2553.89;
$achats = 3554.76;
if ($achats < $budget) {
    echo "Vous avez le budget nécessaire pour vos achats";
} else {
    echo "Vous n'avez pas le budget nécessaire pour vos achats";
}

echo $achats < $budget
    ? "Vous avez le budget nécessaire pour vos achat"
    : "Vous n'avez pas le budget nécessaire pour vos achats";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

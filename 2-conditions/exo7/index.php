<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 7 : Conditions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$achat = 150;
if ($achat > 100) {
    $reduc = $achat * 0.1;
    echo "Vous avez droit à une réduction de 10%.<br>";
    echo "Montant de la réduction : $reduc €<br>";
    echo "Montant à payer : " . ($achat - $reduc) . " €";
} elseif ($achat > 50) {
    $reduc = $achat * 0.05;
    echo "Vous avez droit à une réduction de 5%.<br>";
    echo "Montant de la réduction : $reduc €<br>";
    echo "Montant à payer : " . ($achat - $reduc) . " €";
} else {
    echo "Vous n'avez pas droit à une réduction.<br>";
    echo "Montant à payer : $achat €";
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

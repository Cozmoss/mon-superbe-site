<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Tableaux";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$personnes = ["Jean" => 16, "Manuel" => 19, "André" => 66];
if (
    $personnes["André"] > $personnes["Jean"] &&
    $personnes["André"] > $personnes["Manuel"]
) {
    echo "André est plus âgé que Jean et Manuel.";
} else {
    echo "André n'est pas le plus âgé.";
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

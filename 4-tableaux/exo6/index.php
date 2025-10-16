<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Tableaux";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$personnes = ["Adam" => 46, "Linda" => 35, "Joe" => 26];
if (
    $personnes["Adam"] > $personnes["Linda"] &&
    $personnes["Adam"] > $personnes["Joe"]
) {
    echo "Adam est plus âgé que Linda et Joe.";
} else {
    echo "Adam n'est pas le plus âgé.";
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

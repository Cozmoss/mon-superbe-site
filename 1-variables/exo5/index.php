<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Variables";

//Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$nom = "Jean";

echo "Le nom est : $nom";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

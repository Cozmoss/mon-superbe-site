<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3 : Variables";

//Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$prenom = "Marie";
$nom = "Dupont";
$nomComplet = $prenom . " " . $nom;

echo $nomComplet;
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

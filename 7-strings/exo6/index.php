<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 6 : Strings";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$mail = "d.pascal2012@mail.com";

$index_arobase = strpos($mail, "@");
$utilisateur = substr($mail, 0, $index_arobase);
echo "Nom de l'utilisateur : $utilisateur<br>";

echo "Index du caractère @ : $index_arobase<br>";

$domaine = substr($mail, $index_arobase + 1);
echo "Nom du domaine : $domaine<br>";

if ($domaine == "gmail.com") {
    echo "C'est bien une adresse Gmail.";
} else {
    echo "Ce n'est pas une adresse Gmail.";
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

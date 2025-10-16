<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 1 : Fonctions";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$mois = [
    "Janvier" => "31 jours",
    "Février" => "28 jours",
    "Mars" => "31 jours",
    "Avril" => "30 jours",
    "Mai" => "31 jours",
    "Juin" => "30 jours",
    "Juillet" => "31 jours",
    "Août" => "31 jours",
    "Septembre" => "30 jours",
    "Octobre" => "31 jours",
    "Novembre" => "30 jours",
    "Décembre" => "31 jours",
];
function afficherMois($mois)
{
    foreach ($mois as $nom => $jours) {
        echo "Le mois de $nom a $jours.<br>";
    }
}

afficherMois($mois);
echo "<hr>";

function afficher_bis($mois)
{
    echo "Les mois qui ont 31 jours sont :<br>";
    foreach ($mois as $nom => $jours) {
        if ($jours === "31 jours") {
            echo "$nom<br>";
        }
    }
}
afficher_bis($mois);
echo "<hr>";

function afficher_2bis($mois)
{
    echo "Les mois qui ont 30 jours sont :<br>";
    foreach ($mois as $nom => $jours) {
        if ($jours == "30 jours") {
            echo "$nom<br>";
        }
    }
}

afficher_2bis($mois);
echo "<hr>";

function afficher_3bis($mois)
{
    echo "Les mois qui ont moins de 30 jours sont :<br>";
    foreach ($mois as $nom => $jours) {
        if ($jours == "28 jours") {
            echo "$nom<br>";
        }
    }
}
afficher_3bis($mois);
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

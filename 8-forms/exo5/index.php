<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Strings";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$citation =
    " Les dunes changent sous l'action du vent, mais le désert reste toujours le même. ";

$pos_desert_avant = strpos($citation, "désert");
echo "1. Position du mot 'désert' avant trim : $pos_desert_avant<br>";

$citation = ltrim($citation);
echo "2. Supression des espaces au début : '$citation'<br>";

$citation = rtrim($citation);
echo "3. Suppression des espaces à la fin : '$citation'<br>";

$pos_desert_apres = strpos($citation, "désert");
echo "4. Position du mot 'désert' après trim : $pos_desert_apres<br>";

$sous_chaine1 = substr($citation, 0, strpos($citation, ","));
echo "5. sous_chaine1 : $sous_chaine1<br>";

$taille_sous_chaine1 = strlen($sous_chaine1);
echo "6. Taille de sous_chaine1 : $taille_sous_chaine1<br>";

$nb_o_sous_chaine1 = substr_count($sous_chaine1, "o");
echo "7. Nombre de 'o' dans sous_chaine1 : $nb_o_sous_chaine1<br>";

$sous_chaine2 = substr(
    $citation,
    strpos($citation, "le désert"),
    strpos($citation, ".") - strpos($citation, "le désert"),
);
echo "8. sous_chaine2 : $sous_chaine2<br>";

$taille_sous_chaine2 = strlen($sous_chaine2);
echo "9. Taille de sous_chaine2 : $taille_sous_chaine2<br>";

$nb_e_sous_chaine2 = substr_count($sous_chaine2, "e");
echo "10. Nombre de 'e' dans sous_chaine2 : $nb_e_sous_chaine2<br>";

$nb_on_citation = substr_count($citation, "on");
echo "11. Nombre de 'on' dans la citation : $nb_on_citation<br>";

$taille_citation = strlen($citation);
echo "12. Taille de la citation : $taille_citation<br>";
?>









<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

<?php ob_start(); //NE PAS MODIFIER
$titre = "Partie 3 - Les tableaux associatifs";

//Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$grades = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];
foreach ($grades as $grade) {
    echo "$grade ";
}

$average = array_sum($grades) / count($grades);
echo "<br>Moyenne : $average";
$i = 0;
foreach ($grades as $grade) {
    if ($grade >= 10) {
        $i++;
    }
}
echo "<br>Il y a $i notes au dessus ou égal à 10<br>";
$maxGrade = 0;
foreach ($grades as $grade) {
    if ($grade == 20) {
        $maxGrade++;
    }
}
echo "Il y a $maxGrade notes de 20";

$topGrade = max($grades);
echo "<br>La meilleure note est $topGrade";
$worstGrade = min($grades);
echo "<br>La pire note est $worstGrade";
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

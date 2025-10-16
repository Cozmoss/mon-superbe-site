<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3 : Strings";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$str1 = "PHP 8 \n est meilleur\n que ASP \n et JSP \n réunis";

$strReplace = str_replace("\n", "<br>", $str1);

echo $strReplace;
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 6 : Forms";

//Mettre le nom du titre de la page que vous voulez
?>

<form action="" method="post">
	<button class="btn btn-primary" name="submit" value="vendre">Vendre</button>
	<button class="btn btn-primary" name="submit" value="acheter">Acheter</button>
	<button class="btn btn-primary" name="submit" value="louer">Louer</button>

</form>

<?php require_once 'process.php'; ?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

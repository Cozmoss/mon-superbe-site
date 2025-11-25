<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Forms";

//Mettre le nom du titre de la page que vous voulez
?>

<form action="" method="post">
	<div class="form-group">
		<label for="ht">Prix Hors Taxes</label>
		<input type="text" name="ht" class='form-control' value="<?= isset($_POST["ht"]) ? htmlspecialchars($_POST["ht"]) : "" ?>">
	</div>
	<div class="form-group">
		<label for="tva">Taux de TVA (en %)</label>
		<input type="number" name="tva" class='form-control' value="<?= isset($_POST["tva"],) ? htmlspecialchars($_POST["tva"]) : "" ?>">
	</div>
	<button class="btn btn-primary" name="submit">Envoyer</button>

	<?php if (isset($_POST["submit"])) {
 	$ht = floatval(str_replace(",", ".", htmlspecialchars(trim($_POST["ht"]))),);
 	$tva = floatval(htmlspecialchars(trim($_POST["tva"])));
 	if ($ht > 0 && $tva > 0) {

 		$montant_tva = ($ht * $tva) / 100;
 		$ttc = $ht + $montant_tva;
 		?>
			<div class="form-group mt-3">
				<label>Montant de la TVA</label>
				<input type="text" class="form-control" value="<?= number_format($montant_tva,2,","," ",) ?>" readonly>
			</div>
			<div class="form-group">
				<label>Prix TTC</label>
				<input type="text" class="form-control" value="<?= number_format($ttc,2,","," ",) ?>" readonly>
			</div>
		<?php
 	}
 } ?>
</form>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

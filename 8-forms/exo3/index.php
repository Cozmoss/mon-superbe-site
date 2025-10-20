<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3 : Forms";

//Mettre le nom du titre de la page que vous voulez
?>

<form action="enregistrer.php" method="post">
	<div class="form-group">
		<label for="lastname">Nom</label>
		<input type="text" name="lastname" class='form-control'>
	</div>
	<div class="form-group">
		<label for="firstname">Prénom</label>
		<input type="text" name="firstname" class='form-control'>
	</div>
	<div class="form-group">
		<label for="birthday">Date de naissance</label>
		<input type="date" name="birthday" class='form-control'>
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class='form-control'>
	</div>
	<div class="form-group">
		<label for="address">Adresse</label>
		<input type="text" name="address" class='form-control'>
	</div>
	<button class="btn btn-primary" name="submit">Envoyer</button>
</form>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

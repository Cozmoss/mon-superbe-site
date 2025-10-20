<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 1 : Forms";

//Mettre le nom du titre de la page que vous voulez
?>

<form action="" method="post">
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
		<input type="texte" name="address" class='form-control'>
	</div>
	<button class="btn btn-primary" name="submit">Envoyer</button>
</form>

<?php if (isset($_POST["submit"])) {
	$lastname = htmlspecialchars(trim($_POST["lastname"]));
	$firstname = htmlspecialchars(trim($_POST["firstname"]));
	$birthday = htmlspecialchars(trim($_POST["birthday"]));
	$email = htmlspecialchars(trim($_POST["email"]));
	$address = htmlspecialchars(trim($_POST["address"]));

	echo "<h2>Informations reçues :</h2>";
	echo "<p>Nom : $lastname</p>";
	echo "<p>Prénom : $firstname</p>";
	echo "<p>Date de naissance : $birthday</p>";
	echo "<p>Email : $email</p>";
	echo "<p>Adresse : $address</p>";
} ?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

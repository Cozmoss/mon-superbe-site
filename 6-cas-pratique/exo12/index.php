<?php ob_start(); //NE PAS MODIFIER
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
$titre = "Exo 12 : TP Animal DB";

//Mettre le nom du titre de la page que vous voulez
?>

<?php require __DIR__ . "/processAnimal.php"; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Age</th>
      <th scope="col">Sexe</th>
      <th scope="col">Type</th>
      <th scope="col">Images</th>
    </tr>
  </thead>
  <tbody>
	  <?php foreach ($animals as $animal): ?>
	      <tr>
	        <th><?= $animal->getNom() ?></th>
	        <td><?= $animal->getAge() ?></td>
	        <td><?= $animal->getSexe() ?></td>
	        <td><?= $animal->getType() ?></td>
	        <td><?php foreach ($animal->getImages() as $img): ?>
	            <img src="images/<?= $img ?>" alt="<?= $animal->getNom() ?>" style="width: 100px; height: auto; margin-right: 10px;">
	          <?php endforeach; ?>
			</td>
	      </tr>
	  <?php endforeach; ?>
  </tbody>
</table>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

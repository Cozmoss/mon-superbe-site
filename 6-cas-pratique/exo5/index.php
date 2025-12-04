<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Gestion de livres avec la POO";

//Mettre le nom du titre de la page que vous voulez
?>

<?php require __DIR__ . "/controllers/book_list.php"; ?>

<form method="POST" action="">
	<div>
		<label for="edition">Edition :</label>
		<select name="edition" id="edition" onchange="this.form.submit()">
			<option value="tous">Toutes les éditions</option>
			<?php foreach ($editions as $edition): ?>
				<option value="<?= $edition ?>" <?= $editionFiltre == $edition ? "selected" : "" ?>>
					<?= $edition ?>
				</option>
			<?php endforeach; ?>
		</select>
		<br>
		<label for="date">Date de parution :</label>
		<select name="date" id="date" onchange="this.form.submit()">
			<option value="tous">Toutes les dates</option>
			<?php foreach ($dates as $date): ?>
				<option value="<?= $date ?>" <?= $dateFiltre == $date ? "selected" : "" ?>>
					<?= $date ?>
				</option>
			<?php endforeach; ?>
		</select>
	</div>
</form>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Edition</th>
      <th scope="col">Auteur</th>
      <th scope="col">Date de publication</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($books as $book): ?>
        <?php
        // Application des filtres
        $afficher = true;

        // Filtre par édition
        if ($editionFiltre != "tous" && $book->getEdition() != $editionFiltre) {
        	$afficher = false;
        }

        // Filtre par date
        if ($dateFiltre != "tous" && $book->getDatePublication() != $dateFiltre) {
        	$afficher = false;
        }
        ?>
        <?php if ($afficher): ?>
          <tr>
            <th scope="row"><?= $book->getNom() ?></th>
            <td><?= $book->getEdition() ?></td>
            <td><?= $book->getAuteur() ?></td>
            <td><?= $book->getDatePublication() ?></td>
          </tr>
        <?php endif; ?>
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

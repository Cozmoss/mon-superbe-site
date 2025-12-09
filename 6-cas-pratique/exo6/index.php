<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 6 : Gestion de maison avec la POO";

//Mettre le nom du titre de la page que vous voulez
?>

<?php require __DIR__ . "/controllers/house_list.php"; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Nombres de chambres</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($houses as $house): ?>
          <tr>
            <th scope="row"><?= $house->getId() ?></th>
            <td><?= $house->getDate() ?></td>
            <td><?= $house->getRoomNumbers() ?></td>
            <td><?= $house->getSurface() ?></td>
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

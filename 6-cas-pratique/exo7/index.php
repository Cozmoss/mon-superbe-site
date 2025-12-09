<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 7 : Manipuler plusieurs classes avec POO";

//Mettre le nom du titre de la page que vous voulez
?>

<?php require __DIR__ . "/controllers/player_list.php"; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Force</th>
      <th scope="col">PV</th>
      <th scope="col">ID Arme</th>
      <th scope="col">Nom Arme</th>
      <th scope="col">Degat Arme</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($players as $player): ?>
          <tr>
            <th scope="row"><?= $player->getName() ?></th>
            <td><?= $player->getForce() ?></td>
            <td><?= $player->getPv() ?></td>
            <td><?= $player->getArme()->getId() ?></td>
            <td><?= $player->getArme()->getName() ?></td>
            <td><?= $player->getArme()->getDamage() ?></td>
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

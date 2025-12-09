<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 8 : Manipuler plusieurs classes avec POO";

//Mettre le nom du titre de la page que vous voulez
?>

<?php require __DIR__ . "/controllers/player_list.php"; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <?php foreach ($armes as $arme): ?>
      <th scope="col">Arme <?= $arme->getId() ?></th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($players as $player): ?>
          <tr>
            <th scope="row"><?= $player->getName() ?></th>
            <?php foreach ($player->getArme() as $arme): ?>
            <td><?= $arme->getName() ?></td>
            <?php endforeach; ?>
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

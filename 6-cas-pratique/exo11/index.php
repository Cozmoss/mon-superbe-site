<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 11 : Gestion du niveaux des armes en POO avec selecteur de niveaux";

//Mettre le nom du titre de la page que vous voulez
?>

<?php require __DIR__ . "/controllers/armes_list.php"; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($armes as $arme): ?>
          <tr>
            <?= $arme ?>
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

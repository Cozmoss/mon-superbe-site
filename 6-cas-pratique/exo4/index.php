<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 4 : Animalerie en POO";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
require __DIR__ . "/views/animal_list.php";

$type = $_GET["type"] ?? "tous";
?>

<div>
    <a href="?type=tous" name="tous" class="btn btn-primary">Tous</a>
    <a href="?type=chiens" name="chiens" class="btn btn-primary">Chiens</a>
    <a href="?type=chats" name="chats" class="btn btn-primary">Chats</a>
</div>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Age</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($animals as $animal): ?>
        <?php if ($type == "tous" || ($type == "chiens" && $animal->getType() == "chien") || ($type == "chats" && $animal->getType() == "chat")): ?>
          <tr>
            <th scope="row"><?= $animal->getNom() ?></th>
            <td><?= $animal->getAge() ?></td>
            <td><?= $animal->getType() ?></td>
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

<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 1 : Animalerie";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
$animal1 = ["nom" => "Mina", "age" => 2, "type" => "chien"];
$animal2 = ["nom" => "Tya", "age" => 7, "type" => "chat"];
$animal3 = ["nom" => "Milo", "age" => 4, "type" => "chat"];
$animal4 = ["nom" => "Hocket", "age" => 6, "type" => "chien"];
$animals = [$animal1, $animal2, $animal3, $animal4];

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
        <?php if (
            $type == "tous" ||
            ($type == "chiens" && $animal["type"] == "chien") ||
            ($type == "chats" && $animal["type"] == "chat")
        ): ?>
          <tr>
            <th scope="row"><?= $animal["nom"] ?></th>
            <td><?= $animal["age"] ?></td>
            <td><?= $animal["type"] ?></td>
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

<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 4 : Forms";

//Mettre le nom du titre de la page que vous voulez
?>

<form action="process.php" method="post">
  <div class="form-group">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Entrer votre nom">
  </div>
  <div class="form-group">
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Entrer votre prénom">
  </div>
  <div class="form-group">
    <label for="address">Adresse</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Entrer votre adresse">
  </div>
  <div class="form-group">
    <label for="city">Ville</label>
    <input type="text" name="city" class="form-control" id="city" placeholder="Entrer votre ville">
  </div>
  <div class="form-group">
    <label for="cp">Code postal</label>
    <input type="number" name="cp" class="form-control" id="cp" placeholder="Entrer votre code postal">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>








<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

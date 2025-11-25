<?php ob_start();//NE PAS MODIFIER
$titre = "TP 3 : Validation d’un formulaire et opérations
CRUD (PHP + MySQLi)";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
session_start();
if (isset($_SESSION["message"]) && isset($_SESSION["msg_type"])): ?>
        <div class="alert alert-<?php echo $_SESSION["msg_type"]; ?>">
        <?php
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
        unset($_SESSION["msg_type"]);
        ?>
        </div>
 <?php endif; ?>

<form id="submitForm" method="post" action="add_user.php" class="container-sm mt-4">
  <div class="mb-3">
    <label for="firstname" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
    <div hidden id="errMsgFirstname" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Nom</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
    <div hidden id="errMsgLastname" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
    <div hidden id="errMsgEmail" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label class="form-label d-block mb-2">Sexe</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="sex-male" value="Homme" checked>
      <label class="form-check-label" for="sex-male">Homme</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="sex-female" value="Femme">
      <label class="form-check-label" for="sex-female">Femme</label>
    </div>
    <div hidden id="errMsgSex" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Date de naissance</label>
    <input type="date" class="form-control" id="date" name="date">
    <div hidden id="errMsgDate" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" name="age">
    <div hidden id="errMsgAge" class="form-text"></div>
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Envoyer</button>
</form>



<script src="script.js"></script>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

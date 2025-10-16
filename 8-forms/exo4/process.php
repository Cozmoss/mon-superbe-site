<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 4.5 : Forms - Process";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
session_start();

if (!isset($_SESSION["form_data"])) {
    $_SESSION["form_data"] = [];
}

if (isset($_POST["submit"])) {
    $lastname = htmlspecialchars($_POST["lastname"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $address = htmlspecialchars($_POST["address"]);
    $city = htmlspecialchars($_POST["city"]);
    $cp = htmlspecialchars($_POST["cp"]);

    $_SESSION["form_data"][] = [
        "lastname" => $lastname,
        "firstname" => $firstname,
        "address" => $address,
        "city" => $city,
        "cp" => $cp,
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Adresse</th>
          <th scope="col">Ville</th>
          <th scope="col">Code postal</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($_SESSION["form_data"] as $row): ?>
        <tr>
            <th scope="row"><?= $row["lastname"] ?></th>
            <td><?= $row["firstname"] ?></td>
            <td><?= $row["address"] ?></td>
            <td><?= $row["city"] ?></td>
            <td><?= $row["cp"] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

</body>
</html>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

<?php ob_start(); //NE PAS MODIFIER
$titre = "TP 3 : Validation d’un formulaire et opérations
CRUD (PHP + MySQLi)";

//Mettre le nom du titre de la page que vous voulez
?>

<?php
session_start();
require 'db_connect.php';
$connection = get_connection();

if (isset($_POST['submit'])) {
	$firstname = trim($_POST['firstname'] ?? '');
    $lastname  = trim($_POST['lastname'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $gender    = $_POST['gender'] ?? 'Homme';
    $date      = $_POST['date'] ?? '';
    $age       = trim($_POST['age'] ?? '');
	$query = "INSERT INTO users (firstname, lastname, email, gender, birthdate, age) values (?,?,?,?,?,?)";
	$statement = $connection->prepare($query);
	$statement->bind_param("sssssi", $firstname, $lastname, $email, $gender, $date, $age);
	$statement->execute();
	$statement->close();
	$connection->close();
}


function get_data()
{
    $connection = get_connection();
    $query = "SELECT * FROM users";
    ($result = $connection->query($query)) or die($connection->error);
    $connection->close();
    return $result;
} ?>

<?php
if (isset($_SESSION["message"]) && isset($_SESSION["msg_type"])): ?>
        <div class="alert alert-<?php echo $_SESSION["msg_type"]; ?>">
        <?php
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
        unset($_SESSION["msg_type"]);
        ?>
        </div>
 <?php endif; ?>

<div class="container-sm">
 <table class="table">
   <thead class="bg-secondary text-white">
      <tr>
          <th hidden>
           Id
          </th>
          <th>
           Nom
          </th>
          <th>
          Prénom
          </th>
          <th >Email </th>
          <th >Sexe </th>
          <th >Date de naissance </th>
          <th >Age </th>
          <th >Actions </th>
      </tr>
   </thead>
   <tbody>
    <?php
    // get the data from the database
    $data = get_data();
    while ($row = $data->fetch_assoc()): ?>
    <tr>
        <td hidden><?php echo $row["id"]; ?></td>
        <td><?php echo $row["firstname"]; ?> </td>
        <td><?php echo $row["lastname"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["birthdate"]; ?></td>
        <td><?php echo $row["age"]; ?></td>
        <td>
            <a class="btn btn-primary" href="update_user.php?edit=<?php echo $row[
                "id"
            ]; ?>">
            Edit
    </a>

            <a href="delete_user.php?delete=<?php echo $row[
                "id"
            ]; ?>" class="btn btn-danger">
            Delete
           </a>
        </td>
    </tr>
    <?php endwhile;?>
   </tbody>
 </table>
</div>
<div>
	<a href="index.php" class="btn btn-primary">Ajouter un nouveau utilisateur</a>
</div>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

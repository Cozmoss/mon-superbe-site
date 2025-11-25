<?php
ob_start(); //NE PAS MODIFIER
$titre = "TP 3 : Validation d’un formulaire et opérations
CRUD (PHP + MySQLi)";

session_start();

require 'db_connect.php';
$connection = get_connection();

$id = $_GET['edit'] ?? null;
$user = null;

// Récupérer les données de l'utilisateur à modifier
if ($id) {
    $query = "SELECT * FROM users WHERE id=?";
    $statement = $connection->prepare($query);
    $statement->bind_param("i", $id);
    $statement->execute();
    $result = $statement->get_result();
    $user = $result->fetch_assoc();
    $statement->close();
}

// Mettre à jour l'utilisateur si le formulaire est soumis
if (isset($_POST['update'])) {
    $firstname = trim($_POST['firstname'] ?? '');
    $lastname  = trim($_POST['lastname'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $gender    = $_POST['gender'] ?? 'Homme';
    $date      = $_POST['date'] ?? '';
    $age       = trim($_POST['age'] ?? '');

    $query = "UPDATE users SET firstname=?, lastname=?, email=?, gender=?, birthdate=?, age=? WHERE id=?";
    $statement = $connection->prepare($query);
    $statement->bind_param("ssssssi", $firstname, $lastname, $email, $gender, $date, $age, $id);
    $statement->execute();
    $statement->close();
    $connection->close();

    $_SESSION['message'] = "Modification réussie";
    $_SESSION['msg_type'] = "success";
    header("Location: add_user.php");
    exit();
}
?>

<div class="container-sm mt-4">
    <h2>Modifier l'utilisateur</h2>
    <form method="post">
        <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo htmlspecialchars($user['firstname'] ?? ''); ?>">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo htmlspecialchars($user['lastname'] ?? ''); ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>">
        </div>
        <div class="mb-3">
            <label class="form-label d-block mb-2">Sexe</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="sex-male" value="Homme" <?php echo (isset($user['gender']) && $user['gender'] == 'Homme') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="sex-male">Homme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="sex-female" value="Femme" <?php echo (isset($user['gender']) && $user['gender'] == 'Femme') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="sex-female">Femme</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date de naissance</label>
            <input type="date" class="form-control" id="date" name="date" value="<?php echo htmlspecialchars($user['birthdate'] ?? ''); ?>">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo htmlspecialchars($user['age'] ?? ''); ?>">
        </div>
        <button type="submit" name="update" value="update" class="btn btn-success">Mettre à jour</button>
        <a href="add_user.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

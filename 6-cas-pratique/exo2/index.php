<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Calculatrice";

//Mettre le nom du titre de la page que vous voulez
?>

<?php  ?>

<div class="container mt-5" style="max-width: 420px;">
  <div class="card shadow-lg border-info" style="background: linear-gradient(135deg, #e3f2fd 0%, #fff 100%);">
    <div class="card-header bg-info text-white text-center" style="font-size: 1.5rem; letter-spacing: 2px;">
      <span style="font-size:2rem;">🧮</span> Calculatrice
    </div>
    <div class="card-body">
      <form method="post">
        <div class="mb-3">
          <label for="nombre1" class="form-label">Nombre 1</label>
          <input type="number" class="form-control form-control-lg text-end" id="nombre1" name="nombre1" required placeholder="0">
        </div>
        <div class="mb-3">
          <label for="nombre2" class="form-label">Nombre 2</label>
          <input type="number" class="form-control form-control-lg text-end" id="nombre2" name="nombre2" required placeholder="0">
        </div>
        <div class="mb-3">
          <label for="operation" class="form-label">Opération</label>
          <select class="form-select form-select-lg border-info shadow-sm" id="operation" name="operation" required style="font-size:1.15rem;">
            <option value="" disabled selected>Choisissez une opération</option>
            <option value="add">➕ Addition</option>
            <option value="sub">➖ Soustraction</option>
            <option value="mul">✖️ Multiplication</option>
            <option value="div">➗ Division</option>
          </select>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" name="submit" class="btn btn-info btn-lg fw-bold">
            Calculer
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require_once "process.php"; ?>

<?php if (isset($resultat) && $resultat !== ""): ?>
  <div class="container mt-4" style="max-width: 400px;">
    <div class="card border-success shadow-sm">
      <div class="card-body text-center">
        <h5 class="card-title mb-3">
          🧮 Résultat
        </h5>
        <p class="card-text fs-4 text-success"><?= $resultat ?></p>
      </div>
    </div>
  </div>
<?php endif; ?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

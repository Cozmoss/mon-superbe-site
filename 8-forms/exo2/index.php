<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Forms";

//Mettre le nom du titre de la page que vous voulez
?>


<div>
	<p>La question de l'exercice 2 demande comment traiter les données dans le même fichier que celui qui contient le formulaire. Chose qui est déjà demandé à l'exercice 1. Si on veut traiter cela avec un autre fichier, il suffit de créer un fichier php spécifique, mettre le php dedans. Et dans le formulaire on dit que l'action est le nom du fichier php. Exemple : <pre><code>&lt;form action="traitement.php" method="post"&gt;</code></pre></p>
</div>






<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";


?>

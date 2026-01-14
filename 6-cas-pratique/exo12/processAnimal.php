<?php

require __DIR__ . "/Animal.class.php";

// Création des animaux
$tya = new Animal("Tya", 7, "F", 2, ["tya1.jpg", "tya2.jpg"]);
$milo = new Animal("Milo", 3, "M", 2, ["milo1.jpg", "milo2.jpg", "milo3.jpg"]);

// Insertion en base
AnimalDAO::insertAnimal($tya);
AnimalDAO::insertAnimal($milo);

// Récupération des animaux depuis la base
$animalsData = AnimalDAO::getAnimauxDB();
$animals = [];
foreach ($animalsData as $data) {
	$images = AnimalDAO::getImagesAnimal($data["idAnimal"]);
	$imageUrls = array_column($images, "url");
	$animals[] = new Animal($data["nom"], $data["age"], $data["sexe"], $data["Num Type"], $imageUrls);
}

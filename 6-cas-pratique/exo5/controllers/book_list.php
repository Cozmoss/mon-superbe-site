<?php

require __DIR__ . "/../classes/book.php";

$book1 = new Book("1984", "Gallimard", "George Orwell", 1949);
$book2 = new Book("La Ferme des animaux", "Gallimard", "George Orwell", 1945);
$book3 = new Book("Le Petit Prince", "Gallimard", "Antoine de Saint-Exupéry", 1943);
$book4 = new Book("L'Étranger", "Gallimard", "Albert Camus", 1942);
$book5 = new Book("La Peste", "Gallimard", "Albert Camus", 1947);
$book6 = new Book("Harry Potter à l'école des sorciers", "Gallimard", "J.K. Rowling", 1997);
$book7 = new Book("Le Seigneur des Anneaux", "Christian Bourgois", "J.R.R. Tolkien", 1954);
$book8 = new Book("Bilbo le Hobbit", "Christian Bourgois", "J.R.R. Tolkien", 1937);
$book9 = new Book("Le Silmarillion", "Christian Bourgois", "J.R.R. Tolkien", 1977);
$book10 = new Book("Fondation", "Denoël", "Isaac Asimov", 1951);
$book11 = new Book("Les Robots", "Denoël", "Isaac Asimov", 1950);
$book12 = new Book("Dune", "Robert Laffont", "Frank Herbert", 1965);
$book13 = new Book("Le Messie de Dune", "Robert Laffont", "Frank Herbert", 1969);
$book14 = new Book("Les Enfants de Dune", "Robert Laffont", "Frank Herbert", 1976);
$book15 = new Book("Fahrenheit 451", "Denoël", "Ray Bradbury", 1953);

$books = [$book1, $book2, $book3, $book4, $book5, $book6, $book7, $book8, $book9, $book10, $book11, $book12, $book13, $book14, $book15];

$editionFiltre = $_POST["edition"] ?? "tous";
$dateFiltre = $_POST["date"] ?? "tous";

$editions = array_unique(
	array_map(function ($book) {
		return $book->getEdition();
	}, $books),
);

$dates = array_unique(
	array_map(function ($book) {
		return $book->getDatePublication();
	}, $books),
);

sort($dates);

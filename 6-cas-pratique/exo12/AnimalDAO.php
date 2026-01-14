<?php
require_once __DIR__ . "/MonPDO.class.php";

class AnimalDAO
{
	private $idAnimal;

	public static function getAnimauxDB()
	{
		$pdo = MyPDO::getPDO();
		$sql = "SELECT * FROM animal";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $animaux;
	}

	public static function getTypeAnimal($idAnimal)
	{
		$pdo = MyPDO::getPDO();
		$sql = "SELECT t.libelle
            FROM animal a
            JOIN type t ON a.`Num Type` = t.idType
            WHERE a.idAnimal = :id_animal";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(":id_animal", $idAnimal, PDO::PARAM_INT);
		$stmt->execute();
		$type = $stmt->fetchColumn();
		return $type;
	}

	public static function getImagesAnimal($idAnimal)
	{
		$pdo = MyPDO::getPDO();
		$sql = "SELECT i.*
            FROM image i
            JOIN image_animal ia ON i.idImage = ia.`Num Image`
            WHERE ia.`Num Animal` = :id_animal";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(":id_animal", $idAnimal, PDO::PARAM_INT);
		$stmt->execute();
		$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $images;
	}

	public static function insertAnimal($animal)
	{
		$pdo = MyPDO::getPDO();

		// Vérifier si l'animal existe déjà (par nom, age, sexe, type)
		$sqlCheck = "SELECT idAnimal FROM animal WHERE nom = :nom AND age = :age AND sexe = :sexe AND `Num Type` = :numType";
		$stmtCheck = $pdo->prepare($sqlCheck);
		$stmtCheck->execute([
			":nom" => $animal->getNom(),
			":age" => $animal->getAge(),
			":sexe" => $animal->getSexe(),
			":numType" => $animal->getTypeId(),
		]);
		$idAnimal = $stmtCheck->fetchColumn();

		if (!$idAnimal) {
			// Insérer l'animal
			$sql = "INSERT INTO animal (nom, age, sexe, `Num Type`) VALUES (:nom, :age, :sexe, :numType)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([
				":nom" => $animal->getNom(),
				":age" => $animal->getAge(),
				":sexe" => $animal->getSexe(),
				":numType" => $animal->getTypeId(),
			]);
			$idAnimal = $pdo->lastInsertId();

			// Insérer les images et les lier
			foreach ($animal->getImages() as $img) {
				// Vérifier si l'image existe déjà
				$sqlImg = "SELECT idImage FROM image WHERE url = :url";
				$stmtImg = $pdo->prepare($sqlImg);
				$stmtImg->execute([":url" => $img]);
				$idImage = $stmtImg->fetchColumn();

				if (!$idImage) {
					$sqlInsertImg = "INSERT INTO image (libelle, url) VALUES (:libelle, :url)";
					$stmtInsertImg = $pdo->prepare($sqlInsertImg);
					$stmtInsertImg->execute([
						":libelle" => pathinfo($img, PATHINFO_FILENAME),
						":url" => $img,
					]);
					$idImage = $pdo->lastInsertId();
				}

				// Lier l'image à l'animal
				$sqlLink = "INSERT INTO image_animal (`Num Animal`, `Num Image`) VALUES (:idAnimal, :idImage)";
				$stmtLink = $pdo->prepare($sqlLink);
				$stmtLink->execute([
					":idAnimal" => $idAnimal,
					":idImage" => $idImage,
				]);
			}
		}
	}
}

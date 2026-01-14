<?php

require_once __DIR__ . "/AnimalDAO.php";

class Animal
{
	private static $idCounter = 1;
	private $idAnimal;
	private $nom;
	private $age;
	private $sexe;
	private $type;
	private $images = [];

	public function __construct($nom, $age, $sexe, $type, $images = [])
	{
		$this->idAnimal = self::$idCounter++;
		$this->nom = $nom;
		$this->age = $age;
		$this->sexe = $sexe;
		$this->type = $type;
		$this->images = $images;
	}

	public function getIdAnimal()
	{
		return $this->idAnimal;
	}

	public function getNom()
	{
		return $this->nom;
	}

	public function setNom($nom)
	{
		$this->nom = $nom;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getSexe()
	{
		return $this->sexe;
	}

	public function setSexe($sexe)
	{
		$this->sexe = $sexe;
	}

	public function getType()
	{
		return AnimalDAO::getTypeAnimal($this->type);
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function getImages()
	{
		return $this->images;
	}

	public function setImages($images)
	{
		$this->images = $images;
	}

	public function getTypeId()
	{
		return $this->type;
	}
}

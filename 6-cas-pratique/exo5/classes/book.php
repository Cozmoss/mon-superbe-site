<?php

class Book
{
	private $nom;
	private $edition;
	private $auteur;
	private $datePublication;

	public function __construct($nom, $edition, $auteur, $datePublication)
	{
		$this->nom = $nom;
		$this->edition = $edition;
		$this->auteur = $auteur;
		$this->datePublication = $datePublication;
	}

	public function getNom()
	{
		return $this->nom;
	}
	public function getEdition()
	{
		return $this->edition;
	}
	public function getAuteur()
	{
		return $this->auteur;
	}
	public function getDatePublication()
	{
		return $this->datePublication;
	}

	public function setNom($nom)
	{
		$this->nom = $nom;
	}
	public function setEdition($eiditon)
	{
		$this->eiditon = $eiditon;
	}
	public function setAuteur($auteur)
	{
		$this->auteur = $auteur;
	}
	public function setDatePublication($datePublication)
	{
		$this->datePublication = $datePublication;
	}
}

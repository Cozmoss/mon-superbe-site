<?php

class Arme
{
	private static $nextId = 1;

	private $id;
	private $name;
	private $level;
	private $description;

	public function __construct($name, $level, $description)
	{
		$this->id = self::$nextId;
		self::$nextId++;

		$this->name = $name;
		$this->level = $level;
		$this->description = $description;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getLevel()
	{
		return $this->level;
	}
	public function getDescription()
	{
		return $this->description;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	public function setLevel($level)
	{
		$this->level = $level;
	}
	public function setDescription($description)
	{
		$this->description = $description;
	}

	// Fonction pour supprimer les caractères spéciaux du nom
	private function removeSpecialChars($str)
	{
		$str = strtolower($str);
		$str = str_replace(["é", "è", "ê", "ë"], "e", $str);
		$str = str_replace(["à", "â", "ä"], "a", $str);
		$str = str_replace(["î", "ï"], "i", $str);
		$str = str_replace(["ô", "ö"], "o", $str);
		$str = str_replace(["ù", "û", "ü"], "u", $str);
		$str = str_replace(["ç"], "c", $str);
		return $str;
	}

	// Fonction pour générer le chemin de l'image en fonction du level
	public function getImage()
	{
		$nomSansAccents = $this->removeSpecialChars($this->name);
		return "images/" . $nomSansAccents . "/" . $nomSansAccents . $this->level . ".png";
	}

	public function __toString()
	{
		return '<th scope="row"><img src="' .
			$this->getImage() .
			'" alt="' .
			$this->name .
			'" /></th>
            <td>' .
			$this->name .
			'</td>
            <td>' .
			$this->description .
			"</td>";
	}
}

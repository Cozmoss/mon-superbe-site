<?php

class Arme
{
	private static $nextId = 1;

	private $id;
	private $name;
	private $image;
	private $description;

	public function __construct($name, $image, $description)
	{
		$this->id = self::$nextId;
		self::$nextId++;

		$this->name = $name;
		$this->image = $image;
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
	public function getImage()
	{
		return $this->image;
	}
	public function getDescription()
	{
		return $this->description;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	public function setImage($image)
	{
		$this->image = $image;
	}
	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function __toString()
	{
		return '<th scope="row"><img src="' .
			$this->image .
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

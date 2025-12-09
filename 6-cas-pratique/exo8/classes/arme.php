<?php

class Arme
{
	private static $nextId = 1;

	private $id;
	private $name;
	private $damage;

	public function __construct($name, $damage)
	{
		$this->id = self::$nextId;
		self::$nextId++;

		$this->name = $name;
		$this->damage = $damage;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getDamage()
	{
		return $this->damage;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	public function setDamage($damage)
	{
		$this->damage = $damage;
	}
}

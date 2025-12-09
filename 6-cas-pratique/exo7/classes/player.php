<?php

class Player
{
	private $name;
	private $force;
	private $pv;
	private $arme;

	public function __construct($name, $force, $pv, $arme)
	{
		$this->name = $name;
		$this->force = $force;
		$this->pv = $pv;
		$this->arme = $arme;
	}

	public function getName()
	{
		return $this->name;
	}
	public function getForce()
	{
		return $this->force;
	}
	public function getPv()
	{
		return $this->pv;
	}
	public function getArme()
	{
		return $this->arme;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	public function setForce($force)
	{
		$this->force = $force;
	}
	public function setPv($pv)
	{
		$this->pv = $pv;
	}
	public function setArme($arme)
	{
		$this->arme = $arme;
	}
}

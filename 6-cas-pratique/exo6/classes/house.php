<?php

class House
{
	private static $nextId = 1;

	private $id;
	private $date;
	private $roomNumbers;
	private $surface;

	public function __construct($date, $roomNumbers, $surface)
	{
		$this->id = self::$nextId;
		self::$nextId++;

		$this->date = $date;
		$this->roomNumbers = $roomNumbers;
		$this->surface = $surface;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getRoomNumbers()
	{
		return $this->roomNumbers;
	}
	public function getSurface()
	{
		return $this->surface;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}
	public function setRoomNumbers($roomNumbers)
	{
		$this->roomNumbers = $roomNumbers;
	}
	public function setSurface($surface)
	{
		$this->surface = $surface;
	}
}

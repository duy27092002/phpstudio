<?php
	class Animal {
		public $name;
		public $hunt;
		public function __construct($name, $hunt)
		{
			$this->name = $name;
			$this->hunt = $hunt;
		}
		public function makeSound()
		{
			if ($this->name == "Dog") {
				echo "{$this->name} makes sound: Woff Woff and ";
			}
			if ($this->name == "Tiger") {
				echo "{$this->name} makes sound: Grrr Grrr and ";
			}
		}
		public function doesHunting()
		{
			if ($this->name == "Dog") {
				echo "{$this->name} doesn't hunting";
			}
			if ($this->name == "Tiger") {
				echo "{$this->name} does hunting";
			}
		}
	}
	
	class Dog extends Animal
	{
		public $weight;
		public $color;
		public function __construct($name, $hunt, $weight, $color)
		{
			$this->name = $name;
			$this->hunt = $hunt;
			$this->weight = $weight;
			$this->color = $color;
		}
		public function checkSound()
		{
			$this->makeSound();
		}
		public function checkHunting()
		{
			$this->doesHunting();
		}
	}

	class Tiger extends Animal
	{
		public $weight;
		public function __construct($name, $hunt, $weight)
		{
			$this->name = $name;
			$this->hunt = $hunt;
			$this->weight = $weight;
		}
		public function checkSound()
		{
			$this->makeSound();
		}
		public function checkHunting()
		{
			$this->doesHunting();
		}
	}
?>
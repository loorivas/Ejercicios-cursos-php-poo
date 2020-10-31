<?php

trait myUtilities
{
	function sayMyName()
	{
		echo "Mi nombre es \n".$this->name."\n";
	}
}

abstract class Animal
{
	abstract public function makeSound();

	public function run()
	{
		echo "Corriendo\n";
	}
}

class Dog extends Animal
{
	use myUtilities;
	public $name="Kanino";
	public function makeSound()
	{
		echo "Guau\n";
	}
}

class Cat extends Animal
{
	use myUtilities;
	public $name="Michi";
	public function makeSound()
	{
		echo "Miau\n";
	}
}
$inst=new Cat();
var_dump(get_class_methods($inst));
var_dump(get_class_methods(new Dog));
var_dump(get_class_methods('Animal'));
?>
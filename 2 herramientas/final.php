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
	public function run(){
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

final class Schnauzer extends Dog
{
	public function __construct()
	{
		$this->breed='Schnauzer';
	}
}



$instDog=new Schnauzer;

$instDog->sayMyName();
?>
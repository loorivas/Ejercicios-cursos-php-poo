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

echo class_exists('Dog'); 
$classes=['Being', 'Animal', 'Plant', 'Dog', 'Cat', 'Mouse', 'Cactus'];
foreach($classes as $class_)
{
	echo $class_.( class_exists($class_) ? ' si' : ' no')."\n";
}
?>
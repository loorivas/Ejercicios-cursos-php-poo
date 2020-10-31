<?php 
class Pet
{
	public $name='Firulais';
}
class Person
{
	public $age;
	public $name;
	public $money_in_wallet;
	public $todos;
	public $married;
	public function run()
	{
		echo "Estoy corriendo";
	}
	public function walk()
	{
		echo "Estoy caminando";
	}
	public function greet($other_person)
	{
		echo "Hola, " . $other_person->name;
	}
	function __construct($name)
	{
		$this->name=$name;
	}
	public function adopt($instance_pet)
	{
		echo "\n<br>Hey, adopte a " . $instance_pet->name;
	}
}
$person1=new Person('Bernardo');
$person2=new Person('Francisco');
$pet=new Pet();
$person1->greet($person2);
$person1->adopt($pet);
?>
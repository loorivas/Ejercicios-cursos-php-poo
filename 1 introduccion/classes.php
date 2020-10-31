<?php 
/**
 * 
 */
class Person
{
	public $age;
	public $name;
	public function run()
	{
		echo "Estoy corriendo";
	}
	function __construct($name, $age)
	{
		$this->name=$name;
		$this->age=$age;
	}
}

$person=new Person('Bernardo', 10);
echo $person->name;
echo "\n";
$person->run();

$person2=new Person('Marco', 20);
echo "\n<br>";
echo $person2->name;
echo "\n";
$person2->run();
?>
<?php 
require_once('Person.php');
class PersonTest extends PJPUnit_Framewrok_TESTCase
{
	public function testPersonConstruct()
	{
		$person=new Person('Yasmin', 'Rivas');
		$this->assertTrue($person instanceof Person, 'It should be instance of class Person');
		$this->assertTrue($person->getName()=='Yasmin', 'It should be Person');
		$this->assertTrue($person->getFamilyName()=='Rivas', 'It should be Yasmin');
	}
	/*@expectedException Exception*/
	public function testEmptyName()
	{
		$person=new Person('', 'Rivas');
		$this->assertTrue($person->getName()=='', 'It should be Person');

	}
}
?>
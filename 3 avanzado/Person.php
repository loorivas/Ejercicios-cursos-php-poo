<?php 
class Person
{
	private $name;
	private $familyname;
	private $phone;
	private $mobile;

public function __construct($name, $familyname)
{
	if (''==trim($name)) {
		throw new Exception("Elnombreno debeir vacio");
		
	}
	$this->name=$name;
	$this->familyname=$familyname;
}

	public function getName()
	{
		return $this->name;
	}
	public function getFamilyName()
	{
		return $this->familyname;
	}
}
?>
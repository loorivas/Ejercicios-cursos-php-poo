<?php 
/**
 * 
 */
class MyProfile
{
	private $email;
	public $name;
	public $last_name;

	public function __construct()
	{
		# code...
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail()
	{
		#Reglas para la asignacion de nuestro correo
		$this->email=$email;
	}
	private function getDatails()
	{
		//
	}
}
$instMyProfile = new MyProfile();
#$instMyProfile->email="rivasjazmin@gmail.com";
echo $instMyProfile->getEmail();
?>
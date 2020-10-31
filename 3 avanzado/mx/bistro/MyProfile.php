<?php 
namespace mx\bistro;
class MyProfile extends BaseProfile
{
	private $email='rivasjazmin@gmail.com';
	private $name;
	private $last_name;

	public function __construct()
	{
		$this->connect2DB();
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail()
	{
		$this->email=$email;
	}
	public function message()
	{
		echo "mensaje";
	}
}
?>
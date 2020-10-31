<?php
 class Config
 {
 	/*const DB_USER_NAME='yazz';
 	const DB_USER_PASSWORD='123';
 	const DB_DATABASE_NAME='dbyazz';*/
 	const ENVIROMENT = 'production';
 } 
class BaseProfile extends Config
{
	protected $connection_data='Conexion BD';
	protected function connect2DB()
	{
		if ('production'==self::ENVIROMENT) {
			echo "Conectando a produccion";
		}
		if ('development'==self::ENVIROMENT) {
			echo "Conectando a desarrollo";
		}
		if ('staging'==self::ENVIROMENT) {
			echo "Conectando a staging";
		}
	}
	public function __construct()
	{
		$this->connect2DB();
	}
}
class MyProfile extends BaseProfile
{
	const DOMAIN_NAME='yasminlorena.com';
	private $email='rivasjazmin@gmail.com';
	public $name;
	public $last_name;

	public function __construct()
	{
		//echo "Conectando a " . self::DB_DATABASE_NAME . "\n";
		$this->connect2DB();
		//echo self::DOMAIN_NAME;
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
	public function message()
	{
		echo "mensaje";
	}
}

#no podemos asignarle otro dominio diferente
//echo MyProfile::DOMAIN_NAME;

$instMyProfile=new MyProfile;
?>
<?php
error_reporting(-1);
class DBStatic
{
	protected static $db_user='rivas';
	protected static $db_password='123';
	protected static $db_database_name='php_oo_db';
	protected static function connect()
	{
		echo "Conectado con : " . self::$db_user . ":" . self::$db_password . ":" . self::$db_database_name;
	}
}
class BaseProfile extends DBStatic
{
	//protected $connection_data='Conexion BD';
	protected function connect2DB()
	{
		echo $this->connection_data;
	}
	public function __construct()
	{
		self::connect();
		//$this->connect2DB();
	}
}
class MyProfile
{
	private $email='rivasjazmin@gmail.com';
	public $name;
	public $last_name;

	/*public function __construct()
	{
		//$this->connect2DB();
		
	}*/
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
/*echo DBStatic::$db_user;
echo "\n";
echo DBStatic::$db_password;
echo "\n";
echo DBStatic::$db_database_name;
echo "\n";
DBStatic::connect();*/
//$insMyProfile=new MyProfile;

#sigue siendo parte de php5, sin embargo para futuras versiones ya no es incluido
MyProfile::message();
?>
<?php 
class BaseProfile extends Config
{
	protected $connection_data='Conexion BD';
	protected function connect2DB()
	{
		echo " conectando a BD de ".self::ENVIRONMENT;;
	}
	public function __construct()
	{
		$this->connect2DB();
	}
}
?>
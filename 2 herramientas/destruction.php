<?php 
class Indestructible
{
	public function __construct()
	{
		echo "Clase creada\n";
		$this->name="Indestructible";
	}
	public function __destruct()
	{
		echo "Destruyendo a ".$this->name."\n";
	}
}

$instIndestructible=new Indestructible();
unset($instIndestructible);
for ($i=0; $i < 50; $i++) { 
	echo "{$i} \n";
	/*if ($i>30) {
		exit();
	}*/
}
?>
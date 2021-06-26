<?php
class Conexion
{
	public static function Start()
	{
		$pdo = new PDO('mysql:host=localhost;dbname=inventario;charset=utf8', 'root', 'Ed80418041');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $pdo;
		
	}
}
?>

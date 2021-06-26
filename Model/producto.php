<?php
class Producto
{
	private $pdo;

	public $id;
	public $nombre_producto;
	public $referencia;
	public $precio;
	public $peso;
	public $categoria;
	public $stock;
	public $fecha_ultima_venta;

	public function __CONSTRUCT()
	{
		require_once 'conexion.php';
		try{
			$this->pdo = Conexion::Start();
		}
		catch(Exception $err){
			die($err->getMessage());
		}
	}

	public function mostrarProductos()
	{
		try{
			$result = array();
			$stm = $this->pdo->prepare('SELECT * FROM productos');
			$stm->execute();
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $err){
			die($err->getMessage());
		}
	}

	public function eliminarProducto()
	{
		
	}

	public function actualizarProducto()
	{
		
	}
	
	public function crearProducto()
	{
		
	}

	
}
?>

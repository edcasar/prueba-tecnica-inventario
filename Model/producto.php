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

	public function MostrarProductos()
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

	public function getProducto($id)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM productos WHERE id = ?");
			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);
		}
	   	catch (Exception $err) {
			die($err->getMessage());
		}
	}

	public function EliminarProducto($id)
	{
		echo "Entrndo al eliminarodr";
		try {
			$stm = $this->pdo->prepare("DELETE FROM productos WHERE id = ?");			          

			$stm->execute(array($id));
		} 
		catch (exception $err) {
			die($err->getmessage());
		}
		
	}
    public function ActualizarProducto($data)
	{
		try 
		{
			$sql = "UPDATE `productos` SET 
						nombre_producto = ?, 
						referencia = ?,
                        precio = ?,
						peso = ?, 
						categoria = ?,
                        stock = ?
				    WHERE id= ?";

			$stm = $this->pdo->prepare($sql);
			 $stm->execute(array(
                        $data->nombre_producto, 
                        $data->referencia,
                        $data->precio,
                        $data->peso,
                        $data->categoria,
                        $data->stock,
                        $data->id, 
					)
				);
		} catch (Exception $err) 
		{
			die($err->getMessage());
		}
		
	}
	
	public function CrearProducto($data)
	{
		try 
		{
		$sql = "INSERT INTO `productos` (nombre_producto, referencia, precio,peso, categoria, stock) 
		        VALUES (?, ?, ?, ?, ?, ?)";

			$stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                        $data->nombre_producto, 
                        $data->referencia,
                        $data->precio,
                        $data->peso,
                        $data->categoria,
                        $data->stock
					)
			);
		} catch (Exception $err) 
		{
			die($err->getMessage());
		}
		
	}

	
}
?>

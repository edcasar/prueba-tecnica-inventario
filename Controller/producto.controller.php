<?php
require_once 'Model/producto.php';

class ProductoController
{
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Producto();
    }
    
    public function Index(){
        require_once 'View/producto.php';
    }
    
    public function Crud(){
        $alm = new Producto();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->getProducto($_REQUEST['id']);
        }
        
        require_once 'View/producto-editar.php';
    }
    
    public function Guardar(){
        $alm = new Producto();
        
        $alm->id = $_REQUEST['id'];
        $alm->nombre_producto= $_REQUEST['nombre_producto'];
		$alm->referencia = $_REQUEST['referencia'];
		$alm->precio = $_REQUEST['precio'];
		$alm->peso = $_REQUEST['peso'];
		$alm->categoria = $_REQUEST['categoria'];
		$alm->stock = $_REQUEST['stock'];
		$alm->fecha_ultima_venta = $_REQUEST['fecha_ultima_venta'];

        //si el id es mayor a 0 significa que hareos una actualizacion, de lo contrario se creara el producto e la base de datos
        $alm->id > 0 
           ? $this->model->ActualizarProducto($alm)
           : $this->model->CrearProducto($alm);

        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->EliminarProducto($_REQUEST['id']);
        header('Location: index.php');
    }
}


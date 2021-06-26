<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<link rel="" href="" />
	<title>Producto</title>
</head>
<body>
    <h1><?php echo $alm->id != null ? $alm->nombre_producto : 'Crear Producto'?></h1>
    <a href="?controller=Producto">Volver</a>
    <form action="?controller=Producto&accion=Guardar" method="post" >
     	<input type="hidden" name="id" value="<?php echo $alm->id; ?>">
    	<input type="text" placeholder="Nombre del producto: " name="nombre_producto" value="<?php echo $alm->nombre_producto; ?>">
    	<input type="text" placeholder="Referencia: " name="referencia" value="<?php echo $alm->referencia;?>">
    	<input type="number" placeholder="Precio" name="precio" value="<?php echo $alm->precio;?>">
    	<input type="number" placeholder="Peso (kg): " name="peso" value="<?php echo $alm->peso;?>">
    	<input type="text" placeholder="Categoria:" name="categoria" value="<?php echo $alm->categoria;?>">
    	<input type="text" placeholder="Stock: " name="stock" value="<?php echo $alm->stock;?>">
        <button>GUARDAR</button>
    </form>
</body>
</html>

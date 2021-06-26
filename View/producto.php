<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Prueba técnica php" />
	<link rel="stylesheet" href="../assets/styles/main.css" />
	<title>Inventarios de productos</title>
</head>
<body>
    <div>
	    <h1>Lista de productos</h1>
        <button><a href="?controller=Producto&accion=Crud">Crear Producto</a></button>
    </div>
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Referencia</th>
				<th>Precio</th>
				<th>Peso</th>
				<th>Categoria</th>
				<th>Stock</th>
				<th>Fecha creación</th>
				<th>Fecha ultima venta</th>
			</tr>
		</thead>
        <tbody>
        <?php foreach($this->model->MostrarProductos() as $product ): ?>
            <tr>
				<td><?php echo $product->nombre_producto ?></td>
				<td><?php echo $product->referencia ?></td>
				<td><?php echo $product->precio ?></td>
				<td><?php echo $product->peso ?></td>
				<td><?php echo $product->categoria ?></td>
				<td><?php echo $product->stock ?></td>
				<td><?php echo $product->fecha_creacion?></td>
				<td><?php echo isset($product->fecha_ultima_venta) ? $product->fecha_ultima_venta : "Sin ventas"?></td>
				<td><a href="?controller=Producto&accion=Crud&id=<?php echo $product->id; ?>">Editar</a></td>
				<td><a href="?controller=Producto&accion=Eliminar&id=<?php echo $producto->id; ?>">Eliminar</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
	</table>

</body>
</html>

<?php
    // Obtener un producto por su ID
    $producto = Producto::find(1);
    // Verificar si el producto existe
    if ($producto) {
    // Hacer algo con el producto
    } else {
    // El producto no fue encontrado
    }

    // Obtener un producto por su ID
    $producto = Producto::find(1);

    if ($producto) {
        // Actualizar el nombre y el precio del producto
        $producto->nombre = 'Nuevo Nombre';
        $producto->precio = 150;
        $producto->save();
    } else {
    // El producto no fue encontrado
    }

    // Obtener todos los productos con precio mayor a $50
    $productos = Producto::where('precio', '>', 50)->get();

    // Obtener todos los productos de un usuario específico
    $usuario = Usuario::find(1);
    $productos = $usuario->productos;

    // Crear un nuevo producto
    Producto::create(['nombre' => 'Nuevo Producto', 'precio' => 100]);

    // Eliminar un producto por su ID
    Producto::find(1)->delete();


?>
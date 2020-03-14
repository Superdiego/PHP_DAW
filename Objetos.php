<?php

class Videoclub
{

    private $clientes;

    private $productos;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->clientes = array();
        $this->productos = array();
    }

    public function alquiler($cliente, $producto)
    {
        array_push($cliente, $producto);
    }

    public function añadir_clientes($cliente)
    {
        array_push($this->clientes, $cliente);
    }

    public function añadir_productos($producto)
    {
        array_push($this->productos, $producto);
    }
}

class Cliente
{

    private $nombre;

    private $productos;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->productos = array();
    }

    public function alquileres()
    {
        foreach ($this->productos as $titulo) {
            echo $titulo . "<br>";
        }
    }
}

abstract class Productos
{

    protected $nombre;

    protected $precio;

    abstract function getPrecio();
}

class Pelicula extends Productos
{

    public function __construct($nombre, $precio = 2)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}

class CDs extends Productos
{

    public function __construct($nombre, $precio = 1)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}

class Juego extends Productos
{

    public function __construct($nombre, $precio = 3)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}
?>
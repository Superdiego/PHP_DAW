<?php

class Videoclub
{

    private $clientes;

    private $productos;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->clientes = array();
        $this->articulo = array();
        $this->alquileres = array(array());
    }
    public function alquilando($cliente,$producto){
        if(in_array ($producto, $this->articulo) && in_array($cliente, $this->clientes)){
            $cliente->alquileres($producto);

        }
    }

    public function listar_totalAlquileres(){
        foreach($this->clientes as $nombre){
            echo "<b>$nombre</b> <br>";

            $nombre->listar_alquileres();
            
        }
    }

    public function a�adir_clientes($cliente)
    {
        $this->clientes[] = $cliente;
    }

    public function a�adir_productos($producto)
    {
        $this->articulo[]=  $producto;
    }
    public function alquiler($cliente,$producto){
        $this->clientes[$cliente]->alquileres($producto);
    }
    public function __toString(){
        return $this->nombre;
    }
    public function listar_clientes(){
        foreach($this->clientes as $cliente){
            echo $cliente . "<br>";
        }
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
    
    public function alquileres($producto)
    {
        $this->productos[]=$producto;
    }
    
    public function listar_alquileres()
    {
        $total = 0;
        foreach ($this->productos as $titulo) {            
            echo $titulo . "&nbsp; x " . $titulo->getPrecio() . "<br>";
            $total+=$titulo->getPrecio();
        }
        echo " . . . . . . .. . Total = $total euros<br>";
    }
    public function __toString(){
        return $this->nombre;
    }
    public function set_productos($producto){
        $this->productos[]=$producto;
    }
    public function get_productos(){
        return $this->productos;
    }

}

abstract class Productos
{

    protected $nombre;

    protected $precio;

    abstract function getPrecio();
    
    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}

class Pelicula extends Productos
{

    public function __construct($nombre, $precio = 2)
    {
        parent:: __construct($nombre, $precio);
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function __toString(){
        return $this->nombre;
    }
}

class CDs extends Productos
{

    public function __construct($nombre, $precio=1)
    {
        parent::__construct($nombre, $precio);
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function __toString(){
        return $this->nombre;
    }
}

class Juego extends Productos
{

    public function __construct($nombre, $precio = 3)
    {
        parent::__construct($nombre, $precio);
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function __toString(){
        return $this->nombre;
    }
}
?>
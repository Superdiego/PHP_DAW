<?php
include("objetos.php");
$bogart = new Videoclub("Bogart");
$cli01 = new Cliente("cliente_01");
$cli02 = new Cliente("cliente_02");
$cli03 = new Cliente("cliente_03");
$peli01 = new Pelicula("pelicula_01");
$peli02 = new Pelicula("pelicula_02");
$peli03 = new Pelicula("pelicula_03");
$disc01 = new CDs("disco_01");
$disc02 = new CDs("disco_02");
$disc03 = new CDs("disco_03");
$jueg01 = new Juego("juego_01");
$jueg02 = new Juego("juego_02");
$jueg03 = new Juego("juego_03");

$bogart->añadir_clientes($cli01);
$bogart->añadir_clientes($cli02);
$bogart->añadir_clientes($cli03);
$bogart->añadir_productos($peli01);
$bogart->añadir_productos($peli02);
$bogart->añadir_productos($peli03);
$bogart->añadir_productos($disc01);
$bogart->añadir_productos($disc02);
$bogart->añadir_productos($disc03);
$bogart->añadir_productos($jueg01);
$bogart->añadir_productos($jueg02);
$bogart->añadir_productos($jueg03);

$cli01->alquileres($jueg01);
$cli01->alquileres($jueg03);
$cli02->alquileres($peli03);
$cli02->alquileres($disc01);
$bogart->alquilando($cli03,$jueg02);


$bogart->listar_totalAlquileres();
$bogart->listar_clientes();

?>
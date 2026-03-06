<?php

require_once "Usuario.php";

$usuario = new Usuario("Ricardo", "Ricardo@email.com");

echo "Nombre: " . $usuario->getNombre() . PHP_EOL; 
echo "Correo: " . $usuario->getCorreo();

?>
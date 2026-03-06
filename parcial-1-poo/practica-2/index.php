<?php

require_once "Admin.php";

// Crear objeto Admin
$admin = new Admin("Ricardo", "Ricardo@email.com");

// Mostrar datos
echo "Nombre: " . $admin->getNombre() . PHP_EOL; 
echo "Correo: " . $admin->getCorreo() . PHP_EOL; 
echo "Rol: " . $admin->getRol();

?>
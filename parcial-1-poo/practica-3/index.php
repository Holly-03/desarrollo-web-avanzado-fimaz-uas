<?php

require_once "Admin.php";
require_once "Alumno.php";

try {

    $admin = new Admin("Ricardo", "Ricardo@email.com");

    echo "Nombre: " . $admin->getNombre() . PHP_EOL; ;
    echo "Correo: " . $admin->getCorreo() . PHP_EOL; ;
    echo "Rol: " . $admin->getRol() . PHP_EOL  . PHP_EOL; ;
    
    $alumno = new Alumno("Ana", "ana@email.com", "A12345");

    echo "Nombre: " . $alumno->getNombre() . PHP_EOL; ;
    echo "Correo: " . $alumno->getCorreo() . PHP_EOL; ;
    echo "Matrícula: " . $alumno->getMatricula() . PHP_EOL; ;
    echo "Rol: " . $alumno->getRol() . PHP_EOL . PHP_EOL; ;

    $error = new Admin("Luis", "luis@email");

} catch (Exception $e) {

    echo "Error: " . $e->getMessage();

}

?>
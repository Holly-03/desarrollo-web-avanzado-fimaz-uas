<?php

/* La clase Alumno extiende Usuario y representa a un estudiante con propiedades como matrícula 
y métodos para obtener la matrícula y el rol. */

require_once "Usuario.php";

class Alumno extends Usuario {

    private $matricula;

    public function __construct($nombre, $correo, $matricula) {

        parent::__construct($nombre, $correo);

        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getRol() {
        return "Alumno";
    }

}

?>
<?php

/* La clase Admin extiende la clase Usuario y define un método para devolver el rol como "Administrador". */

require_once "Usuario.php";

class Admin extends Usuario {

    public function getRol() {
        return "Administrador";
    }

}

?>
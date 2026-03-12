<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

/* La línea " = [];" está inicializando un arreglo vacío. Este arreglo se utilizará
para almacenar instancias de las clases `Admin` y `Alumno` creadas en el script. El bucle `foreach`
más adelante en el script recorre este arreglo para mostrar información sobre los usuarios registrados. */

$usuarios = [];

try {

    $admin = new Admin("Ricardo", "Ricardo@email.com");
    $usuarios[] = $admin;

    $alumno = new Alumno("Luis", "Luis@email.com", "A12345");
    $usuarios[] = $alumno;

    $error = new Alumno("Juan", "Juan@email", "A000");

} catch (Exception $e) {

    $error = $e->getMessage() . "</p>";

}

?>

<h2>Usuarios</h2>

<table border="1" cellpadding="8">

<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
</tr>

<?php

/* El bucle `foreach` en el script de PHP está recorriendo el arreglo ``, el cual contiene
instancias de las clases `Admin` y `Alumno` creadas anteriormente en el script. 

Para cada objeto de usuario `` dentro del arreglo, el bucle genera una fila de tabla (`<tr>`)
con el nombre del usuario, su correo electrónico, su rol y, si el usuario es una instancia
de la clase `Alumno`, su número de matrícula. */
foreach ($usuarios as $u) {

    echo "<tr>";

    echo "<td>" . $u->getNombre() . "</td>";
    echo "<td>" . $u->getCorreo() . "</td>";
    echo "<td>" . $u->getRol() . "</td>";

    if ($u instanceof Alumno) {
        echo "<td>" . $u->getMatricula() . "</td>";
    } else {
        echo "<td>—</td>";
    }

    echo "</tr>";
}

?>

</table>

<?php

if ($error != "") {
    echo "<p><strong> $error </strong> ";
    }
?>
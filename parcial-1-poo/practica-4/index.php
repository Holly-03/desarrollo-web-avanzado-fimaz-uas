<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

$usuarios = [];

try {

    $admin = new Admin("Ricardo", "Ricardo@email.com");
    $usuarios[] = $admin;

    $alumno = new Alumno("Luis", "Luis@email.com", "A12345");
    $usuarios[] = $alumno;

    $invitado = new Invitado("ana", "ana@email.com", "Google");
    $usuarios[] = $invitado;

    $error = new Admin("Pedro", "pedro@gmail");
    $usuarios[] = $error;
    
} catch (Exception $e) {
    
    $error = $e->getMessage() . "</p>";

}

?>

<h2>Lista de Usuarios</h2>

<table border="1" cellpadding="5">
<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
<th>Empresa</th>
</tr>

<?php

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

    if ($u instanceof Invitado) {
        echo "<td>" . $u->getEmpresa() . "</td>";
    } else {
        echo "<td>—</td>";
    }

    echo "</tr>";
}

?>
</table>

<?php

if ($error != "") {
    echo "<p><strong>Error Encontrado: $error </strong> ";
    }
?>
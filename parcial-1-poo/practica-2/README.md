# Práctica 2 - HERENCIA Y REUTILIZACIÓN DE CÓDIGO EN PHP

## Explicación de la herencia aplicada

En esta práctica se aplicó el concepto de herencia en programación orientada a objetos.

Se creó una clase llamada Admin que hereda de la clase Usuario utilizando la palabra clave `extends`.

Gracias a la herencia, la clase Admin puede utilizar los atributos y métodos definidos en Usuario, como el nombre, correo y sus respectivos getters y setters.

Además, se agregó un método propio en la clase Admin llamado `getRol()` que devuelve el rol "Administrador".

## Diferencias entre Usuario y Admin

Usuario:
- Contiene los atributos nombre y correo.
- Incluye constructor, getters y setters.

Admin:
- Hereda todas las características de Usuario.
- Agrega el método `getRol()` que devuelve el rol del usuario administrador.

## Evidencia de ejecución

Al ejecutar el archivo `index.php`, se muestran los siguientes datos:

Nombre: Ricardo 
Correo: Ricardo@email.com  
Rol: Administrador
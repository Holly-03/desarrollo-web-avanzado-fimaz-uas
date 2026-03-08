# Práctica 3 - SISTEMA DE USUARIOS CON VALIDACIONES Y EXCEPCIONES

## Descripción del sistema

Se creó una clase base llamada Usuario que contiene los atributos nombre y correo. El sistema valida que el correo tenga un formato correcto.
Si el correo es inválido, se lanza una excepción para evitar que se cree el objeto.

## Flujo de clases

Usuario
↓ herencia

Admin
- Método getRol() devuelve "Administrador"

Alumno
- Atributo adicional: matricula
- Método getRol() devuelve "Alumno"
Las clases Admin y Alumno heredan los atributos y métodos de Usuario.

## Manejo de errores

Se utilizan bloques try/catch para capturar excepciones generadas cuando se intenta crear un usuario con un correo inválido.
Esto permite mostrar mensajes de error controlados sin detener abruptamente el programa.
# Práctica 4 - INTEGRACIÓN POO + HERENCIA + VALIDACIONES + EXCEPCIONES (PHP 8+)

## Objetivo

Construir un sistema básico utilizando programación orientada a objetos en PHP aplicando encapsulamiento, herencia, validación de datos y manejo de excepciones.

## Requisitos

- PHP 8
- XAMPP o servidor local
- Navegador web

## Ejecución

1. Colocar la carpeta practica-4 dentro de la carpeta parcial-1-poo en htdocs en XAMPP.
2. Iniciar Apache.
3. Abrir en el navegador:

http://localhost/parcial-1-poo/practica-4/index.php

## Funcionamiento

El sistema crea tres tipos de usuarios:

- Administrador
- Alumno
- Invitado

Cada clase hereda de Usuario y define su propio método getRol().

El sistema valida que el correo tenga formato correcto. Si el correo es inválido se lanza una excepción que es capturada mediante try/catch.

## Evidencia esperada

- Se muestra una tabla HTML con los usuarios válidos.
- Se muestra un mensaje de error controlado cuando se intenta crear un usuario con correo inválido.
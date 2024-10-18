# PHP

- Hibrido, no es necesario tipar las variables pero si el ;
- Inicializarlo con <?php

$nombreVar = valorVar;  

- variables siempre inician con el $

## Para correr archivo

<code> php main.php </code>

## Notas

JS: <code> console.log("hola mundo") </code> 
<br>
PHP: <code> echo "hola mundo" </code>

## Ejercicios

1. Suma de números pares: Escribe un programa que sume todos los números pares entre 1 y 100.

2. Factorial de un número: Crea una función que calcule el factorial de un número dado.

3. Números primos: Crea un algoritmo que verifique si un número es primo o no.

4. Palíndromo: Escribe un programa que determine si una palabra o frase es un palíndromo (se lee igual al derecho y al revés).

5. Invertir una cadena: Crea un algoritmo que invierta el orden de los caracteres de una cadena de texto sin usar funciones predefinidas de PHP.

### Cambiar de html a php:

Nos permite escribir código lógico de php dentro de un html.

Arriba del archivo se pone 
<code> 
<br>
< ?php
<br>

?>
</code>
<code>
< !DOCTYPE ><br>
 <br>
< html lang="en"> 
... 
<br>
html>

</code>

#### Levantar servidor de php 
<code>php -s localhost:8000</code>

### Paquetes de php
- Packagist.org
<code> composer install "paquete" </code>

## Creación proyectos con laravel
<code> composer create-project --prefer-dist laravel/laravel "Nombre"</code>
* "prefer-dist" opcional 

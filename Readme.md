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

## Correr con laravel
<code> php artisan serve </code>

## .ENV
Se debe editar el archivo .env según la base de datos a utilizar

## Migración para crear .sessions
<code>php artisan migrate</code>
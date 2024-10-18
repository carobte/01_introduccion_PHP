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

# Laravel

Framework de php, su ORM es Eloquent.

## Creación proyectos con laravel
<code> composer create-project --prefer-dist laravel/laravel "Nombre"</code>
* "prefer-dist" opcional 

## Instalar el instalador de laravel
<code> composer global require laravel/laravel </code>
<br><br> 
Cuando se instala esto, podemos crear proyectos con: <code>laravel new "Nombre"</code>
<br>
1. Starter kit: sistema de autenticación 
- Jetstream (recomendado) 
2 Vistas: 
- Livewire (vistas de blade)
- Inertia (vistas con vue) <br>
3. Features:
- Dark mode (ejemplo)<br>
4. Test: 
- Pest (?)
5. Database:
- sql server
- mysql
- etc 
6. Migraciones predeterminadas

## Correr con laravel
<code> php artisan serve </code>

## .ENV
Se debe editar el archivo .env según la base de datos a utilizar

## Migraciones 
<code>php artisan migrate</code>

## Forma unificada de correr el proyecto sin importar si es con vue u otras
<code> composer run </code>
- dev
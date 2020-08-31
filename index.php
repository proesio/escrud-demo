<?php
//Desarrollado Por Juan Felipe Valencia Murillo.

require 'vendor/autoload.php';
require 'funciones/funciones.php';
require 'config/basedatos.php';

use PIPE\Clases\PIPE;
use Escrud\Clases\Escrud;

PIPE::tabla('usuarios')->vaciar();
$registros = generarRegistrosAleatorio(15);
PIPE::tabla('usuarios')->insertar($registros);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="Juan Felipe Valencia Murillo">
    <meta name="copyright" content="Juan Felipe Valencia Murillo">
    <meta name="description" content="PIPE - ORM en Español">
    <meta name="keywords" content="demostración, escrud, proes">
    <meta name="robots" content="Index, Follow">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0"/>
    <title>Demostración - Escrud - CRUD en Español</title>
    <link rel="icon" type="image/png" href="recursos/escrud-logo-transparente.png"/>
</head>

<body>

<?php

Escrud::tabla('usuarios')
    ->ocultos('id', 'creado_en', 'actualizado_en')
    ->insertables('nombres', 'apellidos', 'correo', 'telefono', 'direccion')
    ->actualizables('nombres', 'apellidos', 'correo', 'telefono', 'direccion')
    ->alias([
        'nombres' => 'Nombres',
        'apellidos' => 'Apellidos',
        'correo' => 'Correo',
        'telefono' => 'Teléfono',
        'direccion' => 'Dirección',
    ])
    ->renderizar();
    
?>
    
</body>

</html>
<?php
//Desarrollado Por Juan Felipe Valencia Murillo.

use Escrud\Clases\Configuracion;

Configuracion::inicializar([
	'BD_CONTROLADOR' => 'sqlite',
	'BD_BASEDATOS' => __DIR__.'/../basedatos/escrud_demo.sql',
	'BD_CODIFICACION' => 'utf8mb4',
	'IDIOMA' => 'es',
	'ZONA_HORARIA' => 'America/Bogota'
]);
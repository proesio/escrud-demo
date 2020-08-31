<?php
//Desarrollado Por Juan Felipe Valencia Murillo.

function generarRegistrosAleatorio($cantidad){
    $registros = [];
    for($i = 0; $i < $cantidad; $i++){
        $nombre = obtenerNombreAleatorio();
        $apellido = obtenerApellidoAleatorio();
        $registros[] = [
            'nombres' => $nombre,
            'apellidos' => $apellido,
            'correo' => obtenerCorreo(omitirTildesCadena($nombre), omitirTildesCadena($apellido)),
            'telefono' => obtenerTelefonoAleatorio(),
            'direccion' => obtenerDireccionAleatoria()
        ]; 
    }
    return $registros;
}

function obtenerNombres(){
    return [
        'Juan',
        'Felipe',
        'Samir',
        'Camilo',
        'Miguel',
        'Daniel',
        'Oscar',
        'David',
        'Christian',
        'Olmedo',
        'Angela',
        'Patricia',
        'Aurelia',
        'Ana',
        'Maria',
        'Martha',
        'Valentina',
        'Gabriela',
        'Valeria',
        'Daniela'
    ];
}

function obtenerApellidos(){
    return [
        'Valencia',
        'Murillo',
        'Mina',
        'Torres',
        'Gomez',
        'Vidal',        
        'Díaz',
        'Arias',
        'Cordoba',
        'Caicedo',
        'Martínez',
        'García',
        'Gómez',
        'López',
        'González',
        'Hernández',
        'Sánchez',
        'Balanta',
        'Mera',
        'Alvarado'
    ];
}

function obtenerNombreAleatorio(){
    $nombres = obtenerNombres();
    $indiceNombre = rand(0, count($nombres)-1);
    return $nombres[$indiceNombre];
}

function obtenerApellidoAleatorio(){
    $apellidos = obtenerApellidos();
    $indiceApellido = rand(0, count($apellidos)-1);
    return $apellidos[$indiceApellido];
}

function obtenerCorreo($nombres, $apellidos){
    return strtolower($nombres.'.'.$apellidos.'@correo.com');
}

function obtenerTelefonoAleatorio(){
    return '('.rand(1, 100).') '.mt_rand(1000000000, 9999999999);
}

function obtenerDireccionAleatoria(){
    return 'Calle '.rand(1, 100).' # '.rand(1,100).' - '.rand(1,100);
}

function omitirTildesCadena($cadena){
    $letrasTilde = ['á', 'é', 'í', 'ó', 'ú'];
    $letras = ['a', 'e', 'i', 'o', 'u'];
    return str_ireplace($letrasTilde, $letras, $cadena);
}
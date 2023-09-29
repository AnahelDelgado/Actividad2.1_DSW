<?php
/*Implementa un script en PHP que almacene en un array el horario del grupo 2º DAM, teniendo en cuenta los siguientes detalles:
Se debe registrar, para actividad (cada hora de clase) qué módulo se imparte, qué docente lo hace y en qué taller.
El array debe estar indexado de forma que se facilite el acceso a los detalles (módulo, docente y tutor) de la actividad de un día y hora determinados.
La elección de los índices la puedes hacer según el criterio que estimes oportuno.

Al ejecutar el script se debe proporcionar al usuario la siguiente información:
Versión 1: Todos los detalles de la actividad que se esté impartiendo en el día y la hora especificados por el usuario (tú escoges el formato en que se obtienen esos datos).
Versión 2: Además de la información anterior, mostrar también todos los detalles de la actividad que se esté impartiendo en el momento de la ejecución del script.
Si no se está impartiendo ninguna actividad en un momento determinado, se debe informar de ello al usuario. En caso de que estemos en el recreo, deberemos indicárselo también al usuario.*/

$Resultado = '';

$Dia = readline("Elija una de los siguientes días de la semana: Lunes-Martes-Miercoles-Jueves-Viernes\n");




    //Parte de los módulos
    $Modulos = [
        'DSW' => [
            'nombre' => 'Desarrollo web en entorno servidor',
            'Aula' => '201'
        ],
        'DPL' => [
            'nombre' => 'Despliegue de aplicaciones web',
            'Aula' => '201'
        ],
        'DEW' => [
            'nombre' => 'Desarrollo web en entorno cliente',
            'Aula' => '201'
        ],
        'DOR' => [
            'nombre' => 'Diseño de interfacez web',
            'Aula' => '201'
        ],
        'EMR' => [
            'nombre' => 'Empresa e iniciativa emprendedora',
            'Aula' => '201'
        ],
    ];

    //Parte de los profesores
    $Profesores = [
        'SerRam' => [
            'NombreProfesor' => 'Sergio Ramos Suarez'
        ],
        'MarMon' => [
            'NombreProfesor' => 'Maria Antonia Montesdeoca Viera'
        ],
        'MarRod' => [
            'NombreProfesor' => 'María del Carmen rodriguez Suarez'
        ],
        'MarVen' => [
            'NombreProfesor' => 'María de Lourdes Ventura Urbina'
        ],
        'MarGar' => [
            'NombreProfesor' => 'María del sol Garcia Tarajano'
        ],
    ];

    //hola grupo soy vanesa, feliz hallowig

    //Parte de la semana

    switch ($Dia) {
        case $Lunes =[
            '08:00-09:50' =>['DEW'],
            '09:51-10:45' =>['DPL'],
            '11:15-12:10' =>['DSW'],
            '12:11-14:00' =>['DOR'],
        ];
            $Dia = $Lunes;
            var_dump($Lunes);
            break;
        case $Martes =[
            '08:00-09:50' =>['DEW'],
            '09:51-10:45' =>['DOR'],
            '11:15-12:10' =>['DOR'],
            '12:11-14:00' =>['DSW'],
        ];
            var_dump($Martes);
            break;
        case $Miercoes =[
            '08:00-10:45' =>['DEW'],
            '11:15-12:10' =>['DPL'],
            '12:11-14:00' =>['DSW'],
        ];
            var_dump($Miercoes);
            break;
        case $Jueves =[
            '08:00-09:50' =>['DOR'],
            '09:51-10:45' =>['EMR'],
            '11:15-12:10' =>['DSW'],
            '12:11-14:00' =>['DPL'],
        ];
            var_dump($Jueves);
            break;
        case $Viernes =[
            '08:00-09:50' =>['EMR'],
            '09:51-10:45' =>['DSW'],
            '11:15-12:10' =>['DSW'],
            '12:11-14:00' =>['DPL'],
        ];
            var_dump($Viernes);
            break;
    }

    if($Dia = 'Lunes'){
        function find($hora){

        }
    }




      //echo"\nEl nombre largo del primer módulo" . $miArray[0]; //Método que nos permite imprimir el nombre completo del primer módulo de nuestro array

  //print_r($miArray); //Método que nos permite imprimir nuestro array

//  foreach ($miArray as $indice => $valor){
  //    echo "\nMódulo número $indice : $valor"; //Método que nos mpermite imprimir nuestro array de la siguiente forma "Módulo número/abreviación DSW : Desarrollo web en entorno servidor
  //}

  //echo "\nLa denominación larga de DSW ES " . $miArray["DSW"];//Método que nos imprime el nombre completo del módulo con solo pasarle las siglas del mismo


    //var_dump($Modulos);
    //var_dump($Profesores);
    //var_dump($Dia);
    var_dump($Lunes);
?>

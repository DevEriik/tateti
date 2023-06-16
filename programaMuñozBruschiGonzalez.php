<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* Gonzalez Erick Marcelo - Legajo: FAI-3433 - Carrera: TUDW - Mail: erick.gonzalez@est.fi.uncoma.edu.ar - Usuario Git: DevEriik */
/* Bruschi Z. Irina Sol  - Legajo: FAI-4446 - Carrera: TUDW - Mail: irina.bruschi@est.fi.uncoma.edu.ar - Usuario Git: sol-bruschi */
/* Muñoz Roxana Elizabeth - Legajo: FAI-42167 - Carrera: TUDW - Mail: roxana.munoz@est.fi.uncoma.edu.ar - Usuario Git: roxana-munoz */





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Módulo para cargar juegos que se desarrollaron 
 * 
 * @return array
 */
    function cargarJuegos() {

        // array $juegos
        $juegos[0] = [ 
            'jugadorCruz' => 'ALAN',
            'jugadorCirculo' => 'ROX',
            'puntosCruz' => '5',
            'puntosCirculo' => '0',
        ];

        $juegos[1] = [ 
            'jugadorCruz' => 'ROX',
            'jugadorCirculo' => 'PAM',
            'puntosCruz' => '6',
            'puntosCirculo' => '0',
        ];

        $juegos[2] = [ 
            'jugadorCruz' => 'SOL',
            'jugadorCirculo' => 'ROX',
            'puntosCruz' => '1',
            'puntosCirculo' => '1',
        ];

        $juegos[3] = [ 
            'jugadorCruz' => 'PABLO',
            'jugadorCirculo' => 'JUAN',
            'puntosCruz' => '2',
            'puntosCirculo' => '0',
        ];

        $juegos[4] = [ 
            'jugadorCruz' => 'SOL',
            'jugadorCirculo' => 'LUCIA',
            'puntosCruz' => '5',
            'puntosCirculo' => '0',
        ];

        $juegos[5] = [ 
            'jugadorCruz' => 'ROX',
            'jugadorCirculo' => 'PABLO',
            'puntosCruz' => '0',
            'puntosCirculo' => '3',
        ];

        $juegos[6] = [ 
            'jugadorCruz' => 'PAM',
            'jugadorCirculo' => 'JUAN',
            'puntosCruz' => '0',
            'puntosCirculo' => '5',
        ];

        $juegos[7] = [ 
            'jugadorCruz' => 'PABLO',
            'jugadorCirculo' => 'PAM',
            'puntosCruz' => '1',
            'puntosCirculo' => '1',
        ];

        $juegos[8] = [ 
            'jugadorCruz' => 'LUCIA',
            'jugadorCirculo' => 'SOL',
            'puntosCruz' => '0',
            'puntosCirculo' => '4',
        ];

        $juegos[9] = [ 
            'jugadorCruz' => 'ARI',
            'jugadorCirculo' => 'CRIS',
            'puntosCruz' => '1',
            'puntosCirculo' => '1',
        ];
        $juegos = [];

    $jg0 = ["jugadorCruz" => "ANA", "jugadorCirculo" => "MILO",    "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg1 = ["jugadorCruz" => "ZEUS",    "jugadorCirculo" => "ANA", "puntosCruz" => 3, "puntosCirculo" => 0];
    $jg2 = ["jugadorCruz" => "ZEUS",    "jugadorCirculo" => "MILO",    "puntosCruz" => 0, "puntosCirculo" => 4];
    $jg3 = ["jugadorCruz" => "CARLOS",  "jugadorCirculo" => "TEO",   "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg4 = ["jugadorCruz" => "ANA", "jugadorCirculo" => "MILO",    "puntosCruz" => 5, "puntosCirculo" => 0];
    $jg5 = ["jugadorCruz" => "FER",   "jugadorCirculo" => "CARLOS",  "puntosCruz" => 0, "puntosCirculo" => 3];
    $jg6 = ["jugadorCruz" => "TEO",   "jugadorCirculo" => "ANA", "puntosCruz" => 4, "puntosCirculo" => 0];
    $jg7 = ["jugadorCruz" => "CARLOS",  "jugadorCirculo" => "TEO",   "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg8 = ["jugadorCruz" => "TEO",   "jugadorCirculo" => "FER",   "puntosCruz" => 2, "puntosCirculo" => 0];
    $jg9 = ["jugadorCruz" => "MILO",    "jugadorCirculo" => "ZEUS",   "puntosCruz" => 1, "puntosCirculo" => 1];
    
    //El array_push es usado para agregar un elemento al final del arreglo.
    array_push($juegos, $jg0, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9);

        return $juegos;
    }

/**
* Este módulo va a mostrar por pantalla al usuario el menú.
* 
* @return int
*/
    function seleccionarOpcion() {
        // int $min, $max
        // int $numero
        $min=1;
        $max=7;
        echo "MENU DEL JUEGO\n";
        echo "1) Jugar al tateti \n";
        echo "2) Mostrar un juego \n";
        echo "3) Mostrar el primer juego ganador \n";
        echo "4) Mostrar porcentaje de juegos ganados \n";
        echo "5) Mostrar resumen de jugador \n";
        echo "6) Mostrar listado de juegos ordenado por jugador O \n";
        echo "7) Salir \n";
        echo "Ingrese una opcion : ";
        $numero = solicitarNumeroEntre($min, $max);
    
        return $numero;	
    }

/**
 * Este módulo le solicita al usuario un número entre dos valores y si el número es inválido lo pide de vuelta
 * @param int $valor1, $valor2 
 * @return int
 */
    function validarNumero ($valor1, $valor2) {

        // int $numeroIngresado
        do {
            echo "Ingrese un numero entre " .$valor1. " y " .$valor2. ": ";
            $numeroIngresado = trim(fgets(STDIN));
            if (!(($valor1 <= $numeroIngresado) && ($numeroIngresado <= $valor2))) {
                echo "El numero de juego no existe.\n";
            }
        } while (!(($valor1 <= $numeroIngresado) && ($numeroIngresado <= $valor2)));
        return $numeroIngresado;
    }


/** Modulo  mostrar datos de un juego
 *  ************** 
 *  Juego TATETI: 13 (empate/ganoX/gano O)
 *  Jugador X: MAJO  obtuvo  1 puntos
 *  Jugador O: PEPE  obtuvo   1 puntos
 *  **************
 * @param array $listaDeJuegos
 * @param $numeroJuego
*/
function mostrarJuegos($listaDeJuegos,$numeroJuego){
    //string $resultado,$nombreX,$nombreO
    // int $puntosX, $puntosO
         
            
              $nombreX=strtoupper($listaDeJuegos[$numeroJuego-1]["jugadorCruz"]);
              $nombreO=strtoupper($listaDeJuegos[$numeroJuego-1]["jugadorCirculo"]);
              $puntosX=$listaDeJuegos[$numeroJuego-1]["puntosCruz"];
    
             $puntosO=$listaDeJuegos[$numeroJuego-1]["puntosCirculo"];
            
    // si son iguales es empate
        if ($puntosX==$puntosO) {
             $resultado="(empate)";
    
         } elseif($puntosX>$puntosO){
             $resultado="(gano X)";
         }else {
            $resultado="(gano O)";
    }
    
      
      echo " ******************* "."\n"; 
      echo " Juego TATETI : " .$numeroJuego. "  " .$resultado."\n";
      echo "  Jugador X:" . $nombreX ." obtuvo " .$puntosX ."\n";
      echo  " Jugador O:" . $nombreO . " obtuvo " .$puntosO. "\n";
     echo " *******************"."\n";
    }


/**
* Módulo que modifica una colección agregando un juego nuevo 
* @param array $juegos
* @param array $unJuego
* @return array
*/
    function agregarJuego($juegos, $unJuego) {

        // int $numArray
        //Se obtiene la cantidad de elementos mediante la funcion (count), retorna la cantidad de elementos del arreglo
        $numArray = count($juegos);
        $juegos[$numArray] = $unJuego;
        return $juegos;
    }

/**
 * Este módulo recibe una colección de juegos y el nombre de un jugador y devuelve el primer juego ganado
 * @param array $listaDeJuegos
 * @param string $nombreJugador
 * @return int
 */
    function primerJuegoGanado ($listaDeJuegos, $nombreJugador) {

        // int $i, $primerGanado
        // boolean $bandera
        $i = 0;
        $bandera = true;
        $primerGanado = -1;
        do {
            if ($nombreJugador == $listaDeJuegos[$i]['jugadorCruz'] && ($listaDeJuegos[$i]['puntosCruz'] > $listaDeJuegos[$i]['puntosCirculo'])) {
                $bandera = false;
                $primerGanado = $i;
            } elseif ($nombreJugador == $listaDeJuegos[$i]['jugadorCirculo'] && ($listaDeJuegos[$i]['puntosCirculo'] > $listaDeJuegos[$i]['puntosCruz'])){
                $bandera = false;
                $primerGanado = $i;
            }
            $i++;
        } while ($i < (count($listaDeJuegos)) && $bandera);
        $primerGanado = $primerGanado + 1;
        return $primerGanado;
    }

/**
 * Este módulo recibe una colección de juegos y el nombre de un jugador y retorna el resumen del jugador
 * @param array $listaDeJuegos
 * @param string $nombreJugadorResumen
 * @return array
 */
    function resumenJugador ($listaDeJuegos, $nombreJugadorResumen) {

        // array $resumenDelJugador
        $resumenDelJugador = [
            "nombre" => "",
            "juegoGanado" => 0,
            "juegoPerdido" => 0,
            "juegoEmpatado" => 0,
            "puntoAcumulado" => 0 
        ];
        // string $nombreArray
        // int $juegosGanados, $juegosPerdidos, $juegosEmpatados, $puntosAcumulados
        $nombreArray = "";
        $juegosGanados = 0;
        $juegosPerdidos = 0;
        $juegosEmpatados = 0;
        $puntosAcumulados = 0;
        for ($i = 0; $i < count($listaDeJuegos); $i++) {
            if ($listaDeJuegos[$i]['jugadorCruz'] == $nombreJugadorResumen) {
                $nombreArray = $nombreJugadorResumen;
                if ($listaDeJuegos[$i]['puntosCruz'] > $listaDeJuegos[$i]['puntosCirculo']) {
                    $juegosGanados++;
                } elseif ($listaDeJuegos[$i]['puntosCruz'] == $listaDeJuegos[$i]['puntosCirculo']) {
                    $juegosEmpatados++;
                } elseif ($listaDeJuegos[$i]['puntosCruz'] < $listaDeJuegos[$i]['puntosCirculo']) {
                    $juegosPerdidos++;
                }
                $puntosAcumulados = $puntosAcumulados + $listaDeJuegos[$i]['puntosCruz'];
            } elseif ($listaDeJuegos[$i]['jugadorCirculo'] == $nombreJugadorResumen) {
                $nombreArray = $nombreJugadorResumen;
                if ($listaDeJuegos[$i]['puntosCirculo'] > $listaDeJuegos[$i]['puntosCruz']) {
                    $juegosGanados++;
                } elseif ($listaDeJuegos[$i]['puntosCirculo'] == $listaDeJuegos[$i]['puntosCruz']) {
                    $juegosEmpatados++;
                } elseif ($listaDeJuegos[$i]['puntosCirculo'] < $listaDeJuegos[$i]['puntosCruz']) {
                    $juegosPerdidos++;
                }
                $puntosAcumulados = $puntosAcumulados + $listaDeJuegos[$i]['puntosCirculo'];
            }
        }
        $resumenDelJugador["nombre"] = $nombreArray;
        $resumenDelJugador["juegoGanado"] = $juegosGanados;
        $resumenDelJugador["juegoPerdido"] = $juegosPerdidos;
        $resumenDelJugador["juegoEmpatado"] = $juegosEmpatados;
        $resumenDelJugador["puntoAcumulado"] = $puntosAcumulados;

        return $resumenDelJugador;
    }

/**
 * Este módulo muestra como cartel el resumen del jugador recibiendo el array de la función anterior (resumenJugador)
 * @param array $resumenDelJugador
 * @return void //Es un tipo de retorno que indica que la funcion no devuelve un valor
 */
    function mostrarResumen($resumenDelJugador) {

        echo "\n"; //Salto de línea para mayor legibilidad
        echo "**********\n";
        echo "Jugador: " .$resumenDelJugador["nombre"]. "\n";
        echo "Ganó: " .$resumenDelJugador["juegoGanado"]. "\n";
        echo "Perdió: " .$resumenDelJugador["juegoPerdido"]. "\n";
        echo "Empató: " .$resumenDelJugador["juegoEmpatado"]. "\n";
        echo "Total de puntos acumulados: " .$resumenDelJugador["puntoAcumulado"]. "\n";
        echo "**********\n";
        echo "\n"; //Salto de línea para mayor legibilidad
    }

/**
 * Esta función pide al usuario ingresar un símbolo, obligatoriamente debe ser X/O
 * @param void
 * @return string
 */
    function simboloXO () {

        // boolean $validacion
        // string $simbolo
        // La variable $validacion la inicializaremos en true para que cuando la condición nos de false salgamos del while con el resultado
        $validacion = true;
        echo "Ingrese un símbolo (debe ser X/O): ";
        $simbolo = trim(fgets(STDIN));
        // Aquí usaremos la función strtoupper en caso de que ingresen el símbolo en minúscula, para que se convierta en una mayúscula
        $simbolo = strtoupper($simbolo);
        while ($validacion) {
            if ($simbolo == "O") {
                $validacion = false;
            } elseif ($simbolo == "X") {
                $validacion = false;
            } else {
                echo "Ingrese un símbolo válido, ya sea X/O: ";
                $simbolo = trim(fgets(STDIN));
            }
        }
        return $simbolo;
    }

/**
 * Esta función retorna la cantidad de juegos ganados según una colección de juegos
 * @param array $listaDeJuegos
 * @return int
 */
    function cantJuegosGanados ($listaDeJuegos) {

        // int $cantidadDeJuegosGanados, $c
        $cantidadDeJuegosGanados = 0;
        for ($i = 0; $i < count($listaDeJuegos); $i++) {
            if ($listaDeJuegos[$i]['puntosCruz'] != 1 && $listaDeJuegos[$i]['puntosCirculo'] != 1) {
                $cantidadDeJuegosGanados++;
            }
        }
        return $cantidadDeJuegosGanados;
    }

/**
 * Esta función recibe una colección de juegos y un símbolo y retorna la cantidad de juegos ganados según el símbolo
 * @param array $listaDeJuegos
 * @param string $simbol
 * @return int
 */
    function ganadosSimbolo ($listaDeJuegos, $simbol) {
        
        // int $cantJuegosGanadosSimbolo (Contador), $g
        $cantJuegosGanadosSimbolo = 0;
        for ($g = 0; $g < count($listaDeJuegos); $g++) {
            if ($simbol == "X") {
                if ($listaDeJuegos[$g]['puntosCruz'] > 1) {
                    $cantJuegosGanadosSimbolo++;
                }
            } elseif ($simbol == "O") {
                if ($listaDeJuegos[$g]['puntosCirculo'] > 1){
                    $cantJuegosGanadosSimbolo++;
                }
            }
        } 
        return $cantJuegosGanadosSimbolo;
    }

/**
 * Este módulo recibe dos arrays y los compara de menor a mayor, retorna -1 si ($a < $b), 1 si ($a > $b) y 0 si ambos son iguales
 * @param array $a, $b
 * @return int
 */
    function ordenarJugadorCirculo ($a, $b) {

        // int ordJugadorO
         // Usamos la función strcasecmp, que compara dos string y retorna 1 si es mayor, 0 si es igual, -1 si es menor
        $ordJugadorO = strcasecmp($a['jugadorCirculo'], $b['jugadorCirculo']);
        return $ordJugadorO;
    }

    /**
     * Este módulo recibe una colección de juegos y los ordena alfabéticamente en base al jugador O
     * @param array $listaDeJuegos
     * @return void
     */
    function juegosOrdenadosO ($listaDeJuegos) {
        // La función uasort permite ordenar el arreglo mediante una función de comparación definida por el programador (esMayorO). 
        uasort ($listaDeJuegos, 'ordenarJugadorCirculo'); 
        // print_r muestra en pantalla informacion legible acerca de una variable
        print_r ($listaDeJuegos);
    }







/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/** Declaración de variables:
 * array $juegoNuevo, $listaDeJuegos
 * int $opcion, $numJuego, $valorUno, $valorDos, $numeroDeGanador, $cantidadGanadosSimbolo, $cantJuegos
 * string $jugadorGanador, $simboloJugador, $nombre
 * float $porcentajeGanados
*/


//Inicialización de variables:
//Se cargan los 10 juegos a la lista
$listaDeJuegos = cargarJuegos();


//Proceso:
do {
    $opcion = seleccionarOpcion();
    switch ($opcion) { // Se utiliza switch, el cual es una estructura de control similar al if, sirve para comparar la misma variable con valores diferentes
        case 1: 
            // Jugar al tateti
            $juegoNuevo = jugar();
            imprimirResultado($juegoNuevo);
            // Almacenar juego en la base de datos
            $listaDeJuegos = agregarJuego($listaDeJuegos, $juegoNuevo);
            break;
        case 2:
            
            // Mostrar un Juego
        
            if (count($listaDeJuegos)>0) {
                $valor1 = 1;
                $valor2 = count($listaDeJuegos);
                echo "Ingrese un numero entre ". $valor1. " y " .$valor2. ": " ;
                $numJuego=solicitarNumeroEntre($valor1 , $valor2);
                mostrarJuegos($listaDeJuegos , $numJuego );
            }
                // Mostrar el juego pedido
            break;
        case 3:
            // Mostrar el primer juego ganado
            if (count($listaDeJuegos) > 0) {
                
                echo "Ingrese el nombre del jugador a buscar: ";
                $jugadorGanador = trim(fgets(STDIN));
                $jugadorGanador = strtoupper($jugadorGanador);
                $numeroDeGanador = primerJuegoGanado($listaDeJuegos, $jugadorGanador);
                if ($numeroDeGanador > 0) {
                    mostrarJuegos($listaDeJuegos ,$numeroDeGanador);
                } else {
                    echo "\n"; //Salto de línea para mayor legibilidad
                    echo "El jugador " .$jugadorGanador. " no ha ganado ningún juego.\n";
                    echo "\n"; //Salto de línea para mayor legibilidad
                }
            } else {
                echo "No se ha registrado ningún juego.\n";
            }
            break;
        case 4:
            // Mostrar porcentaje de juegos ganados
            $simboloJugador = simboloXO();
            $cantidadGanadosSimbolo = ganadosSimbolo($listaDeJuegos, $simboloJugador);
            $cantJuegos = cantJuegosGanados($listaDeJuegos);
            $porcentajeGanados = round(($cantidadGanadosSimbolo / $cantJuegos) * 100);
            echo "\n"; //Salto de línea para mayor legibilidad
            echo "El jugador " .$simboloJugador. " ganó el " .$porcentajeGanados. "% de juegos.\n";
            echo "\n"; //Salto de línea para mayor legibilidad
            break;
        case 5:
            // Mostrar resumen de un jugador
            echo "Ingrese el nombre del jugador: ";
            $nombre = trim(fgets(STDIN));
            $nombre = strtoupper($nombre);
            // Comprobamos si el jugador existe
            $jugadorExiste = true;
            $i = 0;
            do {
                if ($listaDeJuegos[$i]['jugadorCruz'] == $nombre) {
                    $jugadorExiste = false;
                } elseif ($listaDeJuegos[$i]['jugadorCirculo'] == $nombre) {
                    $jugadorExiste = false;
                }
                $i++;
            } while ($jugadorExiste && $i < count($listaDeJuegos));
            if ($jugadorExiste) {
                echo "\n"; //Salto de línea para mayor legibilidad
                echo "El jugador " .$nombre. " no ha realizado ningún juego.\n";
                echo "\n"; //Salto de línea para mayor legibilidad
            } else {
                mostrarResumen(resumenJugador($listaDeJuegos, $nombre));
            }
            break;
        case 6:
            // Mostrar listado de juegos ordenado por jugador O
            juegosOrdenadosO ($listaDeJuegos);
            break;
        case 7:
            // Muestra cartel de finalización de juego
            echo "TATETI FINALIZADO.";
    }
 } while($opcion !=7);
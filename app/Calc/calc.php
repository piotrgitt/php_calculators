<?php
require_once dirname(__FILE__).'/../../config.php';


//DZIAŁANIE KONTROLERA
$x=null;
$y=null;
$operation=null;
$result=null;
$messages= array();

getParams($x, $y, $operation);
if(validate($x, $y, $operation, $messages)){
    $process = process($x, $y, $operation, $messages,$result);
}

include 'calc_view.php';


//METODY
//pobranie argumentów
function getParams(&$x, &$y, &$operation){
    $x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
    $y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
    $operation = isset($_REQUEST ['op']) ? $_REQUEST ['op'] : null;

}



// walidacja parametrów
function validate(&$x, &$y, &$operation, &$messages){
    if ( ! (isset($x) && isset($y) && isset($operation))) {
            //sprawdzenie czy dane zmienne zostały zainicjalizowane;
            //jeśli nie, nie ma sensu dalej procedować funkcji
            return false;
    }

    
    if (count($messages) != 0) return false;

    
    if (empty( $messages )) {

            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (! is_numeric( $x )) {
                    $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
            }

            if (! is_numeric( $y )) {
                    $messages [] = 'Druga wartość nie jest liczbą całkowitą';
            }	

    }

    if (count($messages) != 0) return false; else return true;
}



function process(&$x, &$y, &$operation, &$messages, &$result){
            global $role;
    
            $x = intval($x);
            $y = intval($y);

            switch ($operation) {
                    case 'minus' :
                        if($role == 'admin'){
                            $result = $x - $y;
                            break;
                        } else $messages [] = "Odejmować może tylko admin";
                    case 'times' :
                            $result = $x * $y;
                            break;
                    case 'div' :
                            $result = $x / $y;
                            break;
                    default :
                            $result = $x + $y;
                            break; 
        } 
 }




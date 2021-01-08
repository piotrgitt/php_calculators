<?php
require_once dirname(__FILE__).'/../../config.php';

//-----Bramkarz
//include _ROOT_PATH.'\app\Security\check.php';


$kwota = null;
$lata = null;
$oprocentowanie = null;

$result = null;
$total_cost = null;
$messages = array();





getParams($kwota, $lata, $oprocentowanie);


if(validateCredit($kwota, $lata, $oprocentowanie, $messages)){
    process($kwota, $lata, $oprocentowanie, $result, $total_cost, $messages);
  
}


function getParams(&$kwota, &$lata, &$oprocentowanie){

    $kwota = (isset($_REQUEST ['kwota'])) ? $_REQUEST ['kwota'] : null;
    $lata = (isset($_REQUEST ['lata'])) ? $_REQUEST ['lata'] : null;
    $oprocentowanie = (isset($_REQUEST ['oprocentowanie'])) ? $_REQUEST ['oprocentowanie'] : null;
    
    
}


function process(&$kwota,&$lata,&$oprocentowanie,&$result,$total_cost ){
        $kwota = intval($kwota);
	$lata = intval($lata);
	$oprocentowanie = intval($oprocentowanie);
        
	$result = floatval(($kwota / ($lata*12))*($oprocentowanie/100+1));
	$total_cost = $result*12*$lata;
}



function validateCredit(&$kwota, &$lata, &$oprocentowanie, &$messages){

    if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie)) ) return false;
    
    
    if ( $kwota == "") {
            $messages [] = 'Nie podano Kwoty';
            
    }
    if ( $lata == "") {
            $messages [] = 'Nie podano Lat';
    }
    if ( $lata == "0") {
            $messages [] = 'Lata nie mogą być równe 0';
    }
    if ( $oprocentowanie == "") {
            $messages [] = 'Nie podano Oprocentowania';
    } 

    

    if (empty( $messages )) {

            if (! is_numeric( $kwota )) {
                    $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
            }

            if (! is_numeric( $lata )) {
                    $messages [] = 'Druga wartość nie jest liczbą całkowitą';
            }	

            if (! is_numeric( $oprocentowanie )) {
                    $messages [] = 'Druga wartość nie jest liczbą całkowitą';
            }
    }
    

    if (count($messages)>0) return false;
    
    return true;
}





include 'calc_view_credit.php';
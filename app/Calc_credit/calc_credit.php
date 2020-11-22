<?php
require_once dirname(__FILE__).'/../../config.php';

$kwota = $_REQUEST ['kwota'];
$lata = $_REQUEST ['lata'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];


if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $kwota == "") {
	$messages [] = 'Nie podano Kwoty';
}
if ( $lata == "") {
	$messages [] = 'Nie podano Lat';
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



if (empty ( $messages )) { 
	
	$kwota = intval($kwota);
	$lata = intval($lata);
	$oprocentowanie = intval($oprocentowanie);
	
	$result = floatval(($kwota / ($lata*12))*($oprocentowanie/100+1));
	$total_cost = $result*12*$lata;

}

include 'calc_view_credit.php';
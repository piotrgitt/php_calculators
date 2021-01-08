<!-- Działanie kontrolera -->
<?php
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

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

//============SMARTY
$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('approot',_APP_ROOT);
$smarty->assign('result',$result);
$smarty->assign('kwota',$kwota);
$smarty->assign('lata',$lata);
$smarty->assign('oprocentowanie',$oprocentowanie);
$smarty->assign('messages',$messages);

$smarty->display('C:/xampp/htdocs/php_calculators/app/Calc_credit/calc_view_credit.tpl');




//==============FUNKCJE
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


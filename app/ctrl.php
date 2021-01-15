<?php
require_once dirname(__FILE__).'/../config.php';

//-----Bramkarz
//include _ROOT_PATH.'\app\Security\check.php';


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch($action){
    default:
        include_once $config->root_path.'/app/Calc_credit/CalcCredit.class.php';
        $calc_credit_ctrl = new CalcCredit();
        $calc_credit_ctrl->generateView();
        break;
    case 'calcCredit':
        include_once $config->root_path.'/app/Calc_credit/CalcCredit.class.php';
        $calc_credit_ctrl = new CalcCredit();
        $calc_credit_ctrl->process();
        break;
    

}
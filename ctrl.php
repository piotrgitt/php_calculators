<?php
require_once 'init.php';

switch($action){
    default:
        include_once $config->root_path.'/app/controllers/CalcCredit.class.php';
        $calc_credit_ctrl = new CalcCredit();
        $calc_credit_ctrl->generateView();
        break;
    case 'calcCredit':
        include_once $config->root_path.'/app/controllers/CalcCredit.class.php';
        $calc_credit_ctrl = new CalcCredit();
        $calc_credit_ctrl->process();
        break;
    

}
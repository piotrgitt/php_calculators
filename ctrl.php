<?php
require_once 'init.php';


switch($action){
    default:
         $calc_credit_ctrl = new app\controllers\CalcCredit();
        $calc_credit_ctrl->generateView();
        break;
    case 'calcCredit':
        $calc_credit_ctrl = new app\controllers\CalcCredit();
        $calc_credit_ctrl->process();
        break;
    

}
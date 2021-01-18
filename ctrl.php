<?php
require_once 'init.php';


switch($action){
    default:
        include 'check.php'; //BRAMKARZ
        $calc_credit_ctrl = new app\controllers\CalcCredit();
        $calc_credit_ctrl->generateView();
        break;
    case 'calcCredit':
        include 'check.php'; //BRAMKARZ
        $calc_credit_ctrl = new app\controllers\CalcCredit();
        $calc_credit_ctrl->process();
        break;
    case 'login':
        //BEZ BRAMKARZA
        $login_controller = new app\controllers\LoginCtrl();
        $login_controller->doLogin();
        break;
    case 'logout':
        include 'check.php';  // KONTROLA
        $login_controller = new app\controllers\LoginCtrl();
        $login_controller->doLogout();
        break;
    

}
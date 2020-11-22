<?php
require_once 'config.php';

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/app/Calc/calc_view.php';
include _ROOT_PATH.'/app/Calc_credit/calc_view_credit.php';
?>
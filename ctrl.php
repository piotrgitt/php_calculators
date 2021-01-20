<?php
require_once 'init.php';


getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcShow', 'CalcCredit', ['user', 'admin']);
getRouter()->addRoute('process', 'CalcCredit', ['user', 'admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user', 'admin']);
getRouter()->addRoute('results', 'ResultsCtrl', ['user', 'admin']);


getRouter()->go();
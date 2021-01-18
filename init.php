<?php

// USTAWIENIE KONFIGURACJI
require_once 'Core/Config.class.php';
$config = new Core\Config();
require_once 'config.php';

//ZWRACANIE GLOBALNEGO PLIKU KONFIGURACJI
function &getConfig(){
    global $config;
    return $config;   
}

require_once getConfig()->root_path.'/Core/Messages.class.php';
$messages = new Core\Messages(); 

function &getMessages(){
    global $messages;
    return $messages; 
}
require_once 'Core/functions.php';
$smarty = null;
function &getSmarty(){
    global $smarty;
    if (!isset($smarty)){
        include_once getConfig()->root_path.'/lib/smarty/Smarty.class.php';
        
        $smarty = new Smarty();
        
        $smarty->assign('config', getConfig());
        $smarty->assign('messages', getMessages());
        
        $smarty->setTemplateDir(array(
                'one' => getConfig()->root_path.'/app/views',
                'two' => getConfig()->root_path.'/app/views/templates'
        ));        
    } 
    return $smarty;
}





////CLASS LOADER
require_once 'Core/ClassLoader.class.php';
$cloader = new Core\classLoader();

function &getLoader(){
    global $cloader;
    return $cloader;
}



require_once 'Core/Router.class.php'; //załaduj i stwórz router
$router = new Core\Router();
function &getRouter(): Core\Router {
    global $router; return $router;
}




session_start(); //uruchom lub kontynuuj sesję
$config->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );


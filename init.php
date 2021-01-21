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



$db = null;
function &getDB(){
    global $db;
    if (!isset($db)){
        include_once getConfig()->root_path.'/lib/Medoo/Medoo.class.php';
        try{
            $db = new \Medoo\Medoo([
                // required
                'database_type' => 'mysql',
                'database_name' => 'calc_credit_db',
                'server' => 'localhost',
                'username' => 'root',
                'password' => '',

                // [optional]
                'charset' => 'utf8',
                'collation' => 'utf8_polish_ci',
                'port' => 3306,

                // [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
                'option' => [
                        \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ],
            ]);
        }catch(\PDOException $ex){
            getMessages()->addError($ex->getMessage());
        } 
    return $db;
    }
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


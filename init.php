<?php

// USTAWIENIE KONFIGURACJI
require_once dirname(__FILE__).'/Core/Config.class.php';
$config = new Config();
include dirname(__FILE__).'/config.php'; 

//ZWRACANIE GLOBALNEGO PLIKU KONFIGURACJI
function &getConfig(){
    global $config;
    return $config;   
}

require_once getConfig()->root_path.'/Core/Messages.class.php';
$messages = new Messages(); 

function &getMessages(){
    global $messages;
    return $messages; 
}

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


require_once getConfig()->root_path.'/Core/functions.php';
$action = getFromRequest('action');
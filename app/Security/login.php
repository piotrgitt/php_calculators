<?php
require_once dirname(__FILE__).'/../../config.php';


$form = array();
$messages = array();

getLoginParams($form);



if(!validateLogin($form, $messages)){
    include _ROOT_PATH.'\app\Security\login_view.php';
    
} else {
    header("Location: "._APP_URL);
}




function getLoginParams(&$form){
    $form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;

    $form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
      

}


function validateLogin(&$form, &$messages){

    
    if(!  (isset($form['login']) && isset($form['pass']))){
        
        return false;
    }
        
    //sprawdzenie czy login i hasło zostały podane
    if($form['login'] == ""){
        $messages[] = "Nie podano loginu";
    }
    if($form['pass'] == ""){
        $messages[] = "Nie podano hasła";                                                                                                             
        
    }
    
    if(count($messages)>0) return false;
    
    
    if($form['login'] == "admin" && $form['pass'] == "admin"){
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }
    
    if($form['login'] == "user" && $form['pass'] == "user"){
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }
    
    
    $messages[] = "Niepoprawny login lub hasło";
    return false;
}
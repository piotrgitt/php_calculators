<?php


namespace app\controllers;

use app\Transfer\User;
use app\Forms\LoginForm;


class LoginCtrl {
    private $form;
    
    public function __construct() {
        $this->form=new LoginForm();
    }
    
    public function getParams(){
        $this->form->login = \Core\getFromRequest('login');
        $this->form->pass = \Core\getFromRequest('pass');
    }
    
    public function validate(){
        
        //IS FORM EMPTY
        if(!( isset($this->form->login) && isset($this->form->pass))){
            
            getMessages()->addError('Błędne wywołanie aplikacji');
        }
        
        //IS FORM "EMPTY" -> "" "" 
        if (! getMessages()->isError ()) {
			
            
            if ($this->form->login == "") {
                    getMessages()->addError ( 'Nie podano loginu' );
            }
            if ($this->form->pass == "") {
                    getMessages()->addError ( 'Nie podano hasła' );
            }
        }

        //VALITADE GIVEN LOGIN AND PASSWORD
        if(!getMessages()->isError()){
            if($this->form->login == 'admin' && $this->form->pass = 'admin'){
                if(session_status() == PHP_SESSION_NONE){
                    session_start();
                }
                //stworzenie użytkownika w aplikacji -> przekazujemy admin jako login, oraz 'admin' jako rolę 
                $user = new User($this->form->login, 'admin');
                // zapis wartości do sesji
                //$_SESSION['user_login'] = $user->login;
                //$_SESSION['user_role'] = $user->role;
                // LUB można zapisać or razu cały obiekt, ale trzeba go zserializować
                $_SESSION['user'] = serialize($user);	
                
            } else if($this->form->login == 'user' && $this->form->pass = 'user'){
                if(session_status() == PHP_SESSION_NONE){
                    session_start();
                }
                $user = new app\Transfer\User($this->form->login, 'user');
                $_SESSION['user'] = serialize($user);	
                
            }else {
                getMessages()->addError("Nazwa użytkownika bądź hasło niepoprawne");
            }
            
                            
            return !getMessages()->isError();  
        }
    }
    
    
    public function doLogin(){
        $this->getParams();
        if($this->validate()){
            //ZALOGOWANY -> przekieruj na stronę główną
            header("Location: ". getConfig()->app_url.'/');
            getMessages()->addInfo("Poprawnie zalogowano");
        } else {
            //NIE ZALOGOWANY -> wyświetl ponownie widok logowania
            $this->generateView();
        }
    }
    
    public function doLogout(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();

        getMessages()->addInfo("Poprawnie wylogowano");
        $this->generateView();
        
    }
    
    public function generateView(){
        
        getSmarty()->assign('action_root', getConfig()->action_root);
        getSmarty()->assign('action_url', getConfig()->action_url);
        getSmarty()->assign('app_url',getConfig()->app_url);
        getSmarty()->assign('root_path',getConfig()->root_path);
        getSmarty()->assign('approot',getConfig()->app_root);
        
        
        getSmarty()->assign('form', $this->form);
        getSmarty()->display('login_view.tpl');
    } 
}

<?php


namespace app\controllers;

use app\Transfer\User;
use app\Forms\LoginForm;


class ResultsCtrl {
    private $results;
    private $database;
    
    public function __construct() {
        
    }
    
    public function getParams(){
         try{
            $database = new \Medoo\Medoo([
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

        $this->results=$database->select("results", "*");
        
        
            
        }catch(\PDOException $ex){
            getMessages()->addError($ex->getMessage());
        }
        
        
    }
    
    public function action_results(){
        $this->getParams();
        $this->generateView();
    }
    
    
    
    public function validate(){          
            return !getMessages()->isError();  
        
    }
       
    public function generateView(){
        getSmarty()->assign('action_root', getConfig()->action_root);
        getSmarty()->assign('action_url', getConfig()->action_url);
        getSmarty()->assign('app_url',getConfig()->app_url);
        getSmarty()->assign('root_path',getConfig()->root_path);
        getSmarty()->assign('approot',getConfig()->app_root);
        
      
        getSmarty()->assign("results", $this->results);
        
        getSmarty()->display('results_view.tpl');
    } 

}


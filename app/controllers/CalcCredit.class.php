<?php
namespace app\controllers;


//odpowiednik importu w javie - pokazuje systemowi, gdzie znajduje się klasa
use app\Forms\Form;
use app\Transfer\Result;



class CalcCredit {
    
    private $form;     //przechowywanie danych z formularza
    private $result;  //wyniki obliczeń kalkulatora kredytowego


    
    public function __construct() {
        $this->form = new Form();
        $this->result = new Result();
    }
    
    
    public function getParams(){
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->oprocentowanie = getFromRequest('oprocentowanie');

    }
    
    public function action_calcShow(){
        
        
        getMessages()->addInfo('Wygenerowano widok');
        $this->generateView();
    }
    
    
    public function action_process(){

        $this->getParams();
        if($this->validate()){
            $this->form->kwota = intval($this->form->kwota);
            $this->form->lata = intval($this->form->lata);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);

            $this->result->result = floatval(($this->form->kwota / ( $this->form->lata*12))*($this->form->oprocentowanie/100+1));
            $this->result->total_cost = $this->result->result*12*$this->form->lata;
        }
        

        $this->generateView();
        
    }
    
    public function validate(){
        if ( ! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->oprocentowanie))) return false;

        
        if ( $this->form->kwota == "") {
                getMessages()->addError('Nie podano Kwoty');
        }
        if ( $this->form->lata == "") {
                getMessages()->addError('Nie podano lat');
        }
        if ( $this->form->lata == "0") {
                getMessages()->addError('Lata nie mogą być równe 0');
        }
        if ( $this->form == "") {
                getMessages()->addError('Nie podano oprocentowania');
        } 
        

        if (!(getMessages()->isError())) {

                if (! is_numeric( $this->form->kwota )) {
                        getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
                }

                if (! is_numeric( $this->form->lata )) {
                        getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
                }	

                if (! is_numeric( $this->form->oprocentowanie )) {
                        getMessages()->addError('Oprocentowanie musi być liczbą całkowitą');
                }
        }
        
        if (getMessages()->isError()) return false;
        return true;
    
    }
    
    
    public function generateView(){
        
        getSmarty()->assign('action_root', getConfig()->action_root);
        getSmarty()->assign('action_url', getConfig()->action_url);
        getSmarty()->assign('app_url',getConfig()->app_url);
        getSmarty()->assign('root_path',getConfig()->root_path);
        getSmarty()->assign('approot',getConfig()->app_root);
        
        getSmarty()->assign('result',$this->result->result);
        getSmarty()->assign('total_cost',$this->result->total_cost);
        getSmarty()->assign('kwota',$this->form->kwota);
        getSmarty()->assign('lata',$this->form->lata);
        getSmarty()->assign('oprocentowanie',$this->form->oprocentowanie);
        
        
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->display('calc_view_credit.tpl');
        
    }
}

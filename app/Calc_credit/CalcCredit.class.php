<?php


require_once $config->root_path.'/lib/smarty/Smarty.class.php';
require_once $config->root_path.'/lib/Messages.class.php';
require_once $config->root_path.'/app/Calc_credit/Result.class.php';
require_once $config->root_path.'/app/Calc_credit/Form.class.php';




class CalcCredit {
    
    private $form;     //przechowywanie danych z formularza
    private $result;  //wyniki obliczeń kalkulatora kredytowego
    private $messages;  //wiadomości do widoku

    
    public function __construct() {
        $this->form = new Form();
        $this->result = new Result();
        $this->messages = new Messages();
    }
    
    
    public function getParams(){
        $this->form->kwota = (isset($_REQUEST ['kwota'])) ? $_REQUEST ['kwota'] : null;
        $this->form->lata = (isset($_REQUEST ['lata'])) ? $_REQUEST ['lata'] : null;
        $this->form->oprocentowanie = (isset($_REQUEST ['oprocentowanie'])) ? $_REQUEST ['oprocentowanie'] : null;
        
        
    }
    
    
    public function process(){

        $this->getParams();
        if($this->validate()){
            $this->form->kwota = intval($this->form->kwota);
            $this->form->lata = intval($this->form->lata);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);

            $this->result->result = floatval(($this->form->kwota / ( $this->form->lata*12))*($this->form->oprocentowanie/100+1));
            $this->result->total_cost = $this->result->result*12*$this->form->lata;
        }
        
        $this->messages->addInfo('Wygenerowano widok');
        $this->generateView();
        
    }
    
    public function validate(){
        if ( ! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->oprocentowanie))) return false;

        
        if ( $this->form->kwota == "") {
                $this->messages->addError('Nie podano Kwoty');
        }
        if ( $this->form->lata == "") {
                $this->messages->addError('Nie podano lat');
        }
        if ( $this->form->lata == "0") {
                $this->messages->addError('Lata nie mogą być równe 0');
        }
        if ( $this->form == "") {
                $this->messages->addError('Nie podano oprocentowania');
        } 
        

        if (!($this->messages->isError())) {

                if (! is_numeric( $this->form->kwota )) {
                        $this->messages->addError('Pierwsza wartość nie jest liczbą całkowitą');
                }

                if (! is_numeric( $this->form->lata )) {
                        $this->messages->addError('Druga wartość nie jest liczbą całkowitą');
                }	

                if (! is_numeric( $this->form->oprocentowanie )) {
                        $this->messages->addError('Oprocentowanie musi być liczbą całkowitą');
                }
        }
        
        if ($this->messages->isError()) return false;
        return true;
    
    }
    
    
    public function generateView(){
        global $config;
        
        
        //============SMARTY
        $smarty = new Smarty();

        $smarty->assign('config', $config);
        
        $smarty->assign('app_url',$config->app_url);
        $smarty->assign('root_path',$config->root_path);
        $smarty->assign('approot',$config->app_root);
        $smarty->assign('result',$this->result->result);
        $smarty->assign('total_cost',$this->result->total_cost);
        $smarty->assign('kwota',$this->form->kwota);
        $smarty->assign('lata',$this->form->lata);
        $smarty->assign('oprocentowanie',$this->form->oprocentowanie);
        $smarty->assign('messages',$this->messages);

        $smarty->display('C:/xampp/htdocs/php_calculators/app/Calc_credit/calc_view_credit.tpl');
        
    }
}

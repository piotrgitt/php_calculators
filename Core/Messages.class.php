<?php


class Messages {
    private $errors = array();
    private $info = array();
    private $num = 0;
    
    
    public function addError($messages){
        $this->errors[] = $messages;
        $this->num++; 
    }
    
    public function addInfo($messages){
        $this->info[] = $messages;
        $this->num++; 
    }
    
    public function isError(){
        if( count($this->errors) > 0)  return true;    //istnieją błędy
        return false;
    }

    public function isInfo(){
        if( count($this->info) > 0) return true;    //istnieją informacje 
        return false;
    }
    
    public function clearMessages(){
        $this->errors = array();
        $this->info = array();
        $this->num = 0;
         
    }
    
    public function isEmpty() {
		return $this->num == 0;                 
    }
  
    public function getErrors() {
		return $this->errors;
    }
    
    public function getInfos() {
		return $this->info;
    }
   
    
}

<?php

  //this class "extends" OOPHPAbstractClass 


  include_once('OOPHPAbstractClass.php');
  
  class OOPHPClassToExtendAnAbstract extends OOPHPAbstractClass {


    private $instanceName;  
    
    //OOPHPAbstractClass has the abstract function getName,
    //  so we must implement it here. 
    public function getName() {
      return $this->instanceName;
    }  
    
    //OOPHPAbstractClass has the abstract function setName,
    //  so we must implement it here. 
    public function setName($nameIn) {
      $this->instanceName = $nameIn;
    }
  }
?>
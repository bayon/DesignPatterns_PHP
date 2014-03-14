<?php

  //this class "extends" OOPHPInterfaceOne and OOPHPInterfaceTwo.
  //Unlike abstracts, of which only one can be extended,
  //  a class can implement multiple interfaces.


  include_once('OOPHPInterfaceOne.php');
  include_once('OOPHPInterfaceTwo.php');
    
  class OOPHPClassToImplementInterfaces 
    implements OOPHPInterfaceOne, OOPHPInterfaceTwo {


    private $instanceNameOne;  
    
    //OOPHPInterfaceOne has the function getNameOne,
    //  so we must implement it here. 
    public function getNameOne() {
      return $this->instanceNameOne;
    }  


    //OOPHPInterfaceTwo has the function getNameTwo,
    //  so we must implement it here. 
    public function getNameTwo() {
      return $this->instanceNameTwo;
    }
    
    //OOPHPInterfaceOne has the function setNameOne,
    //  so we must implement it here. 
    public function setNameOne($nameIn) {
      $this->instanceNameOne = $nameIn;
    }


    //OOPHPInterfaceTwo has the function setNameTwo,
    //  so we must implement it here. 
    public function setNameTwo($nameIn) {
      $this->instanceNameTwo = $nameIn;
    }


  }
?>
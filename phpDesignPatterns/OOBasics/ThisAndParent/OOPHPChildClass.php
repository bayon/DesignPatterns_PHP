<?php

  //OOPHPClass - a simple OO PHP Class which extends OOPHPParentClass


  include_once('OOPHPParentClass.php');


  class OOPHPChildClass extends OOPHPParentClass {      


    public function getColor() {
      return 'BLUE';
    }  
    
    public function getParentColor() {
      return parent::getColor();
    }


  }
  ?>
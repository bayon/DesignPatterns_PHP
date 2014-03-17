<?php
echo("<br>".__FILE__);
include_once("SeasonContext.php");

class Season{
	
	private $seasonContext = null;

	public function __construct($context){
		$this->seasonContext = $context;	
	}

	public function theSeason($context){
		$this->seasonContext = $context;
	}	
		
}
?>
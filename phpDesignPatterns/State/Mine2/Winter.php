<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Spring.php");

class Winter extends Season{
		
	private $seasonContext;
		
	public function theSeason($context){
		echo("<br>set season winter");
		$this->seasonContext = $context;
		$this->seasonContext->setSeason(new Spring()); 
		 
	}
	
}
?>
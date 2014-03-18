<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Fall.php");

class Summer extends Season{
	 
	public function theSeason($context){
		echo("<br>set season SUMMER");
		$this->seasonContext = $context;
		$this->seasonContext->setSeason(new Fall());
		 
	}
}
?>
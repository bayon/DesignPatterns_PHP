<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Summer.php");

class Spring extends Season{
	public function theSeason($context){
		echo("<br>set season Spring");
		$this->seasonContext = $context;
		$this->seasonContext->setSeason(new Summer());
	}
	
	
	
}
?>
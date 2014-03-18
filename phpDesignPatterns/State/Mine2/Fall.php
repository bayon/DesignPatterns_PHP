<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Winter.php");

class Fall extends Season{
	 
	public function theSeason($context){
		echo("<br>set season Fall");
		$this->seasonContext = $context;
		$this->seasonContext->setSeason(new Winter());
	}
}
?>
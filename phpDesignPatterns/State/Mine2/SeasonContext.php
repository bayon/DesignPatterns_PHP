<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Winter.php");

class SeasonContext{
	private $season;
	
	public function __construct(){
		$this->season = new Winter();
	}
	
	public function whatIsTheSeason(){
		echo("<br>call what is the season...");
		$season->theSeason($this);
	}	

	public function setSeason($seasonToSet){
		$this->season = $seasonToSet;	
	}
}

?>
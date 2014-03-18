<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Winter.php");

class SeasonContext{
	private $season;
	private $seasonName;
	
	public function __construct(){
		$this->season = new Winter();
	}
	
	public function whatIsTheSeason(){
		echo("<br>call what is the season...");
		echo "This class is " , get_class($this) , "\n";
		//echo "Self class is " , get_class(self) , "\n";
		$this->season->theSeason($this); 
		
		
		echo($this->season->showSeason());
		//$this = current object
		//self = current class
		//$this->member
		//self :: $member 
	}	

	public function setSeason($seasonToSet){
		$this->season = $seasonToSet;	
	}
}

?>
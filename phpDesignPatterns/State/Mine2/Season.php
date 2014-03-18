<?php
echo("<br>" . __FILE__);
include_once ("SeasonContext.php");

class Season {

	private $seasonContext = null;
	private $seasonName;
	
	public function __construct($context) {
		$this -> seasonContext = $context;
	}

	public function theSeason($context) {
		$this -> seasonContext = $context;
		echo("<br>THE SEASON:");
	}

	public function showSeason() {
		echo("<br>And the season is...");
	}

}
?>
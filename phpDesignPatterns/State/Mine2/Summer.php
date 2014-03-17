<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Fall.php");

class Summer implements Season{
	public function theSeason($context){
		$context->setSeason(new Fall());
		echo("SUMMER!");
	}
}
?>
<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Spring.php");

class Winter implements Season{
	public function theSeason($context){
		echo("<br>set season winter");
		$context->setSeason(new Spring());
		echo("WINTER!");
	}
}
?>
<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Summer.php");

class Spring implements Season{
	public function theSeason($context){
		$context->setSeason(new Summer());
		echo("SPRING!");
	}
}
?>
<?php
echo("<br>".__FILE__);
include_once("Season.php");
include_once("Winter.php");

class Fall implements Season{
	public function theSeason($context){
		$context->setSeason(new Winter());
		echo("FALL!");
	}
}
?>
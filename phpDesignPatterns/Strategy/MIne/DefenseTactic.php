<?php
include_once ("FootballStrategy.php");

class DefenseTactic {
	public function adhereTacticToTeam($team) {
		echo("<br>Strategy:" . $team . "will be using DEFENSE strategy.");
	}

}
?>
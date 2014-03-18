<?php
include_once ("FootballStrategy.php");

class AttackTactic {
	public function adhereTacticToTeam($team) {
		echo("<br>Strategy:" . $team . "will be using OFFENSE strategy.");
	}

}
?>
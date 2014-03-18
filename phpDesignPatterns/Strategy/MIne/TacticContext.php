<?php
include_once ("FootballStrategy.php");

class TacticContext {
	private $footballStrategy;

	public function selectTacticForTeam($team) {
		$this -> footballStrategy -> adhereTacticToTeam($team);
	}

	public function getStrategy() {
		return $this -> footballStrategy;
	}

	public function setStrategy($strategy) {
		$this -> footballStrategy = $strategy;
	}

}
?>
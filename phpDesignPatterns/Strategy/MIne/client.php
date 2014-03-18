<?php
include_once ("TacticContext.php");
include_once ("FootballStrategy.php");
include_once ("AttackTactic.php");
include_once ("DefenseTactic.php");

$team1 = "Barcelona";
$team2 = "Real Madrid";

$tacticContext = new TacticContext();

$attackTactic = new AttackTactic();
$tacticContext -> setStrategy($attackTactic);
$tacticContext -> selectTacticForTeam($team1);

$defenseTactic = new DefenseTactic();
$tacticContext -> setStrategy($defenseTactic);
$tacticContext -> selectTacticForTeam($team2);
?>
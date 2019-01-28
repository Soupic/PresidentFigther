<?php
require 'autoload.php';

use controller\President;

$macron = new President("Emmanuel", "Macron", "France", 65, 25);
$trump = new President("Donald", "Trump", "Etats Unis", 80, 8);
$poutine = new President("Vladimir", "Poutine", "Russie", 90, 17);

$playerOne = new Player("Michel", $macron);
$playerTwo = new Player("Pierre Emmanuel", $trump);

$persidentFighter = new PresidentFighter($playerOne, $playerTwo);


<?php
require 'autoload.php';

$playerOne = new Player("Michel");
$playerTwo = new Player("Pierre Emmanuel");

$persidentFighter = new PresidentFigther($playerOne, $playerTwo);


<?php
require 'autoload.php';
// On appel toutes les classes que l'on à besoin
use Controller\President;
use Controller\Player;
use Controller\PresidentFighter;
use View\PresidentFighterView;
use Http\SimpleRequestParser;


$simpleRequestParser = new SimpleRequestParser();
$action = $simpleRequestParser->getAction();
// Instanciation des différents présidents
// Odres des propriétées:
// Prénom, Nom, Pays, Vie, Force
$macron = new President("Emmanuel", "Macron", "France", 80, rand(5, 25));
$trump = new President("Donald", "Trump", "Etats Unis", 80, rand(5, 25));
$poutine = new President("Vladimir", "Poutine", "Russie", 90, rand(8, 27));

// Appel de la connection à la base de donnée
$persidentFighterProvider = new PredisentFighterProvider(new \PDO(
    'mysql:host=localhost;dbname=presidentFighter;charset=utf8',
    "root",
    "dawan"
));

// Instanciation du player
$playerOne = new Player("Michel", $trump);
$playerTwo = new Player("Pierre Emmanuel", $macron);

// Démarrage du jeu
$persidentFighter = new PresidentFighter($playerOne, $playerTwo, $persidentFighterProvider);


// Début du jeu
// La fonction retourne le gagnant
// On récupère la valeur définit dans le tableau action
// pour la définir comme fonction de notre objet
// $winner = $persidentFighter->{$action["method"]}();
// Appel la fonction fourni en premier argument
$data = call_user_func([$persidentFighter, $action['method']], $action['arg']);

$persidentFighterView = new PresidentFighterView();
$persidentFighterView->display($action['template'],$data);

// echo WinnerView::displayWinner($data);
// echo("<pre>");
// var_dump($winner);
// echo "</pre>";
<?php

namespace Controller;

class PresidentFighter
{
    private $playerOne;

    private $playerTwo;

    private $round = 0;

    private $message;

    private $fightResult;

    public function __construct($playerOne, $playerTwo)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
    }

    public function start()
    {
        // On récupère les présidents de joueurs
        $presidentPlayerOne = $this->playerOne->getPresident();
        $presidentPlayerTwo = $this->playerTwo->getPresident();
        // On récupère le résultat de la méthode attack
        $winnerFight = $this->attack($presidentPlayerOne, $presidentPlayerTwo);
        
        return $this->winnerIs($winnerFight);
    }

    private function attack($presidentPlayerOne, $presidentPlayerTwo)
    {
        // On récupère la vie de base des président
        $lifePresidentOne = $presidentPlayerOne->getLife();
        $lifePresidentTwo = $presidentPlayerTwo->getLife();


        // A tour de role les présidents ce tape, jusqu'a ce que l'un des deux soit à 0 PV   
        // vie - force
        // La boucle continuera si les deux personnages on encore de la vie
        while (($lifePresidentOne > 0) && ($lifePresidentTwo > 0)) {
            $lifePresidentTwo = $lifePresidentTwo - $presidentPlayerOne->getStrength();
            $lifePresidentOne = $lifePresidentOne - $presidentPlayerTwo->getStrength();
            $presidentPlayerOne->setLife($lifePresidentOne);
            $presidentPlayerTwo->setLife($lifePresidentTwo);
        }
        // On vérifie qui à le plus de vie à la fin et on stock le résultat
        if ($lifePresidentOne <= 0) {
            $winnerFight = $presidentPlayerTwo;
        } elseif ($lifePresidentTwo <= 0) {
            $winnerFight = $presidentPlayerOne;
        }
        
        // On retourne le gagnant du combat
        return $winnerFight;
    }

    /**
     * Retourne le joureur gagnant
     *
     * @param objet $winnerFight
     * @return objet
     */
    private function winnerIs($winnerFight)
    {
        $winnerLastName = $winnerFight->getLastName();
        if ($winnerLastName === $this->playerOne->getPresident()->getLastName()) {
            $winner = $this->playerOne;
        } else {
            $winner = $this->playerTwo;
        }

        return $winner;
    }
}
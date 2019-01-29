<?php

namespace View;

class WinnerView
{
    public static function displayWinner($winner)
    {
        $result = '';

        if($winner !== null){
            $playerName = "<p>The Winner Is : " . $winner->getName() . "</p>";
            $presidentName = "<p>Avec : " . $winner->getPresident()->getFirstName() . " " . $winner->getPresident()->getLastName() . "</p>";
            $result = "<div>" . $playerName . $presidentName . "</div>";
        } else {
            $result = "<div> Match Nul !</div>";
        }

        return $result;
    }
}
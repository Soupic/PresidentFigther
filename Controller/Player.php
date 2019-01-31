<?php

namespace Controller;

class Player
{

    /**
     * Nom du joueur
     *
     * @var string
     */
    private $name;

    /**
     * Président choisi par le joueur
     *
     * @var Objet President
     */
    private $president;

    /**
     * Fonction construc de l'objet
     *
     * @param string $name
     * @param Objet $president
     */
    public function __construct($name, $president)
    {
        $this->name = $name;
        $this->president = $president;
    }

    /**
     * Retourne le nom du joueur
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Retourne le président choisi par le joueur
     *
     * @return Objet
     */
    public function getPresident()
    {
        return $this->president;
    }

}
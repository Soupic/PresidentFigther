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
     * @var President
     */
    private $president;

    /**
     * Fonction construc de l'objet
     *
     * @param string $name
     * @param President $president
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
     * @return President
     */
    public function getPresident()
    {
        return $this->president;
    }

}
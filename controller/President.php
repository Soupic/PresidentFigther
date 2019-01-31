<?php

namespace controller;

class President
{

    private $firstName;

    private $lastName;

    private $country;

    private $life;

    private $strength;

    public function __construct(
        $firstName,
        $lastName,
        $country,
        $life,
        $strength
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->country = $country;
        $this->life = $life;
        $this->strength = $strength;
    }

    /**
     * Retourne le prénom du président
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Retourne la nom de famille du président
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * retourne le pays du président
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Retourne la vie du président
     *
     * @return integer
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Undocumented function
     *
     * @param integer $life
     */
    public function setLife(int $life)
    {
        $this->life = $life;
    }

    /**
     * Retourne les points d'attaque du président
     *
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Retourne le nom complet du président
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }

}
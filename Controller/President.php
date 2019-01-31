<?php

namespace Controller;

class President
{

    /**
     * Prénom du président
     *
     * @var string
     */
    private $firstName;

    /**
     * Nom de famille du président
     *
     * @var string
     */
    private $lastName;

    /**
     * Pays du président
     *
     * @var string
     */
    private $country;

    /**
     * Vie du président
     *
     * @var integer
     */
    private $life;

    /**
     * Force du président
     *
     * @var integer
     */
    private $strength;

    /**
     * Fonction construct du président
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $country
     * @param integer $life
     * @param integer $strength
     */
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
     * Retourne les points d'attaque du président
     *
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Met à jour la vie du président
     *
     * @param integer $life
     *
     * @return integer
     */
    public function setLife($life)
    {
        $this->life = $life;
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
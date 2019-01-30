<?php
namespace Controller;

class PresidentFighterProvider
{
    private $dbh;

    public function __construct($connection)
    {
        $this->dbh = $connection;
    }

    public function findAll()
    {
        return $this->dbh
            ->query("SELECT lastName FROM President")
            ->fetchAll();
    }
}
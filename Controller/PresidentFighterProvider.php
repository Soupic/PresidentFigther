<?php
namespace Controller;

class PresidentFighterProvider
{
    private $dbh;

    public function __construct(\PDO $connection)
    {
        $this->dbh = $connection;
    }

    public function findAll()
    {
        return $this->dbh
            ->query('SELECT lastName FROM President')
            ->fetchAll();
    }

    public function addNewPresident(
        string $firstName,
        string $lastName,
        string $country,
        int $life,
        int $strength
    ){
            $stmt = $this->dbh
            ->prepare('INSERT MAUVAIS SQL INTO President (firstName, lastName, country, life, strength)
             VALUES (:firstName, :lastName, :country, :life, :strength)');
            $stmt->bindParam(':firstName', $firstName, \PDO::PARAM_STR);
            $stmt->bindParam(':lastName', $lastName, \PDO::PARAM_STR);
            $stmt->bindParam(':country', $country, \PDO::PARAM_STR);
            $stmt->bindParam(':life', $life, \PDO::PARAM_INT);
            $stmt->bindParam(':strength', $strength, \PDO::PARAM_INT);
            $success = $stmt->execute();

            if (!$success) {
                var_dump($this->dbh->errorInfo());
            }

    }
}
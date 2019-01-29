<?php
namespace Http;

class SimpleRequestParser
{
    /**
     * Création d'un constante
     * assossiant une URL à une méthode d'un controller
     */
    const AVAILABLE_QUERIES = [
    // Page d'accueil
        // "/" => [
        //     "class" => "PresidentFighter",
        //     "method" => "acceuil",
        //     "template" => "acceuil",
        // ],
        "/" => [
            "class" => "PresidentFighter",
            "method" => "start",
            "template" => "game",
        ],
        "/newPresisent" => [
            "class" => "PresidentFighter",
            "method" => "newPresident",
            "template" => "newForm",
        ],
        "/editPresident" => [],
        "/deletePresident" => [],
    ];

    public function getAction()
    {
        // On récuprère le paramètre passé en URL
        if (isset($_GET["q"])) {
            $query = $_GET["q"];
        } else {
            $query = "/";
        }

        foreach (self::AVAILABLE_QUERIES as $prefix => $queryConfig) {
            if (strpos($query, $prefix) === 0) {
                if (isset($_GET["q"])) {
                    // On fusionne dans un tableau assiciatif le contenu de $_GET
                    return array_merge($queryConfig, ["arg" => $_GET['arg']]);
                } else {
                    return array_merge($queryConfig, ["arg" => ""]);
                }
            }
        }
        return 'Tu t\'est planté mec "404" ! (voix d\'Eddie Murphy)';
    }
}
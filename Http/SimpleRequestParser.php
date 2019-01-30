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
        "newPresident" => [
            "class" => "PresidentFighter",
            "method" => "newPresident",
            "template" => "newForm",
        ],
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
            // var_dump("Strpos ",strpos($prefix, $query));
            if (strpos($prefix, $query) === 0) {
                if (isset($_GET["arg"])) {
                    // var_dup($_GET["q"]);
                    // On fusionne dans un tableau assiciatif le contenu de $_GET
                    return array_merge($queryConfig, ["arg" => $_GET['arg']]);
                } else {
                    // var_dump($query);
                    return array_merge($queryConfig, ["arg" => ""]);
                }
            }
        }
        return 'Tu t\'est planté mec "404" ! (voix d\'Eddie Murphy)';
    }
}
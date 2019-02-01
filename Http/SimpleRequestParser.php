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
        "showPresident" => [
            "class" => "PresidentFighter",
            "method" => "showPresident",
            "template" => "show",
        ],
    ];

    public function getAction()
    {
        // On récuprère le paramètre passé en URL
        // "/" est la valeur par défaut si $_GET["q"] est null
        $query = $_GET["q"] ?? "/";

        foreach (self::AVAILABLE_QUERIES as $prefix => $queryConfig) {
            // var_dump("Strpos ",strpos($prefix, $query));
            if (strpos($prefix, $query) === 0) {
                if (isset($_GET["arg"])) {
                    // On fusionne dans un tableau associatif le contenu de $_GET
                    return array_merge($queryConfig, ["arg" => $_GET['arg']]);
                } else {
                    return array_merge($queryConfig, ["arg" => ""]);
                }
            }
        }
        return [
            "class" => "PresidentFighter",
            "method" => "notFound",
            "template" => "notFound",
        ];
    }
}
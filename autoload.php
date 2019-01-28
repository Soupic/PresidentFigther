<?php

// Utilisation de la fonction prédéfini par php
spl_autoload_register(function($className){
    // on récupère le chemin fourni par le namespace
    $pathFragments = explode('\\', $className);
    // var_dump($pathFragments);
   $path = implode(DIRECTORY_SEPARATOR, $pathFragments) . ".php";
   var_dump($path);
   require $path; 
});
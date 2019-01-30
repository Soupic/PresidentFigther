<?php

namespace View;

class PresidentFighterView
{
    public function display($template, $data)
    {
        var_dump($data);
       extract($data);
       include __DIR__ . '/../templates/' . $template . '.phtml';
    }
}
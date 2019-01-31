<?php

namespace View;

class PresidentFighterView
{

    public function display($template, $data)
    {
        extract($data);
        include __DIR__ . '/../templates/' . $template . '.phtml';
    }
}
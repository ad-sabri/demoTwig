<?php

namespace LocalUser\DemoTwig\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class DefaultController {

    private $twig;

    public function __construct()
    {   
        $loader = new FilesystemLoader(__DIR__ . '/../Views');
        $this->twig = new Environment($loader);
    }

    public function home() {
        return $this->twig->render('Default/home.html.twig');
    }

    public function contact() {
        return 'Contact ';
    }
}
<?php

namespace App\Controllers;

class HomeController
{

  /*  public function function1()
    {
        echo('function1');
    }*/

    public function TwigTest()
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('index.html.twig');
        //dump($twigtest);
    }
}

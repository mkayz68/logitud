<?php


namespace App\Controllers;
use Symfony\Component\HttpFoundation\Request;

class EpreuvesController
{
    public function AddEpreuve(Request $request)
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('epreuves.html.twig');

    }



}
<?php


namespace App\Controllers;
use App\Models\DataBase;
use App\Models\EpreuveModel;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class EpreuvesController extends DataBase
{
    public function AddEpreuve(Request $request)
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('epreuves.html.twig');

    }

    public function add(Request $request) {
        dump($request);
        $compet = $request->get('lieu');
        echo $compet;

        $epreuve = new EpreuveModel();
        $epreuve->create($lieu);

        return new RedirectResponse('/Participant');

    }



}
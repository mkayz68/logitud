<?php

namespace App\Controllers;

use App\Models\DataBase;
use App\Models\EpreuveModel;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EpreuvesController extends DataBase
{


    // methode GET
//    public function AddEpreuve()
//    {
//        $twigtest = new ConfigTwig();
//        return new Response($twigtest->twig->render('epreuves.html.twig'));
//    }
    public function addEpreuve()
    {
        $twigtest = new ConfigTwig();
        return new Response($twigtest->twig->render('epreuves.html.twig'));
    }

    // METHODE POST
    public function add(Request $request)
    {
        $bdd = [
            $request->get('lieu'),
            $request->get('date')
        ];
        dd($request, $bdd);

        $epreuve = new EpreuveModel();
        $epreuve->add($bdd);



        //return new RedirectResponse('/Epreuve');
    }




}
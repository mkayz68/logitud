<?php

namespace App\Controllers;

use App\Models\DataBase;
use App\Models\ParticipantModel;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Twig\Error\LoaderError;
//use Twig\Error\RuntimeError;
//use Twig\Error\SyntaxError;

class ParticipantController extends DataBase {


    public function addParticipant()
    {
        $twigtest = new ConfigTwig();
        //return new RedirectResponse('/Participant');

        return new Response($twigtest->twig->render('participant.html.twig'));

    }

    public function add(Request $request) {

     $bdd = [
            // sens de la bdd
            $request->get('nom'),
            $request->get('prenom'),
            $request->get('dateDeNaiss'),
            $request->get('mail'),
            null, 1,1
        ];
        //dump($request, $bdd);
        //die();

        /*$participant = new ParticipantModel();
        $participant->create($params);*/

        $participant = new ParticipantModel();
        $participant->add($request);
        //dump($participant->add($request));

        //return new RedirectResponse('/Participant');
    }
}
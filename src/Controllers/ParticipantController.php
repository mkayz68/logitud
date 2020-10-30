<?php

namespace App\Controllers;


use App\Models\DataBase;
use App\Models\ParticipantModel;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ParticipantController extends DataBase {


    public function addParticipant()
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('participant.html.twig');
    }

    public function fetchParticipant(Request $request) {
       dump($request);
       $nom = $request->get('nom');
       //$prenom = $request->get('prenom');
       echo $nom;
       //echo $prenom;

       $participant = new ParticipantModel();
       $participant->create($nom);

       return new RedirectResponse('/Participant');

    }

    public function add(Request $request) {
        $bdd = $request->get('nom');
        echo $bdd;

        $participant = new ParticipantModel();
        $participant->add($request);

        return new RedirectResponse('/Participant');
    }

}
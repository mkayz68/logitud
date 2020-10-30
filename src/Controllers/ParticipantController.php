<?php

namespace App\Controllers;

use App\Models\DataBase;
use App\Models\ParticipantModel;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ParticipantController extends DataBase {


    public function addParticipant()
    {
        $twigtest = new ConfigTwig();
        //return new RedirectResponse('/Participant');
        return new Response($twigtest->twig->render('participant.html.twig'));

    }
    /** @noinspection PhpUnreachableStatementInspection */
    public function add(Request $request) {

        $bdd = [
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'dateDeNaiss' => $request->get('dateDeNaiss'),
            'mail' => $request->get('mail'),
            //'photo' => $request->get('photo'),
            'profil_id' => $request->get('profil_id'),
            'categorie_id' => $request->get('categorie_id')
        ];
        dd($request, $bdd);
        die();

        /*$participant = new ParticipantModel();
        $participant->create($params);*/

        $participant = new ParticipantModel();
        $participant->add($bdd);

        return new RedirectResponse('/Participant');
    }
}
<?php

namespace App\Controllers;


class ParticipantController {

    public function addParticipant()
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('participant.html.twig');

    }

    public function fetchParticipant($request) {
        dd($request);
    }
}
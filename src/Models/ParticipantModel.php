<?php

namespace App\Models;

use App\Entity\Participant;
use PDO;
use Symfony\Component\HttpFoundation\Request;


/**
 * @property PDO|null pdo
 */
class ParticipantModel extends DataBase {

    public function __construct()
    {
        $this->pdo = parent::getPdo();
    }

    /*public function addParticipant(Participant $participant)
    {
        $req = $this->pdo->prepare("INSERT INTO particpant(nom, prenom, dateDeNaiss, mail, photo, profil_id, categorie_id) VALUE (?,?,?,?,?,?,?)");
        return $req->execute(array(

            $participant->getNom(),
            $participant->getPrenom(),
            $participant->getDateDeNaiss(),
            $participant->getMail(),
            $participant->getPhoto(),
            $participant->getProfilId(),
            $participant->getCategorieId(),
        ));
    }*/

    /*public function create(Request $request)
    {
        // enregister $nom dans la table partie
        $req = "INSERT INTO participant(nom, prenom, dateDeNaiss, mail, photo, profil_id, categorie_id) VALUE(?,?,?,?,?,?,?)";
        $st = $this->pdo->prepare($req);
        $st->execute([$request]);

    }*/

    /*public function create($nom)
    {
        // enregister $nom dans la table partie
        $req = "INSERT INTO parti(nom) VALUE(?)";
        $st = $this->pdo->prepare($req);
        $st->execute([$nom]);
    }*/


    public function add(Request $request)
    {
        $req = "INSERT INTO participant(nom, prenom, dateDeNaiss, mail, photo, profil_id, categorie_id) 
                VALUES (:nom, :prenom, :dateDeNaiss, :mail, :photo, :profil_id , :categorie_id)";
        $st = $this->pdo->prepare($req);
        $st->execute([$request]);

    }
}
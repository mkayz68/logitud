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


//    public function add( Request $request)
//    {
//        $req = "INSERT INTO participant(nom, prenom, dateDeNaiss, mail, photo, profil_id, categorie_id)
//                VALUES (?, ?, ?, ?, ?, ?, ?)";
//        $st = $this->pdo->prepare($req);
//        $st->execute($request);
//    }

    public function add(array $bdd)
   {
       $req = "INSERT INTO participant(nom, prenom, dateDeNaiss, mail, photo, profil_id, categorie_id)
              VALUES (?, ?, ?, ?, ?, ?, ?)";
      $st = $this->pdo->prepare($req);
       $st->execute($bdd);
   }
}
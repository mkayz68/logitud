<?php

namespace App\Models;

use Symfony\Component\HttpFoundation\Request;
use PDO;


// insérer une épruve
// recupérer une épreuve
// supprimer une épreuve

/**
 * @property PDO|null pdo
 */
class EpreuveModel extends DataBase {


    public function __construct()
    {
        $this->pdo = parent::getPdo();
    }

    public function add(array $bdd)
    {
        $req = "INSERT INTO epreuve(lieu, date)
            VALUES (?, ?)";
        $st = $this->pdo->prepare($req);
        $st->execute($bdd);
    }

}
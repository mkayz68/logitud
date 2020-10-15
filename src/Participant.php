<?php


namespace App;


class Participant
{
    private $nom;
    private $profil;

    /**
     * @return mixed
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param mixed $profil
     */
    public function setProfil($profil)
    {
        if($profil === "ASVP" || $profil === "OPEN" || $profil === "Grades")
        {
            $this->profil = $profil;
        }
        else{
            throw new \InvalidArgumentException('categorie incorrecte');
        }
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        if(!preg_match("/^[a-zA-Z]+$/", $nom)){

            throw new \InvalidArgumentException('containe number');
        }
        $this->nom = $nom;
    }

}
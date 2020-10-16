<?php

//    -id:int
//    -nom:string
//    -prenom:string
//    -dateDeNaiss:date
//    -mail:string
//    -photo:string
//    +addParticipant()
//    +updateParticipant()
//    +deleteParticipant()


namespace App;


class Participant
{
    private $id;
    private $nom;
    private $prenom;
    private $dateDeNaiss;
    private $mail;
    private $photo;
    private $profil;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        if(!preg_match("/^[a-zA-Z]+$/", $prenom)){

            throw new \InvalidArgumentException('containe number');
        }
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateDeNaiss()
    {
        return $this->dateDeNaiss;
    }

    /**
     * @param mixed $dateDeNaiss
     */
    public function setDateDeNaiss($dateDeNaiss)
    {
        $this->dateDeNaiss = $dateDeNaiss;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

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







}
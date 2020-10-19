<?php

//    -id:int
//    -numPassage:int
//    -tempsPassage:time

namespace App;


class Passage
{
        private $id;
        private $numPassage;
        private $tempsPassage;

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
    public function getNumPassage()
    {
        return $this->numPassage;
    }

    /**
     * @param mixed $numPassage
     */
    public function setNumPassage($numPassage)
    {
        if($numPassage == 2 )
        {
            //throw new \InvalidArgumentException( 'passage'. $nb);
            $this->numPassage = $numPassage;
        }elseif ($numPassage == 1){
            //throw new \InvalidArgumentException( 'passage'. $nb);
            $this->numPassage = $numPassage;
        }
        else{
            throw new \InvalidArgumentException( 'passage'. $numPassage);
        }
        // $this->nb = $nb;
    }
        //$this->numPassage = $numPassage;


    /**
     * @return mixed
     */
    public function getTempsPassage()
    {
        return $this->tempsPassage;
    }

    /**
     * @param mixed $tempsPassage
     */
    public function setTempsPassage($tempsPassage)
    {
        $this->tempsPassage = $tempsPassage;
    }


}
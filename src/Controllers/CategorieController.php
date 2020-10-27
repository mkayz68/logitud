<?php


namespace App\Controllers;


class CategorieController
{
    public function addCategorie() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('categorie.html.twig');
    }
}
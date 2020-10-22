<?php
namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ConfigTwig
{
    public $loader;
    public $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('src/Views/Templates');
        $this->twig = new Environment($this->loader, []);
        return $this->twig;
    }
}
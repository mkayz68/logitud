<?php

namespace App\Models;

use PDO;
use PDOException;

class DataBase
{
    private const OPTIONS = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    protected static $_pdo = null;

    public static function getPdo()
    {
        if (is_null(self::$_pdo)) {
            try {
                self::$_pdo  = new PDO('mysql:host=localhost;dbname=logitud;', 'root', 'root');
            } catch (PDOException $e) {
                die('Erreur : '.$e->getMessage());
            }
        }
        return self::$_pdo;
    }
}






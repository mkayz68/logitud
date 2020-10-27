<?php

namespace App\Models;

use PDO;
use PDOException;

class DataBase
{
    private $servname;
    private $username;
    private $password;
    private $dbname;
    private $charset;


    public function connect()
    {
        $this->servname = 'localhost';
        $this->username = 'root';
        $this->password = 'root';
        $this->dbname = 'logitud';
        $this->charset = 'utf8mb4';

        try {
            $dsn = "mysql:host=" . $this->servname . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            return new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
/*try {
    $db = new PDO('mysql:host=localhost;dbname=logitud', 'root', 'root');
} catch (PDOException $e) {
    echo $e->getMessage();
}*/





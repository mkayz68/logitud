<?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=logitud', 'root', 'root');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }





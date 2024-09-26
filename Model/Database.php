<?php

namespace Model;

class Database{

    private $connnexion;

    public function dbConnect(); void {
        $pdo = new \PDO (dsn: 'mysql:host=localhost;dbname=todo_list',username:'root',
        password: '');
    }
}
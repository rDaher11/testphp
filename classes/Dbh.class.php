<?php

class Dbh{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "learnsql";

    protected function connect(){
        # DSN data source name 
        $dsn = 'mysql:host='. $this->servername .';dbname'. $this->dbName ;
        $pdo = new PDO($dsn,$this->username,$this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    }
}
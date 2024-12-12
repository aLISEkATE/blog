<?php

class Database {

    public $pdo;

    public function __construct(){

        $dsn= "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_alise;charset=utf8mb4;";

        $this->pdo = new PDO($dsn);
        //PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC
        $this->pdo->setAttribute(19,2);
    }

    public function query($sql){

        $statement= $this->pdo->prepare($sql);
        $statement->execute();
        return $statement;
}


}


?>
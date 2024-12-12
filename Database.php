<?php

class Database {

    public $pdo;

    public function __construct($config){
        //data source nam
        $dsn="mysql:" . http_build_query($config,"",";");
        // "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_alise;charset=utf8mb4;";
        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(19,2); //PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC
    }

    public function query($sql){

        $statement= $this->pdo->prepare($sql);
        $statement->execute();
        return $statement;
}


}


?>
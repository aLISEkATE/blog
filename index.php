<?php
require "functions.php";
echo "hiiiiiiiiiiiiiii :3 <br>";


//1. database +
//2. savienot PHP ar DB

//Ar PDO pieslegties
//host, lietotajvards, parole, ports, DB nosaukums
// data source name

$dsn= "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_alise;charset=utf8mb4;";
//PHP data obj
$pdo = new PDO($dsn);

// sagatavot statement
$statement= $pdo->prepare("SELECT * FROM posts");
//izpildit vaicajumu
$statement->execute();

$posts=$statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
//API foreach

?>
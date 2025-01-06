<?php

require "functions.php";
require "Database.php";
$config= require("config.php");

echo "<h1>Skibidi toilet</h1><br>";

//merkis: izveidot ierakstu meekletaju
//1. Izveidot html formu ar input, submit pogu.
//2. PHP lietas
//3. Ozveidot vaicajumu uz db


$db= new Database($config["database"]);
    //iegut bloga ierakstus
$posts=$db->query("SELECT * FROM posts")->fetchAll();

    //$comments = $db->query("SELECT * FROM comments")->fetchAll(PDO::FETCH_ASSOC);
    //$user = $db->query("SELECT * FROM users WHERE usetId = $id")->fetch(PDO::FETCH_ASSOC);
    //$db->query("INSERT INTO posts ...");
//meklesanas forma
//POST- maina datus
//GET- nemaina, tiaki jaiegust dati
if(isset($_GET["search_query"])&&$_GET["search_query"]!=""){
//meklesanas logika
dd("SELECT * FROM posts WHERE content LIKE '" . $_GET['search_query'] . "';")
$posts=$db->query("SELECT * FROM posts WHERE content LIKE " . $_GET["search_query"])->fetchAll();
};

echo"<form>";
echo "<input name='search_query'/>";
echo "<button>Meklēt</button>";
echo"</form>";
dd($posts);


//API foreach

?>
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


    //$comments = $db->query("SELECT * FROM comments")->fetchAll(PDO::FETCH_ASSOC);
    //$user = $db->query("SELECT * FROM users WHERE usetId = $id")->fetch(PDO::FETCH_ASSOC);
    //$db->query("INSERT INTO posts ...");
//meklesanas forma
//POST- maina datus
//GET- nemaina, tiaki jaiegust dati

$sql = "SELECT * FROM categories";
$params= [];
if(isset($_GET["search_query"])&&$_GET["search_query"]!=""){
//meklesanas logik
$search_query= "%" . $_GET["search_query"] . "%";
$sql .=" WHERE category_name LIKE :search_query";
$params=["search_query" => $search_query];
};

$posts = $db->query($sql, $params)->fetchAll();

echo"<form>";
echo "<input name='search_query'/>";
echo "<button>Meklēt</button>";
echo"</form>";

echo "<ul>";
foreach($posts as $x){ 
echo"<li>" . $x["category_name"] . "</li>";
} 
echo "</ul>";

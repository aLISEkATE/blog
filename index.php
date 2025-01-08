<?php

require "functions.php";
require "Database.php";

$config= require("config.php");

//echo "<h1>Blogs</h1><br>";


$db= new Database($config["database"]);
    //iegut bloga ierakstus


    //$comments = $db->query("SELECT * FROM comments")->fetchAll(PDO::FETCH_ASSOC);
    //$user = $db->query("SELECT * FROM users WHERE usetId = $id")->fetch(PDO::FETCH_ASSOC);
    //$db->query("INSERT INTO posts ...");
//meklesanas forma
//POST- maina datus
//GET- nemaina, tiaki jaiegust dati

$sql = "SELECT * FROM posts";
$params= [];
if(isset($_GET["search_query"])&&$_GET["search_query"]!=""){
//meklesanas logik
$search_query= "%" . $_GET["search_query"] . "%";
$sql .=" WHERE content LIKE :search_query";
$params=["search_query" => $search_query];
};

$posts = $db->query($sql, $params)->fetchAll();

require "views/index.view.php";

?>
<?php
require "functions.php";
require "Database.php";
$config= require("config.php");

echo "hiiiiiiiiiiiiiii :3 <br>";


//1. database +
//2. savienot PHP ar DB

    //Ar PDO pieslegties
    //host, lietotajvards, parole, ports, DB nosaukums
    // data source name

$db= new Database($config["database"]);
    //iegut bloga ierakstus
$posts=$db->query("SELECT * FROM posts")->fetchAll();

    //$comments = $db->query("SELECT * FROM comments")->fetchAll(PDO::FETCH_ASSOC);
    //$user = $db->query("SELECT * FROM users WHERE usetId = $id")->fetch(PDO::FETCH_ASSOC);
    //$db->query("INSERT INTO posts ...");

dd($posts);

echo "<ol>";
foreach($data as $x){ 
echo"<li>" . $x["content"] . "</li>";
} 
echo "</ol>";
//API foreach

?>
<?php
require "functions.php";
require "Database.php";
echo "hiiiiiiiiiiiiiii :3 <br>";


//1. database +
//2. savienot PHP ar DB

//Ar PDO pieslegties
//host, lietotajvards, parole, ports, DB nosaukums
// data source name

$db= new Database();
//iegut bloga ierakstus
$posts=$db->query("SELECT * FROM posts");
//  $comments = $db->query("SELECT * FROM comments");
//  $user = $db->query("SELECT * FROM users WHERE usetId = $id");
dd($posts);
//API foreach

?>
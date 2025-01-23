<?php 
require "Validator.php";

if (!isset($_GET["id"]) || $_GET["id"] == ""){
  redirectIfNotFound();
}
  $sql ="SELECT * FROM posts WHERE id = :id";
    $params= ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
if(!$post){
    redirectIfNotFound(); 
}

$errors = [];


if(!Validator::number($_GET["id"])){
  $errors["id"] = "ID nav pareizs";
}
if (empty($errors)) {
  $sql = "  
    DELETE FROM posts
    WHERE id = :id;";
    $params = ["id" => $_GET["id"]];
  $db->query($sql, $params); 
  header("Location: /"); exit();
  }
  ;


$pageTitle = "DELETE";?>

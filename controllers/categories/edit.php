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

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!Validator::string($_POST["category_name"],max: 50)){
  $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
}
if (empty($errors)) {
  $sql = "  
    UPDATE categories
    SET category_name = :category_name
    WHERE id = :id;";
    $params = [
      "category_name" => $_POST["category_name"],
      "id" => $_POST["id"]
  ];
 

  $db->query($sql, $params); 
  header("Location: /categories"); exit();}
   }{ 
};


$pageTitle = "Izveidot jaunu ierakstu";
require "views/categories/edit.view.php"; ?>

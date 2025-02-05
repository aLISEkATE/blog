<?php 
require "Validator.php";
$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params)->fetchAll();

$errors = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!Validator::string($_POST["content"],max: 50)){
  $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm, Izvēlaties kategoriju";
}
if (empty($errors)) {
  $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
  $params = ["content" => $_POST["content"],"category_id" => $_POST["category_id"]];
  $db->query($sql, $params);
  header("Location: /"); exit();}
   }{ 
};




$pageTitle = "Izveidot jaunu ierakstu";
require "views/posts/create.view.php"; ?>

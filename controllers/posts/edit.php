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
$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params)->fetchAll();
$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!Validator::string($_POST["content"],max: 50)){
  $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
}
if (empty($errors)) {
  $sql = "  
    UPDATE posts
    SET content = :content,
    category_id = :category_id
    WHERE id = :id;";
    $params = [
      "content" => $_POST["content"],
      "category_id" => $_POST["category_id"],
      "id" => $_POST["id"]
  ];
 

  $db->query($sql, $params); 
  header("Location: /"); exit();}
   }{ 
};


$pageTitle = "Izveidot jaunu ierakstu";
require "views/posts/edit.view.php"; ?>

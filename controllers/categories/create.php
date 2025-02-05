<?php 
require "Validator.php";

$errors = [];
$categories= [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!Validator::string($_POST["category_name"],max: 50)){
  $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
}
if (empty($errors)) {
 $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
  $params = ["category_name" => $_POST["category_name"]];

  $db->query($sql, $params);
  header("Location: /categories"); exit();}
   }{ 
};
$pageTitle = "Izveidot jaunu ierakstu";
require "views/categories/create.view.php"; ?>

<?php
if (!isset($_GET["id"]) || $_GET["id"] == ""){
  redirectIfNotFound();
}
  $sql ="SELECT * FROM posts WHERE id = :id";
    $params= ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
if(!$post){
    redirectIfNotFound(); 
}
if (!isset($_GET["id"]) || $_GET["id"] == ""){
  redirectIfNotFound();
}
  $sql ="SELECT posts.*, categories.category_name FROM posts
LEFT JOIN categories
ON posts.category_id = categories.id
WHERE posts.id = 1;";
 $params= [];
    $category= $db->query($sql,$params)->fetch();
if(!$category){
    redirectIfNotFound(); 
}

//help
require "views/posts/show.view.php"
?>
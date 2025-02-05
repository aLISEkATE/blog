<?php
if (!isset($_GET["id"]) || $_GET["id"] == ""){
  redirectIfNotFound();
}
  $sql ="SELECT posts.*, categories.category_name FROM posts
LEFT JOIN categories
ON posts.category_id = categories.id
WHERE posts.id = 1;";

    $post = $db->query($sql)->fetch();
if(!$post){
    redirectIfNotFound(); 
}

dd($post);

require "views/categories/show.view.php"
?>
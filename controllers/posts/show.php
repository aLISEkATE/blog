<?php
if (isset($_GET["id"]) && $_GET["id"] != ""){
    $sql ="SELECT * FROM posts WHERE id = :id";
    $params= ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
    dd($post);
}

require "views/posts/show.view.php"
?>
<?php

$sql = "SELECT * FROM posts";
$params = [];

if (isset($_GET["search"]) AND $_GET["search"] != ""){
  // search logic
  $search = "%" . $_GET["search"] . "%";
  $sql .= " WHERE content LIKE :search;";
  $params = ["search" => $search];
}

$posts = $db->query($sql, $params)->fetchAll();

$pageTitle = "Blogi";
require "views/posts/index.view.php";







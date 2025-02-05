<?php

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search"]) AND $_GET["search"] != ""){
  // search logic
  $search = "%" . $_GET["search"] . "%";
  $sql .= " WHERE category_name LIKE :search;";
  $params = ["search" => $search];
}

$posts = $db->query($sql, $params)->fetchAll();

$pageTitle = "Blogi";
require "views/categories/index.view.php";







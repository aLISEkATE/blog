<?php require "views/components/header.php"; ?>
<?php require "views/categories/navbar.php"; ?>
<?= $post["category_name"] ?>
<h1><?= htmlspecialchars($post["category_name"])?></h1>
<a href="edit?id=<?= $post["id"]?>"><li>Edit</a></li>
<a href="delete?id=<?= $post["id"]?>"><li>Delete</a></li>

<?php require "views/components/footer.php"; ?>



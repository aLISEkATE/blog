<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1><?= htmlspecialchars($post["content"])?></h1>
<a href="edit?id=<?= $post["id"]?>"><li>Edit</a></li>
<a href="delete?id=<?= $post["id"]?>"><li>Delete</a></li>

<?php require "views/components/footer.php"; ?>



<?php require "views/components/header.php"; ?>
<?php require "views/categories/navbar.php"; ?>

<h1>Rediģēt</h1>
   
<form method="POST">
<?php if(isset($errors["category_name"])) { ?>
       <p class="error_msg"><?= $errors["category_name"] ?></p>
     <?php } ?>    
<input name="id" type="hidden" value="<?= $_GET['id']  ?? "" ?>"/>
<input name="category_name"  value="<?= $_POST['category_name']  ?? $post["category_name"] ?>"/>
    <button>Edit</button>
</form>

<?php require "views/components/footer.php"; ?>

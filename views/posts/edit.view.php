<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Rediģēt</h1>
   
<form method="POST">
<?php if(isset($errors["content"])) { ?>
       <p class="error_msg"><?= $errors["content"] ?></p>
     <?php } ?>    
<input name="id" type="hidden" value="<?= $_GET['id']  ?? "" ?>"/>
<input name="content"  value="<?= $_POST['content']  ?? $post["content"] ?>"/>
    <button>Edit</button>
</form>

<?php require "views/components/footer.php"; ?>

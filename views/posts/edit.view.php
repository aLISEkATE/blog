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
    <br>
    <select name="category_id">
    <?php foreach($categories as $x) { ?>
    <option  value="<?= $x["id"]?>"><?= htmlspecialchars($x["category_name"]) ?></option>
    <?php } ?>
</select>
</form>

<?php require "views/components/footer.php"; ?>

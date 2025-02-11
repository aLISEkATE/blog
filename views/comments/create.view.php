<?php require "views/components/header.php"; ?>
<?php require "views/categories/navbar.php"; ?>

<h1>Izveido jaunu bloga ierakstu</h1>
<form method="POST">
<label>
<?php if(isset($errors["category_name"])) { ?>
       <p class="error_msg"><?= $errors["category_name"] ?></p>
     <?php } ?>    
<input name="category_name"  value="<?= $_POST['category_name']  ?? "" ?>"/></label>
    <button>Create</button>
</form>



<?php require "views/components/footer.php"; ?>

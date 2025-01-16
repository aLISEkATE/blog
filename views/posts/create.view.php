<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Izveido jaunu bloga ierakstu</h1>
<form method="POST">
<label>
<?php if(isset($errors["content"])) { ?>
       <p class="error_msg"><?= $errors["content"] ?></p>
     <?php } ?>    
<input name="content"  value="<?= $_POST['content']  ?? "" ?>"/></label>
    <button>Search</button>
</form>


<?php require "views/components/footer.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Blogs</h1><br>

<form>
<input name='search_query' value="<?=$_GET["search_query"] ?? ""?>"/>
<button>Meklēt</button>
</form>

<ul>

<?php
foreach($posts as $x){ ?>
    <li> <?= $x["content"]?> </li> 
<?php } ?>

</ul>
</body>
</html>

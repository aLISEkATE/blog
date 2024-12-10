<?php

//Dump and Die
function dd($data){
    echo "<ol>";
    foreach($data as $x){ 
    echo"<li>" . $x["content"] . "</li>";
    } 
    echo "</ol>";
    die();
    }

?>

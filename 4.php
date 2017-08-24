<?php

function listOfFiles ($directory) {
    $list = scandir($directory);
    foreach ($list as $value){
        echo $value." <br>";
    }
}

listOfFiles('/Applications/XAMPP/xamppfiles/htdocs/functions_homework');
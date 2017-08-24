<?php

function findInDerectory ($directory, $word) {
    $arrayOfAllFiles = scandir($directory);
    $i = 0;
    foreach ($arrayOfAllFiles as $value) {
        if (is_int(strpos($value,$word))) {
            echo $value." <br>";
            $i++;
        }
    }
    if ($i == 0) {
        echo "Is not such word in directory -".$directory;
    }
}

findInDerectory('/Applications/XAMPP/xamppfiles/htdocs/functions_homework', '3');
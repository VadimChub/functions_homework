<?php

if (is_uploaded_file($_FILES['image']['tmp_name'][0])){
    $filesQuantity = count($_FILES['image']['tmp_name']);
    foreach ($_FILES['image']['tmp_name'] as $key => $item){
        $tmp_name = $_FILES['image']['tmp_name'][$key];
        $name = basename($_FILES['image']['name'][$key]);
        move_uploaded_file($tmp_name, "gallery/$name");
    }
}

function showDirectoryImages ($directory)
{
    $arrayOfAllFiles = scandir($directory);
    $nameOfDir = basename($directory);
    foreach ($arrayOfAllFiles as $imgs){
        if($imgs == '.' || $imgs == '..'){
            continue;
        }

        else {
            $way = $nameOfDir.'/'.$imgs;
            echo "<p><img src='$way' style = 'width: 200px; height:200px;'></p>";
        }
    }
}

?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="6.php" method="post" enctype="multipart/form-data">
<p><input type="file" name="image[]" multiple></p>
 <p><input type="submit" value="Send file"></p>
</form>

<?php
showDirectoryImages('/Applications/XAMPP/xamppfiles/htdocs/functions_homework/gallery/');
?>

</body>
</html>




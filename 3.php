<?php

if (isset($_POST['content'])) {
    foreach ($_POST['content'] as $key => $value) {
        $arr[$key] = $value;
    }
    $number = $arr['number'];

}

function deleteSmWrds ($string, $n) {
    $arrayOfWords = explode( ' ',$string);
    foreach ($arrayOfWords as $key => $item) {
        $length = strlen($item);
        if ($item{ $length - 1 } === '!' or $item{ $length - 1 } === '.' or $item{ $length - 1 } === ',' or $item{ $length - 1 } === '?') {
            $length = $length - 1;
        }
            if ($length >= $n) {
                unset($arrayOfWords[$key]);
            }
    }
    $arrayOfWords = array_values($arrayOfWords);
    $readyStrig = implode(' ', $arrayOfWords);
return $readyStrig;
}


?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="3.php" method="post">
    <p><label>Enter the length for words should be deleted</label></p>
    <p>
        <input type="number" name="content[number]">
    </p>
    <button type="submit">Delete</button>
</form>

<?php

$str = file_get_contents("3.txt");

if ($number == 0 ) { die;}

$arr = deleteSmWrds($str, $number);

file_put_contents('3.txt',$arr);
?>


</body>
</html>

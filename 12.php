<?php

if (isset($_POST['content'])) {
    foreach ($_POST['content'] as $key => $value) {
        $arr[$key] = $value;
    }

    $text = $arr['string'];
}

function txtReverse ($string) {
    $string = trim($string);
    $arrayOfStrings = array_reverse(explode('. ', $string));
    $reversedString = '';
    foreach ($arrayOfStrings as $key => $value) {
        if ($key == 0) {
            $reversedString .= $value." ";
        }
        else {
            $reversedString .= $value . ". ";
        }
    }
    return $reversedString;
}


?>





<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="12.php" method="post">
    <p>
        <textarea name="content[string]"></textarea>
    </p>
    <button type="submit">Отправить</button>
</form>

<?php
echo txtReverse($text);
?>


</body>
</html>
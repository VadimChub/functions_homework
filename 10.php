<?php

if (isset($_POST['content'])) {
    foreach ($_POST['content'] as $key => $value) {
        $arr[$key] = $value;
    }
    $text = $arr['text'];
}

/**
 * @param $sometext string entered text
 * @return int quantity of unique words
 */
function uniqueWords ($sometext) {
    $arrayOfUnique = array_unique(explode(' ',$sometext));
    return count($arrayOfUnique);
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="10.php" method="post">
    <p>
        <textarea name="content[text]"></textarea>
    </p>
    <button type="submit">Отправить</button>
</form>


<?php
var_dump(uniqueWords($text));
?>

</body>
</html>

<?php
if (isset($_POST['content'])) {
    foreach ($_POST['content'] as $key => $value) {
        $arr[$key] = $value;
    }
    $myString = $arr['string'];
}

function sentence_case($string) {
    $sentences = preg_split('/([.?!]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
    $new_string = '';
    foreach ($sentences as $key => $sentence) {
        $new_string .= ($key % 2) == 0?
            ucfirst(trim($sentence)) :
            $sentence.' ';
    }
    return trim($new_string);
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="11.php" method="post">
    <p>
        <textarea name="content[string]"></textarea>
    </p>
    <button type="submit">Отправить</button>
</form>


<?php
var_dump(sentence_case($myString));
?>

</body>
</html>

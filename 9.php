<?php

if (isset($_POST['content'])) {
    foreach ($_POST['content'] as $key => $value) {
        $arr[$key] = $value;
    }
    $text = $arr['text'];

}
    /**
     * @param $string  string that need to be reversed
     * @return string reversed version of entered string
     */
function textOver ($string) {
    return strrev($string);
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="9.php" method="post">
    <p>
    <textarea name="content[text]"></textarea>
    </p>
    <button type="submit">Отправить</button>
</form>


<?php
var_dump(textOver($text));
?>

</body>
</html>
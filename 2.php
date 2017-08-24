<?php

$text = $_POST['text'];

function compare ($a,$b){
    if (strlen($a) == strlen($b)) {
        return 0;
    }
    return (strlen($a) > strlen($b)) ? -1 : 1;
}

function getThreeLongestWords ($val) {
   $arrayOfAllWords = explode(' ',$val);

   usort($arrayOfAllWords, "compare");
   return array_slice($arrayOfAllWords, 0, 3);

}



?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="2.php" method="post">
    <p>
    <textarea name="text"></textarea>
    </p>
    <button type="submit">Отправить</button>
</form>

<?php

$abc = getThreeLongestWords($text);
var_dump($abc);

?>

</body>
</html>
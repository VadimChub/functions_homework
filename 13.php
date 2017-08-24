<?php
if (isset($_POST['content'])) {
    foreach ($_POST['content'] as $key => $value) {
        $arr[$key] = $value;
    }
    $myString = $arr['string'];
}

function countValues ($stringOfVal) {
    $a = explode(' ', $stringOfVal);
    return array_count_values($a);
}

?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="13.php" method="post">
    <p>
        <textarea name="content[string]"></textarea>
    </p>
    <button type="submit">Отправить</button>
</form>

<?php
$val = countValues($myString);
foreach ($val as $key => $value){
    echo $key." - ".$value."<br>";
}
?>

</body>
</html>


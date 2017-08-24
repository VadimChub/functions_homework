<?php
$firstMessage = $_POST['message1'];
$secondMessage = $_POST['message2'];


function getCommonWords($a, $b){

    $needed = ['.',',','!','?',':',';','-'];

  $a = str_replace($needed,"",$a);
 $b = str_replace($needed,"",$b);

    $arr1 = explode(' ',$a);
    $arr2 = explode(' ',$b);

    return array_intersect($arr1,$arr2);
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="1.php" method="post" style="width: 30%; margin: 0 auto;">
    <p>
    <textarea name="message1"></textarea>
    </p>
    <p>
    <textarea name="message2"></textarea>
    </p>
    <button type="submit">compare</button>
</form>


<?php
$a = getCommonWords($firstMessage,$secondMessage);
var_dump($a);
?>

</body>
</html>

<?php
$forbidenWords = ['fuck'];

if (isset($_POST['comment']) && isset($_POST['name'])){
    $comment = htmlspecialchars(strip_tags(trim($_POST['comment']),'<b>'));
    $name = htmlspecialchars(strip_tags(trim($_POST['name']),'<b>'));
    if(checkAllowableWords($comment.$name,$forbidenWords)) {
        writeComment($comment, $name);
    }
    else {
        echo "<h2>Некорректный комментарий!</h2>"."<br>";
    }
}

function writeComment ($com, $author)
{
    $content = $author."_AND_".$com."_END_ "."\n";
    $stream =  fopen("comments.txt", "a+");
    fwrite($stream,$content);
    fclose($stream);
}

function printComments ($file)
{
 $handle =  fopen($file, 'r');
 $string = fread($handle, filesize($file));
 $arrayOfAllComments = explode('_END_', $string);
 $size = count($arrayOfAllComments);
 for ($i = 0; $i < $size -1; $i++ ){
     $arrayOfTwo = explode('_AND_', $arrayOfAllComments[$i]);
     echo "$arrayOfTwo[0]:"." $arrayOfTwo[1]"."<br>";
     echo "-----------------------------------------"."<br>";
 }
 fclose($handle);
}

function checkAllowableWords ($textForChecking,$arrayOfForbidWords)
{
foreach ($arrayOfForbidWords as $word){
    if (is_int(strpos($textForChecking,$word))){
        return false;
    }
}
return true;
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
printComments('comments.txt');
?>

<form action="7-8.php" method="post">
    <p> <label>Name:</label><br>
        <input name="name" type="text" required>
    </p>
    <p> <label for="comment">Comment:</label><br>
        <textarea name="comment"></textarea>
    </p>
    <button type="submit">Оставить комментарий</button>
</form>


</body>
</html>

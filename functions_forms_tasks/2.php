<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2</title>
</head>
<body>

<?php
/*
 * 2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать
 * ТОП3 длинных слов в тексте. Реализовать с помощью функции.
 */

function getTopThreeMaxWords($a)
{
    //Delete all symbols
    $symbols = ['.', ',', ';', ':', '_', '-', '!', '(', ')', '/', '?', '"', '\'', '+'];
    $changeA = str_replace($symbols, ' ', $a);
    
    //Break the line into words
    $maxWords = explode(' ', $changeA);
    
    //Delete empty symbols
    $maxWords = array_filter($maxWords);
    
    //Delete duplicate items
    $maxWords = array_unique($maxWords);
    
    //Sort an array by the length of words
    uasort($maxWords, function ($a, $b) {
        if (strlen($a) == strlen($b)) {
            return 0;
        }
        return (strlen($a) > strlen($b)) ? -1 : 1;
    });
    //Return three first elements
    return array_slice($maxWords, 0, 3);
}

if (isset($_POST['maxWords'])) {
    $maxWords = $_POST['maxWords'];
}

echo '<pre>';
print_r(getTopThreeMaxWords($maxWords));
echo '</pre>'

?>

<form action="#" method="post">
    <textarea name="maxWords" cols="50" rows="5"></textarea><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
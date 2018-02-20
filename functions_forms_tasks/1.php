<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 1</title>
</head>
<body>

<?php
/*
 * 1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
 * которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию
 * getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 */

function getCommonWords($a, $b) {
    //Delete all symbols
    $symbols = ['.', ',', ';', ':', '_', '-', '!', '(', ')', '/', '?', '"', '\'', '+'];
    $changeA = str_replace($symbols, ' ', $a);
    $changeB = str_replace($symbols, ' ', $b);
    
    //Break the line into words
    $firstField = explode(' ', $changeA);
    $secondField = explode(' ', $changeB);
    
    //Delete empty symbols
    $firstField = array_filter($firstField);
    $secondField = array_filter($secondField);
    
    //Return convergence of arrays
    return array_intersect($firstField, $secondField);
}

if (isset($_POST['firstField']) && isset($_POST['secondField'])) {
    $firstField = $_POST['firstField'];
    $secondField = $_POST['secondField'];
}

echo '<pre>';
print_r(getCommonWords($firstField, $secondField));
echo '</pre>'

?>

<form action="#" method="post">
    <textarea name="firstField" cols="50" rows="5"></textarea><br>
    <textarea name="secondField" cols="50" rows="5"></textarea><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
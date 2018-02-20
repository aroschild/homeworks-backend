<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 3</title>
</head>
<body>

<?php
/*
 * 3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
 */

/*$lengthWord = $_POST['number'];
$text = file_get_contents('3.txt');
$textNew = explode(' ', $text);
for ($i = 0; $i < count($textNew); $i++) {
    if (mb_strlen($textNew[$i]) == $lengthWord) {
        unset($textNew[$i]);
    }
}

file_put_contents('new3.txt', implode(' ', $textNew));*/

function removeLongWords($num) {
    $text = explode(' ', file_get_contents('3.txt'));
        foreach ($text as $key => $value) {
            if (mb_strlen($text[$key]) > $num) {
                unset($text[$key]);
            }
        }
    $open = fopen('new3.txt', 'w+');
    $text1 = implode(' ', $text);
    fwrite($open, $text1);
    fclose($open);
}

    if (isset($_POST['number'])) {
        removeLongWords($_POST['number']);
    }

?>

<form action="#" method="post">
    <label for="valueN">Which length of the word need to delete:</label>
    <input type="text" name="number" id="valueN" placeholder="Enter a number of symbols">
    <input type="submit" value="Submit">
</form>

</body>
</html>

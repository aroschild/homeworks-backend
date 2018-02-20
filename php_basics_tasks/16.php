<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Max Number</title>
</head>
<body>
<form method="get">
    <input type="text" name="a">
    <input type="text" name="b">
    <input type="submit" value="Result">
</form>

<?php
/*
 * 16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.
 */

$a = '';
$b = '';

if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = filter_var($_GET['a'], FILTER_VALIDATE_INT); //Проверка, что значение является корректным целым числом
    $b = filter_var($_GET['b'], FILTER_VALIDATE_INT); //Проверка, что значение является корректным целым числом

    if ($a > $b) {
        $result = "{$a} больше чем {$b}";
    } elseif ($a < $b) {
        $result = "{$a} меньше чем {$b}";
    } elseif ($a == $b) {
        $result = "{$a} равно {$b}";
    }
}

if (isset($result)) {
    echo $result;
}


/*
$a = rand();
$b = rand();

$result = ($a > $b) ? "{$a} больше {$b}" : "{$a} меньше {$b}";
echo $result;
*/

?>

</body>
</html>
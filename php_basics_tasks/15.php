<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>

<form method="get">
    <input type="text" name="a">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>
    <input type="text" name="b">
    <input type="submit" value="Answer">
</form>

<?php
/*
 * 15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
 * Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
 * На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0,
 * если надо - выдавать ошибку что на 0 делить нельзя.
*/

$a = '';
$b = '';
$result = '';

if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operator'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $operator = $_GET['operator'];

    switch ($operator) {
        case '+': $result = "{$a} + {$b} = " . ($a + $b); break;
        case '-': $result = "{$a} - {$b} = " . ($a - $b); break;
        case '*': $result = "{$a} * {$b} = " . ($a * $b); break;
        case '/':
            if ($b == 0) {
                echo 'На 0 делить нельзя!';
            } else {
                $result = "{$a} / {$b} = " . ($a / $b);
            }
            break;
        case '%':
            if ($b == 0) {
                echo 'На 0 делить нельзя!';
            } else {
                $result = "{$a} % {$b} = " . ($a % $b);
            }
            break;
    }
}

if (isset($result)) {
    echo $result;
}

?>

</body>
</html>
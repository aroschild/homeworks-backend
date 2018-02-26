<?php
/*
 * 13. Есть строка
 * $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко
 * черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня
 * вишня черешня черешня груша яблоко черешня вишня';
 *
 * Подсчитайте, сколько раз каждый фрукт встречается в этой строке.
 *
 * Выведите  в виде списка в порядке уменьшения количества:
 * Пример вывода:
 * яблоко – 12
 * черешня – 8
 * груша – 5
 * слива - 3
 */

function countArrValues($string) {

    $string = explode(' ', $string);
    $string = array_count_values($string);
    asort($string);

    return $string;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $string = filter_input(INPUT_POST, 'string', FILTER_SANITIZE_STRING);
    if ($string) {
        $result = countArrValues($string);
    } else {
        $error = 'Enter a text!';
    }
}

include '13.html';
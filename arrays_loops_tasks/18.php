<?php
/*
 * 18. Составьте массив дней недели.
 * С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
 */

$days = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];

$weekend = [
    'Saturday',
    'Sunday'
];

foreach ($days as $val) {
    if (in_array($val, $weekend)) {
        echo "<b>{$val}</b><br>";
    } else {
        echo "{$val}<br>";
    }
}
<?php
/*
 * 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
 * Текущий день должен храниться в переменной $day.
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

$day = $days[date('n')];

foreach ($days as $val) {
    if ($val == $day) {
        echo "<i>{$val}</i><br>";
    } else {
        echo "{$val}<br>";
    }
}
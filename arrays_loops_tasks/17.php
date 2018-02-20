<?php
/*
 * 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 * Текущий месяц должен храниться в переменной $month.
 */

$arr = [
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
];

$month = $arr[date('n')];

foreach ($arr as $val) {
    echo $val == $month ? "<b>{$month}</b><br>" : "{$val}<br>";
}
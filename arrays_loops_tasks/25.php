<?php
/*
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 */

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand(1, 50);
}

echo '<pre>';
    print_r($array);
echo '</pre>';

//max and min value
$maxValue = array_search(max($array), $array);
$minValue = array_search(min($array), $array);

echo "Max value is {$array[$maxValue]} <br>";
echo "Min value is {$array[$minValue]} <br><br>";

//change maxValue to minValue
$array[$maxValue] = $array[$maxValue] + $array[$minValue];
$array[$minValue] = $array[$maxValue] - $array[$minValue];
$array[$maxValue] = $array[$maxValue] - $array[$minValue];

echo "Max value to min value: {$array[$maxValue]} <br>";
echo "Min value to max value: {$array[$minValue]}";
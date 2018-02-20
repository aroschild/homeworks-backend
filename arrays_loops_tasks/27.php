<?php
/*
 * 27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
 * $cols - кол-во столбцов в таблице. Есть список цветов, в массиве:
 * $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число.
 */

$row = rand(2, 10);
$cols = rand(2, 10);
$colors = ['red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'];

echo '<table>';
    for ($i = 1; $i < $row; $i++) {
        echo '<tr>';
        
        for ($j = 1; $j < $cols; $j++) {
            $color = $colors[array_rand($colors)];
            $number = rand();
            echo "<td style='background-color: {$color}'>{$number}</td>";
        }
        echo '</tr>';
    }
echo '</table>';
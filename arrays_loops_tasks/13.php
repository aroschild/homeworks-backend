<?php
/*
 * 13. Вывести таблицу умножения
 */

// Первый вариант

/*for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <=10; $j++) {
        echo "{$i} * {$j} = " . $i * $j . "<br>";
    }
    echo '<hr>';
}*/

// Второй вариант

$cols = 10; //Количество столбцов td
$rows = 10; //Колчество строк tr

echo '<table border="1" cellspacing="0" cellpadding="5" style="border-collapse: collapse">';

for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';

    for ($j = 1; $j <= $cols; $j++) {
        echo '<td>' . $i * $j . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
<?php
/*
 * 10. С помощью конструкции switch выведите фразу: "Это рабочий день",
 * если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).
 */

$day = rand(1, 7);

switch ($day) {
    case 1: echo 'Это рабочий день'; break;
    case 2: echo 'Это рабочий день'; break;
    case 3: echo 'Это рабочий день'; break;
    case 4: echo 'Это рабочий день'; break;
    case 5: echo 'Это рабочий день'; break;
    case 6: echo 'Выходной день'; break;
    case 7: echo 'Выходной день'; break;
}
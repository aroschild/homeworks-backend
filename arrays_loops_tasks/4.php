<?php
/*
 * 4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго —
 * столбец элементов. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 */

$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];

echo '<b>KEYS:</b> <br>';

foreach ($arr as $key => $val) {
    echo $key, '<br>';
}

echo '<b>ELEMENTS:</b> <br>';

foreach ($arr as $val) {
    echo $val, '<br>';
}




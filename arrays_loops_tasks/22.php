<?php
/*
 * 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
 * xx
 * xxxx
 * xxxxxx
 * xxxxxxxx
 * xxxxxxxxxx
 */

$str = 'xx';
while (strlen($str) <= 10) {
    echo "{$str}<br>";
    $str .= 'xx';
}
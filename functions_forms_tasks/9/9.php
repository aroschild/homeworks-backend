<?php
/*
 * 9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
 * Ввод текста реализовать с помощью формы.
 */

//First example
/*function stringReverse($text) {
    return $string = strrev($text);
}
$result = stringReverse($text);
print_r ($result);*/

//Second example
/*function stringReverse($text) {
    $result ='';
    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $result .= $text[$i];
    }
    return $result;
}

print_r(stringReverse($_POST['text']));*/

//Third example
function stringReverse($text) {
    
    $result = '';
    
    for ($i = 0; $i < mb_strlen($text); $i++) {
        $result = mb_substr($text, $i, 1) . $result;
    }
    return $result;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    if ($text) {
        $result = stringReverse($text);
    } else {
        $error = 'Enter a text!';
    }
}

include '9.html';
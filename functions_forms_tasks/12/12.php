<?php
/**
 * 12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
 * что предложения идут в обратном порядке.
 *
 * Пример:
 * Входная строка: 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь.
 * А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
 *
 * Строка, возвращенная функцией : 'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый.
 * А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.
 */

function reverseSentences($text) {

    $sentences = explode('.', $text);
    $sentences = array_filter($sentences);
    $sentences = array_reverse($sentences);

    return implode('.', $sentences);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    if ($text) {
        $result = reverseSentences($text);
    } else {
        $error = 'Enter a text!';
    }
}

include '12.html';
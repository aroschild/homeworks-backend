<?php
/*
 * 11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
 * что каждое новое предложение начиняется с большой буквы.
 * Пример:
 * Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь.
 * а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

 * Строка, возвращенная функцией : 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
 * все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.
 */

/*$a = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь.
 а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';*/

function upToFirstLetter($text) {
    //Split a line into sentences
    $sentences = explode('.', $text);
    //Turn the first non-whitespace character to upper case
    foreach ($sentences as &$sentence) {
        $sentenceTrimmed = ltrim($sentence); //Delete spaces on the left
            if (mb_strlen($sentence) && mb_strlen($sentenceTrimmed)) { //If the sentences equal
                $spaces = str_repeat(' ', mb_strlen($sentence) - mb_strlen($sentenceTrimmed));
            } else {
                $spaces = '';
            }
            $sentence = $spaces . mb_strtoupper(mb_substr($sentenceTrimmed, 0, 1)) . mb_substr($sentenceTrimmed, 1);
    }
    return implode('.', $sentences);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    if ($text) {
        $result = upToFirstLetter($text);
    } else {
        $error = 'Enter a text!';
    }
}

include '11.html';
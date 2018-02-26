<?php
/*
 * 10. Написать функцию, которая считает количество уникальных слов в тексте.
 * Слова разделяются пробелами. Текст должен вводиться с формы.
 */

function countUniqueWords($text) {
    //Remove punctuation marks
    $punctuation = ['.', ',', ';', ':', '–', '-', '!', '?', '"'];
    $textFiltered = str_replace($punctuation, ' ', $text);
    //Break the line into words
    $textArray = explode(' ', $textFiltered);
    //Delete empty items
    $textArray = array_filter($textArray);
    //Delete duplicate items
    $textArray = array_unique($textArray);
    //Return the length of an array of unique words
    return count($textArray);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    if ($text) {
        $result = countUniqueWords($text);
    } else {
        $error = 'Input a text!';
    }
}

include '10.html';
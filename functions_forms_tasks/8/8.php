<?php
/*
 * 8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 * Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов -
 * выводить сообщение "Некорректный комментарий".
 * Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.
 */

define('FILTHY_LANGUAGE', ['ass', 'shit', 'bullshit', 'bitch']);

function saveComments($comment) {
    return file_put_contents('comments.txt', serialize($comment));
}

function getComments() {
    return unserialize(file_get_contents('comments.txt'));
}

if (file_exists('comments.txt')) {
    $comments = getComments();
}

function badWords($comment) {
    foreach ($comment as $key => $value) {
        $comment[$key] = strip_tags(str_replace(FILTHY_LANGUAGE, '***', $value, $count), '<b>');
        if ($count > 0) {
            echo "Incorrect comment: {$value}! <br>";
        }
    }
    return $comment;
}

$formSend = false;
if (isset($_POST['submit'])) {
    $formSend = true;
    $comment = [
        'user' => $_POST['user'],
        'comment' => $_POST['comment']
    ];
    
/*if ($_POST['user'] == null or $_POST['comment'] == null) {
        throw new Error('Enter comment or your user;');
}*/

    $comment = badWords($comment);
    
    $comments[] = $comment;
    saveComments($comments);

}


include '8.html';
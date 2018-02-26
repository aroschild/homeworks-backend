<?php
/*
 * 7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 */

function saveComments($comment) {
    return file_put_contents('comments.txt', serialize($comment));
}

function getComments() {
    return unserialize(file_get_contents('comments.txt'));
}

if (file_exists('comments.txt')) {
    $comments = getComments();
}

$formSend = false;

if (isset($_POST['submit'])) {
    $formSend = true;
    $comment = [
        'user' => $_POST['user'],
        'comment' => $_POST['comment']
    ];
    
/*    if ($_POST['user'] == null or $_POST['comment'] == null) {
        throw new Error('Enter a comment or your user!;');
    }*/
    
    $comments[] = $comment;
    saveComments($comments);
}

include '7.html';
<?php
/*
 * 6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
 * Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
 */

define('DS', DIRECTORY_SEPARATOR);
$dir = __DIR__ . DS . 'gallery';
if (isset($_FILES["image"])) {
    if (!is_dir($dir)) {
        mkdir($dir);
    }
    foreach ($_FILES as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES['image']["tmp_name"][$key];
            $name = $_FILES["image"]["name"][$key];
            move_uploaded_file($tmp_name, $dir . DS . $name);
        }
    }
}


function dirs($dirName, $gif, $jpg, $png) {
    global $dir;
    $scanDir = scandir($dirName);
    foreach ($scanDir as $index => $item) {
        if (stristr($scanDir[$index], $gif) || stristr($scanDir[$index], $jpg) || stristr($scanDir[$index], $png)) {
            echo "<img src='" . $dir . "/{$item}' width='200px'>";
        } else {
            unset($scanDir[$index]);
        }
    }
}
dirs($dir, "gif", 'jpg', 'png');


include "6.html";
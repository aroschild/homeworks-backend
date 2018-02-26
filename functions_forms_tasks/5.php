<?php
/*
 * 5. Написать функцию, которая выводит список файлов в заданной директории,
 * которые содержат искомое слово. Директория и искомое слово задаются как параметры функции.
 */

function currentDirSearchWord($dirName, $search)
{
    $scanDir = scandir($dirName);
    foreach ($scanDir as $index => $item) {
        if (!stristr($scanDir[$index], $search)) {
            unset($scanDir[$index]);
        }
    }
    echo "<pre>";
    print_r($scanDir);
}
currentDirSearchWord('c:', 'program');

/*function currentDirSearchWord($dir, $fileName) {
    //Open the existing directory and start reading its contents
    if (is_dir($dir)) {
        //Open the catalog
        if ($handle = opendir($dir)) {
            //Get the directory element by its descriptor
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && !is_dir($file) && stristr($file, $fileName)) {
                    $result = $file;
                    echo "{$result} <br>";
                }
            }
            //Closes a directory handle
            closedir($handle);
        }
    } else {
        echo 'Dir is not specified!';
    }
}

currentDirSearchWord('c:', 'program');*/
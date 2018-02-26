<?php
/*
 * 4. Написать функцию, которая выводит список файлов в заданной директории.
 * Директория задается как параметр функции.
 */

/*function listOfFilesCurrentDir($dir) {
    return scandir($dir);
}
echo '<pre>';
print_r(listOfFilesCurrentDir(__DIR__));
echo '</pre>';*/

function listOfFilesCurrentDir($dir) {
    //Open the existing directory and start reading its contents
    if (is_dir($dir)) {
        //Open the catalog
        if ($handle = opendir($dir)) {
            //Get the directory element by its descriptor
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && !is_dir($file)) {
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

listOfFilesCurrentDir('c:');
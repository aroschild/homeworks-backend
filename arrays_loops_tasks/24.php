<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Task 24</title>
</head>
<body>
<?php

/*
 * 24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры
 * в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.
 */

    if (isset($_POST['number']) && isset($_POST['digit'])) {
        $number = $_POST['number'];
        $digit = $_POST['digit'];
        
        if (is_numeric($number) && is_numeric($digit)) {
            $arr = str_split($number);
            $quantity = array_count_values($arr);
            
            $count = $quantity[$digit] ? $quantity[$digit] : 0;
    
            $result = "Ваше число {$number} содержит {$count} вхождений введенной цифры {$digit}";
        } else {
            echo 'You entered not a number!';
        }
        
        if (isset($result)) {
            echo $result;
        }
    }
?>

    <form method="POST" action="#">
       <input type="text" name="number" placeholder="Enter a number">
       <input type="text" name="digit" placeholder="Enter a digit">
       <input type="submit" value="Result">
    </form>

</body>
</html>
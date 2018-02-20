<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Task 23</title>
</head>
<body>
<?php

/*
 * 23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
 * Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
 */

$num = '';
$sum = 0;

    if (isset($_POST['number'])) {
        $num = $_POST['number'];
        
        if (is_numeric($num)) {
            $length = str_split($num);
    
            for ($i = 0; $i < count($length); $i++) {
                $sum += $length[$i];
            }
            echo "You entered {$num}. The sum of the entered digits is " . $sum;
        } else {
            echo 'You entered not a number!';
        }
    }
?>

    <form method="POST" action="#">
       <input type="text" name="number">
       <input type="submit" value="Result">
    </form>

</body>
</html>
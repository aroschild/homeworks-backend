<!--
* 28. Вывести таблицу умножения с помощью двух циклов for.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication table</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="5" style="border-collapse: collapse">
    <tr>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <td align="left" width="90px">
                <?php for ($j = 1; $j <= 10; $j++): ?>
                    <?= $i ?> * <?= $j ?> = <?= $i * $j ?><br>
                <?php endfor; ?>
            </td>
        <?php endfor; ?>
    </tr>
</table>
</body>
</html>
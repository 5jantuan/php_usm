<?php

$dayOfWeek = date('N');

$johnSchedule = in_array($dayOfWeek, [1, 3, 5]) ? '8:00-12:00' : 'Нерабочий день';
$janeSchedule = in_array($dayOfWeek, [2, 4, 6]) ? '12:00-16:00' : 'Нерабочий день';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
    <tr>
        <th>№</th>
        <th>Фамилия Имя</th>
        <th>График работы</th>
    </tr>
    <tr>
        <td>1</td>
        <td>John Styles</td>
        <td><?php echo $johnSchedule; ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jane Doe</td>
        <td><?php echo $janeSchedule; ?></td>
    </tr>
    </table>
    <h1>Cycles</h1>
    <h2>Cycle for</h2>
    <?php
    $a = 0;
    $b = 0;
    $i = 0;
    
    for ($i = 0; $i <= 5; $i++) {
        $a += 10;
        $b += 5;
        echo "a = $a, b = $b";?><br><?php
    }
        
    echo "End of the loop: a = $a, b = $b";
    ?>
    <h2>Cycle while</h2>
    <?php

    $a = 0;
    $b = 0;
    $i = 0;

    while ($i <= 5) {
        $a += 10;
        $b += 5;
        echo "a = $a, b = $b <br>";
        $i++;
        }
    echo "End of the loop: a = $a, b = $b";
    ?>
    <h2>Cycle do-while</h2>
    <?php
    $a = 0;
    $b = 0;
    $i = 0;
        
    do {
        $a += 10;
        $b += 5;
        echo "a = $a, b = $b <br>";
        $i++;
    } while ($i <= 5);
        
    echo "End of the loop: a = $a, b = $b";
    ?>

</body>
</html>
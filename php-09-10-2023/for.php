<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi kasus : tabel perkalian</title>
    <style>
        table tr th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Tabel Perkalian 1 - 10</h1>
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <th>&nbsp;</th>
            <?php 
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>

        <?php
        for ($row = 1; $row <= 10; $row++) {
            echo "<tr>";
            echo "<th>$row</th>";

            for ($col = 1; $col <= 10; $col++) {
                $result = $row * $col;
                echo "<th>$result</th>";
            }

            echo "</th>";
        }
        ?>

    </table>
</body>
</html>
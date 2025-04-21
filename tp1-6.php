<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style>
        td, th {
            border: 1px solid;
            width: 100px;
            vertical-align: top;
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>

<table border="1">
    <tr>
        <?php
             for ($x = 0; $x < 5; $x++) {
                print "<td><ul>";
                for ($y = 1; $y <= 10; $y++) {
                    $num = $x * 10 + $y;
                    print "<li>$num</li>";
                }
                print "</ul></td>";
            }
        ?>
    </tr>
    <tr>
        <?php
             for ($x = 0; $x < 5; $x++) {
                print "<td>";
                for ($y = 0; $y < 10; $y++) {
                    $fila = $y + 1;
                    $valor = 100 - ($x * 10 + $y); 
                    print "$fila. $valor<br>";
                }
                echo "</td>";
            }
        ?>
    </tr>
</table>

<br>
</body>
</html>

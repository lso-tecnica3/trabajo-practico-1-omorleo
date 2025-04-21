<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>

    <style>
        tr, td, th {
            border: 1px solid;
            width: 50px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php
            for ($x = 0; $x <= 19; $x++) {
                print "<tr>";
                for ($y = 0; $y <= 19; $y++) {
                    if ($x == $y) {
                        print "<td style='background-color: red;'></td>";
                    } elseif ($x > $y) {
                        print "<td style='background-color: green;'></td>";
                    } else {
                        print "<td style='background-color: blue;'></td>";
                    }
                }
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>

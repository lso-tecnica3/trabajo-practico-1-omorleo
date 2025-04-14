<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        tr, td, th{
            border: 1px solid;
            width: 50px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table border = 1>
        <?php
            for($x=1; $x<=50; $x++){
                print "<tr>";
                print "<th>$x</th>";
                print "<td>";
                if ($x % 3 == 0 && $x % 5 == 0) {
                    print "FIZZBUZZ";
                } elseif ($x % 3 == 0) {
                    print "FIZZ";
                } elseif ($x % 5 == 0) {
                    print "BUZZ";
                } else {
                    print " ";
                }
                print "</td>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>

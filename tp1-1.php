<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
    <style>
        tr{
            border: 1px solid;
            width: 30px;
            height: auto;
            text-align: center;
        }
        th{
            background-color: #ADF5FF;
        }
    </style>
</head>
<body>
    <table border ="1">
        <th>X</th>
    <?php
        //estos FOR 
        $num = 1;
        $num2= 0;
        $mult = 1;
        
        for ($x=1; $x <=10; $x++){
            print "<th>";
            print $x;
            print "</th>";
        }

        for ($n1=1; $n1<=10; $n1++){
            print "<tr>";
            print "<th> $n1 </th>";
            for ($n2=1; $n2 <= 10; $n2++){
                $mult= $n1 * $n2;
                print "<td>";
                print $mult;
                print "</td>";
            }

            print "</tr>"; 
        }
        
    ?>
       
    </table>
</body>
</html>	

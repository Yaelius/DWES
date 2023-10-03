<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        td {
            width: 30px;
            height: 30px;
        }

        .black {
            background-color: black;
        }
    </style>
</head>
<body>

<table>
    <?php
    $filas = 8;
    $columnas = 8;

    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            if(($i + $j) % 2 === 0){
                $class = "white";
            }else{
                $class = "black";
            }
            echo "<td class=\"$class\">&nbsp;</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>


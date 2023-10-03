<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConjuntoBucles</title>
</head>
<body>

    <?php
        $filas = 10;
            for($i = 0; $i <= $filas; $i++){
                for($j = 1; $j <= $i; $j++){
                    echo "*";
                }
                echo "<br>";
            }
            for ($i = $filas - 1; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }



    ?>    

</body>
</html>
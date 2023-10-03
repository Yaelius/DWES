<!DOCTYPE html>
<html>
<body>
<?php

for($i=1; $i<10; $i++){
    for($j=0; $j<$i;$j++){
        echo "*";
    }
    for($j=9; $j>$i;$j--){
        echo "&nbsp&nbsp&nbsp&nbsp";
    }
    for($j=0; $j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}

for($i=1; $i<10; $i++){
    for($j=9; $j>$i;$j--){
        echo "*";
    }
    for($j=0; $j<$i;$j++){
        echo "&nbsp&nbsp&nbsp&nbsp";
    }
    for($j=9; $j>$i;$j--){
        echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>
<?php

function incrementVisitCount() {
    $visitCount = isset($_COOKIE['visitCount']) ? (int)$_COOKIE['visitCount'] : 0;
    $visitCount++; 
    setcookie('visitCount', $visitCount, time() + 3600);
}

incrementVisitCount();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Contador de visitas</h1>



<p>Esta página ha sido visitada <?php echo isset($_COOKIE['visitCount']) ? $_COOKIE['visitCount'] : 0; ?> veces.</p>

    


</body>
</html>
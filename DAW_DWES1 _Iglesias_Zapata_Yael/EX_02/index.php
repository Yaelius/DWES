<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php
    $shopping_cart = isset($shopping_cart)? $shopping_cart : 150;
    $tipo = isset($tipo)? $tipo : 'cables';
    $shipping_price = isset($shipping_price)? $shipping_price : 4.99;

    //EJ1.
    if($shopping_cart <= 20) {
        if ($tipo == 'cables') {
            //echo '<h2> No se puede enviar </h2>';
            echo '<p>No se puede enviar</p>';
        } else {
            echo '<p>Los gastos de envío son 4.99€</p>';
        }
    }

    //EJ2.
    if ($shopping_cart >= 20 && $shopping_cart <= 50) {
        echo '<p>Los gastos de envío son 4.99€</p>';
    }
    //EJ3.
    if ($shopping_cart > 50) {
        echo '<p>Los portes son gratis</p>';
    }
    //EJ4.
    if ($shopping_cart > 150) {
        echo '<p> Codigo descuento : GIMBERNAT_20_% </p>';
    }


    ?>



</p>
</body>
</html>
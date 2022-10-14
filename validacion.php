<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion de datos</title>
</head>

<body>
    <?php

    if (isset($_POST["enviar"])) {
        procesar();
    }
    function procesar()
    {
        $frenos = $_REQUEST['frenos'];
        $amort = $_REQUEST['amort'];
        $calas = $_REQUEST['calas'];
        $ruedas = $_REQUEST['ruedas'];

        $total = 100;
        echo "<strong> los extras elegidos son: </strong><br><br>";
        //frenos

        if ($frenos == "hidra") {
            $total += 30;
            echo "frenos hidraulicos +<br>";
        } elseif ($frenos == "norm") {
            $total += 20;
            echo "frenos normales +<br>";
        }

        //amortiguación

        if ($amort == "delantera") {
            $total += 30;
            echo "Amortiguación delantera +<br>";
        } elseif ($amort == "trasera") {
            $total += 30;
            echo "Amortiguación trasera +<br>";
        } elseif ($amort == "dyt") {
            $total += 50;
            echo "Amortiguación trasera y delantera +<br>";
        }

        //calas
        if ($calas == "si") {
            $total += 10;
            echo "si tiene calas +<br>";
        } elseif ($calas == "no") {
            $total += 0;
            echo "no tiene calas +<br>";
        }

        //ruedas

        if ($ruedas == "gruesas") {
            $total += 10;
            echo "ruedas gruesas <br>";
        } elseif ($ruedas == "normales") {
            $total += 0;
            echo "ruedas normales <br>";
        }

        echo "<br> Precio total: $total Euros <br>";
        $precioconiva = $total * 1.21;
        echo "<br> Precio total con iva: $precioconiva Euros <br>";
    }

    ?>
</body>

</html>
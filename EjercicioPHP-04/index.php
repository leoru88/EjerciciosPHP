<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Ejercicio4</title>
    <style>
    h3 {
        font-style: italic;
        font-family: 'Lucida Sans';
        font-size: 30px;
    }

    img {
        display: block;
        margin: auto;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
    }

    #centrado {
        text-align: center;
    }

    table {
        margin: auto;
    }
    </style>
</head>

<body>

    <header>
        <h3 id="centrado">REGALO CLIENTES</h3>
        <img src="https://okdiario.com/img/2021/11/25/franki-chamaki-ivfp_yxzuyq-unsplash11.jpg" width="600"
            height="350" alt="">
    </header>


    <?php

    error_reporting(0);

    $nombre = $_POST['txtNombre'];
    $monto = $_POST['txtMonto'];
    $ticket = $_POST['txtTicket']; 

    ?>


    <section>
        <form action="index.php" method="post">
            <table>

                <tr>
                    <td>Nombre del cliente</td>
                    <td><input type="text" name="txtNombre" id="" placeholder="Ingrese el nombre del cliente" size="63"
                            value="<?php echo$_POST['txtNombre']; ?>"></td>
                </tr>

                <tr>
                    <td>Monto total</td>
                    <td><input type="text" name="txtMonto" id="" placeholder="Ingrese monto total a pagar"
                            value="<?php echo$_POST['txtMonto']; ?>"></td>
                </tr>

                <tr>
                    <td>Número de ticket</td>
                    <td><input type="text" name="txtTicket" id="" placeholder="Ingrese el número del ticket"
                            value="<?php echo $ticket; ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td> <input type="submit" value="Procesar"> </td>
                </tr>


                <?php
                
                if ($ticket >= 1 && $ticket <= 4) {
                    $regalo = 'Saco de arroz de 20KG';
                    $descuento = 13/100 * $monto;
                }
                if ($ticket >= 5 && $ticket <= 9) {
                    $regalo = 'Caja de leche de 5LT';
                    $descuento = 6/100 * $monto;
                }
                if ($ticket >= 10 && $ticket <= 14){
                    $regalo = 'Un bulto de azúcar';
                    $descuento = 12/100 * $monto;
                }
                if ($ticket >= 15 && $ticket <= 19){
                    $regalo = 'Cesta con varios productos';
                    $descuento = 6/100 * $monto;
                } 
                if ($ticket > 20){;
                    echo '<script> alert("Ticket no válido!!!"); </script>';
                }

                $montoNuevo = $monto - $descuento;
        
                ?>

                <tr>
                    <td>Monto a pagar</td>
                    <td>
                        <?php echo "$ " . number_format($montoNuevo, 2, '.' , ','); ?>
                    </td>
                </tr>

                <tr>
                    <td>Regalo obtenido</td>
                    <td>
                        <?php echo $regalo; ?>
                    </td>
                </tr>
            </table>
        </form>
    </section>

</body>

</html>
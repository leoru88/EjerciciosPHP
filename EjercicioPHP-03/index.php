<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Ejercicio3</title>
    <style>
    body {
        font-family: sans-serif;
        font-size: 14px;
    }

    #centrado {
        text-align: center;
    }

    img {
        display: block;
        margin: auto;
    }

    table {
        margin: auto;
    }

    #error {
        color: red;
        size: 12px;
    }
    </style>
</head>

<body>

    <header>
        <h1 id="centrado">Ventas de entradas para el CINE</h1>
        <img src="https://static2.laverdad.es/www/multimedia/202209/12/media/cortadas/fiesta-cine-descuento-entradas-kCBB-U18031101121NSH-624x385@La%20Verdad.jpg"
            alt="">

    </header>

    <section>

        <?php

        error_reporting(0);

        $dia = date("l");

            switch ($dia) {
                case 'Monday':
                    $costoAdulto = 10;
                    $costoNinos = 5;
                    break;
                case 'Tuesday':
                    $costoAdulto = 8;
                    $costoNinos = 4;
                    break;
                case ' Wednesday':
                case 'Thursday':
                case 'Friday':
                    $costoAdulto = 16;
                    $costoNinos = 8;
                    break;
                case 'Saturday':
                    $costoAdulto = 50;
                    $costoNinos = 45;
                    break;
                case 'Sunday':
            
                default:
                    $costoAdulto = 0;
                    $costoNinos = 0;
                    break;
            }
            


            $comprador = $_POST['txtComprador'];
            $fecha = $_POST['txtFecha'];
            $numAdulto = $_POST['txtNumAdultos'];
            $numNinos = $_POST['txtNumNinos'];

            $mComprador = '';
            $mNumAdulto = '';
            $mNumNinos = '';

            if(isset($_POST['btn-adquirir'])) {

                
                if(empty($comprador)) $mComprador = 'Debe ingresar un nombre';
                elseif(is_numeric($comprador)) $mComprador = 'Solo se permiten letras';
                else $mComprador = '';

                if(empty($numAdulto)) $mNumAdulto = 'Debe ingresar una cantidad';
                elseif(is_numeric($numAdulto)) $mNumAdulto;
                else $mNumAdulto = 'Solo se permiten números';

                if(empty($numNinos)) $mNumNinos = 'Debe ingresar una cantidad';
                elseif(is_numeric($numNinos)) $mNumNinos;
                else $mNumNinos = 'Solo se permiten números';

            
            }
                    

            ?>



        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Comprador</td>
                    <td>
                        <input type="text" name="txtComprador" size="20" id="">
                    </td>
                    <td width="220" id="error"><?php echo $mComprador; ?> </td>
                </tr>
                <tr>
                    <td>Fecha actual</td>
                    <td>
                        <input type="text" name="txtFecha" readonly="true" size="5"
                            value=" <?php echo date('d/m/y') ?> ">
                    </td>
                </tr>
                <tr>
                    <td>Número de entradas para adultos</td>
                    <td><input type="text" name="txtNumAdultos" id=""></td>
                    <td width="220" id="error"><?php echo $mNumAdulto; ?> </td>
                </tr>
                <tr>
                    <td>Número de entradas para niños</td>
                    <td><input type="text" name="txtNumNinos" id=""></td>
                    <td width="220" id="error"><?php echo $mNumNinos; ?> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btn-adquirir" value="Adquirir">
                    </td>
                </tr>
            </table>

            <?Php

            if(isset($_POST['btn-adquirir'])
            && empty ($mComprador)
            && empty ($mNumAdulto)
            && empty ($mNumNinos))
            
            {
            
            ?>


            <table width="630" border="1">
                <tr>
                    <td>
                        <table border="0" width="600">
                            <tr>
                                <td width="150">Comprador</td>
                                <td width="350"> <?php echo $comprador; ?> </td>
                            </tr>

                            <tr>
                                <td>Costo por adulto</td>
                                <td> <?php 
                                $adultos = $costoAdulto * $numAdulto;
                                echo "$ " . number_format($adultos, 2, '.', ','); 
                                ?> </td>
                            </tr>

                            <tr>
                                <td>Costo por niño</td>
                                <td> <?php 
                                $ninos = $costoNinos * $numNinos;
                                echo "$ " . number_format($ninos, 2, '.', ','); 
                                ?> </td>
                            </tr>
                            <tr>
                                <td>Día de promoción</td>
                                <td> <?php echo $dia; ?> </td>
                            </tr>

                            <tr>
                                <td>Monto total a pagar</td>
                                <td> <?php echo "$ " . number_format($adultos + $ninos, 2, '.', ','); ?> </td>
                            </tr>

                        </table>


                    </td>
                </tr>

            </table>
            
            <?php

            }

            ?>


        </form>

    </section>


</body>

</html>
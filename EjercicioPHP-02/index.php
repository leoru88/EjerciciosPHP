<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Ejercicio2</title>
    <style>
    #centrado {
        font-size: 14px;
        font-family: Tahoma;
        text-align: center;
    }

    img {
        margin: auto;
        display: block;
        border: silver 1px;
    }

    h1 {
        font-family: sans-serif;
        font-style: italic;
    }
    </style>
</head>

<body>

    <header>
        <h1 align="center">PAGO DE NOMINA</h1>
        <img src="https://www.questionpro.com/blog/wp-content/uploads/2020/01/1240.jpg" width="505" height="350" alt="">
    </header>

    <section>
        <table align="center">
            <form action="index.php" method="post">

                <tr>
                    <td width="200">Nombre del empleado</td>
                    <td><input type="text" name="txtEmpleado" id="" size="40"></td>
                </tr>

                <tr>
                    <td width="200">Horas trabajadas</td>
                    <td><input type="text" name="txtHoras" id="" size="40"></td>
                </tr>

                <tr>
                    <td width="200">Categoria</td>
                    <td>
                        <select name="selCategoria" id="">
                            <option value="">Elija una categoria</option>
                            <option value="Jefe">Jefe</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Operario">Operario</option>
                            <option value="Practicante">Practicante</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width="200"></td>
                    <td>
                        <input type="submit" value="Procesar">
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>

                <?php
                
                error_reporting(0);

                $empleado = $_POST['txtEmpleado'];
                $horas = $_POST['txtHoras'];
                $categoria = $_POST['selCategoria'];
                $tarifa = $_POST['txTarifa'];

                if ($categoria == "Jefe") $pagoHora = 50; {
                if ($categoria == "Administrativo") $pagoHora = 30;
                if ($categoria == "Operario") $pagoHora = 15;
                if ($categoria == "Practicante") $pagoHora = 5;
                }

                $salarioBruto = $horas * $pagoHora;
                $descuentoSeguroSalud = $salarioBruto * 0.12;
                $descuentoPension = $salarioBruto * 0.10;
                $salarioNeto = $salarioBruto - $descuentoSeguroSalud - $descuentoPension;
                
                ?>

                <tr>
                    <td>Nombre del empleado</td>
                    <td> <?php echo $empleado; ?> </td>
                </tr>

                <tr>
                    <td>Horas trabajadas</td>
                    <td> <?php echo $horas; ?> </td>
                </tr>

                <tr>
                    <td>Sueldo bruto</td>
                    <td> <?php echo "$ " . number_format($salarioBruto, 2); ?> </td>
                </tr>

                <tr>
                    <td>Descuento por salud</td>
                    <td> <?php echo "$ " . number_format($descuentoSeguroSalud, 2); ?> </td>
                </tr>

                <tr>
                    <td>Descento por AFP</td>
                    <td> <?php echo "$ " . number_format($descuentoPension, 2); ?> </td>
                </tr>

                <tr>
                    <td><b>SUELDO NETO</b></td>
                    <td> <?php echo "$ " . number_format($salarioNeto, 2); ?> </td>
                </tr>


            </form>
        </table>

    </section>

</body>

</html>
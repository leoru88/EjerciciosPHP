<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form action="procesar.php" method="POST" enctype="multipart/form-data">

        <label>
            Nombre:
            <input type="text" name="name">

        </label>

        <br><br>

        <label>
            Edad:
            <input type="number" name="edad">

        </label>

        <br><br>

        <p>Sexo</p>


        <select name="sexo">

            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Femenino</option>

        </select>

        <br><br>

        <P>Roles</P>

        <label>
            <input type="checkbox" name="roles[]" value="Administrador">
            Administrador
        </label>

        <br>

        <label>
            <input type="checkbox" name="roles[]" value="Editor">
            Editor
        </label>

        <br>

        <label>
            <input type="checkbox" name="roles[]" value="Moderador">
            Moderador
        </label>

        <br><br>

        <label>

            Suba su foto:
            <input type="file" name="image">

        </label>

        <br><br>

        <textarea name="mensaje" cols="30" rows="10"></textarea>

        <br><br>

        <button type="submit">Enviar</button>

    </form>

</body>

</html>
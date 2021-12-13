<HTML>

<head>
    <title> Actividad 4 </title>
</head>

<body>
    <h1> Actividad 4: Capturar el voto de una persona por partido político </h1>
    <hr>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="formularios.php" method="POST">
            Nombre del votante: <select name="event" required>
                <option value=""> Elegir un nombre </option>
                <?php
                $link = mysqli_connect("localhost", "root", "root", "votaciones");
                $resultado = mysqli_query($link, "select id_votante, nombre from votantes");
                while ($fila = $resultado->fetch_assoc()) {
                    $id = $fila['id_votante'];
                    $nombre = $fila['nombre'];
                    echo "<option value = $nombre|$id>$nombre </option>";
                }
                ?>
            </select><br><br>
            Selecciona el partido de tu preferencia: <br><br>
            <table border='1'>
                <TR>
                    <td><img src='https://bit.ly/3Bk8loh' width='80' height='80'></td>
                    <td><img src='https://bit.ly/3mFGWsY' width='80' height='80'></td>
                    <td><img src='https://bit.ly/3jlhHdm' width='80' height='80'></td>
                    <td><img src='https://bit.ly/3ktlrcc' width='80' height='80'></td>
                <Tr>
                <TR>
                    <td><INPUT TYPE="radio" NAME="partido" VALUE="PRI" CHECKED>PRI</td>
                    <td>
                        <INPUT TYPE="radio" NAME="partido" VALUE="PAN">PAN
                    </td>
                    <td>
                        <INPUT TYPE="radio" NAME="partido" VALUE="PRD">PRD
                    </td>
                    <td>
                        <INPUT TYPE="radio" NAME="partido" VALUE="Morena">Morena
                    </td>
                <Tr>
            </table>
            <br><input type="submit" name="enviar" value="Enviar voto">
        </form>
        <?php
        if ($_POST['enviar'] == "Enviar voto") {
            $datas = explode('|', $_POST["event"]);
            $nombre = $datas[0];
            $id = $datas[1];
            $partido = $_REQUEST['partido'];
            $hoy = date("Y-m-d");
            $sql = "INSERT INTO votos (id_votante, partido, fecha) VALUES ($id, '$partido', '$hoy')";
            echo "Te llamas: " . $nombre . "<br>Eres del partido: " . $partido . "<br><br>";
            if ($link->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $link->error . "<br>";
            }
            $link->close();
        }
        ?>
        <a href="grafico.php">Grafica de barras vertical</a>
    </body>

    </html>
<HTML>

<head>
    <title> Actividad 3 </title>
</head>

<body>
    <h1> Actividad 3: Formularios y archivos de texto </h1>
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
            Ingresa tu nombre: <input type="text" name="name" required><br><br>
            Selecciona el partido de tu preferencia: <br><br>
            <INPUT TYPE="radio" NAME="partido" VALUE="PRI" CHECKED>PRI
            <INPUT TYPE="radio" NAME="partido" VALUE="PAN">PAN
            <INPUT TYPE="radio" NAME="partido" VALUE="PRD">PRD
            <INPUT TYPE="radio" NAME="partido" VALUE="Morena">Morena
            <INPUT TYPE="radio" NAME="partido" VALUE="Anularvoto">Anular voto
            <br><br>
            <input type="submit" name="enviar" value=" Enviar voto">
        </form>
        <?php
        $fp1 = fopen("salida.txt", "a");
        $nombre = "";
        $partido = "";
        $nombre = $_REQUEST['name'];
        $partido = $_REQUEST['partido'];
        $nom = explode(' ', trim($nombre));
        echo "Te llamas: " . $nom[0] . "<br>Eres del partido: " . $partido . "<br><br>";
        fprintf($fp1, $nom[0] . " " . $partido . "\n");

        ?>
        <a href="grafico.php">Grafica de barras vertical</a>
    </body>

    </html>
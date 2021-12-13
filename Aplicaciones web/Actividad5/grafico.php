<html>

<head>
    <title> Ejemplo de grafica </title>
</head>

<body>
    <h1> Actividad 5: Venta de automóviles </h1>
    <hr>
    <center>
        <nav>
            <a href="consultaAutos.php">Home</a>
            <a href="catalogo.php">Portafolio</a>
            <a href="grafico.php">Grafico</a>
            <div class="animation start-home"></div>
        </nav>
    </center>
    <?PHP
    include "libchart/classes/libchart.php";
    $chart = new LineChart(700, 370);
    $dataset = new XYDataSet();

    $link = mysqli_connect("localhost", "root", "root", "autos");
    $resultado = mysqli_query($link, "select id_venta, id_consesionario from ventas");
    while ($fila = $resultado->fetch_assoc()) {
        $id = $fila['id_voto'];
        $cosesionaria = $fila['id_consesionario'];

        switch ($cosesionaria) {
            case 1:
                $autoPoint++;
                break;
            case 2:
                $vipexotics++;
                break;
            case 3:
                $autosJeff++;
                break;
            case 4:
                $autoAmigo++;
                break;
            case 5:
                $montecarlo++;
                break;
            case 6:
                $mercuryRacing++;
                break;
        }
    }

    $dataset->addPoint(new Point("Auto point", $autoPoint));
    $dataset->addPoint(new Point("Vipexotics", $vipexotics));
    $dataset->addPoint(new Point("Autos Jeff", $autosJeff));
    $dataset->addPoint(new Point("Autoamigo", $autoAmigo));
    $dataset->addPoint(new Point("Montecarlo", $montecarlo));
    $dataset->addPoint(new Point("Mercury Racing", $mercuryRacing));

    $chart->setDataSet($dataset);
    $chart->getPlot()->setGraphPadding(new Padding(10, 50, 70, 240));
    $chart->setTitle("Ranking de ventas");
    $chart->render("generated/demo1.png");
    ?>
    <br>
    <img src="generated/demo1.png">
</body>

</html>
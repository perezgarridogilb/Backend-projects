<html>

<head>
    <title> Ejemplo de grafica </title>
</head>

<body>
    <h3> Grafica de los votos </h3>
    <hr>
    <?PHP
    include "libchart/classes/libchart.php";
    $chart = new VerticalBarChart(700, 370);
    $dataset = new XYDataSet();

    $link = mysqli_connect("localhost", "root", "root", "votaciones");
    $resultado = mysqli_query($link, "select id_voto, partido from votos");
    while ($fila = $resultado->fetch_assoc()) {
        $id = $fila['id_voto'];
        $partido = $fila['partido'];
        switch ($partido) {
            case 'PRI':
                $PRI++;
                break;
            case 'PAN':
                $PAN++;
                break;
            case 'PRD':
                $PRD++;
                break;
            case 'Morena':
                $Morena++;
                break;
        }
    }

    $dataset->addPoint(new Point("PRI", $PRI));
    $dataset->addPoint(new Point("PAN", $PAN));
    $dataset->addPoint(new Point("PRD", $PRD));
    $dataset->addPoint(new Point("Morena", $Morena));

    $chart->setDataSet($dataset);
    $chart->getPlot()->setGraphPadding(new Padding(10, 50, 70, 240));
    $chart->setTitle("Votos para los partidos");
    $chart->render("generated/demo1.png");
    ?>
    <br>
    <img src="generated/demo1.png">
</body>

</html>
<html>

<head>
    <title> Ejemplo de grafica </title>
</head>

<body>
    <h3> Grafica de los votos </h3>
    <hr>
    <?PHP
    function ignoreLaLineaFinal(){
        $handle = fopen("salida.txt", "r");
        $count = 0;
        if ($handle) {
            $text = "";
            while (!feof($handle)) {
                $txt = trim(fgets($handle));
                if ($count < count(file("salida.txt"))-1) {
                    $text .= $txt . "\n";
                } else {
                    $text .= $txt;
                }
                $count++;
            }
        }
        fclose($handle);

        $fp1 = fopen("salida.txt", "w");
        fprintf($fp1, $text);
        fclose($fp1);
    }
    include "libchart/classes/libchart.php";
    $chart = new VerticalBarChart(700, 370);
    $dataset = new XYDataSet();
    ignoreLaLineaFinal();
    $fp = fopen("salida.txt", "r");
    while (!feof($fp)) {
        fscanf($fp, "%s %s", $nombre, $partido);
        //echo "$nombre $promedio $edad <br>";
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
            case 'Anularvoto':
                $anularVoto++;
                break;
        }
    }
    fclose($fp);

    $dataset->addPoint(new Point("PRI", $PRI));
    $dataset->addPoint(new Point("PAN", $PAN));
    $dataset->addPoint(new Point("PRD", $PRD));
    $dataset->addPoint(new Point("Morena", $Morena));
    $dataset->addPoint(new Point("Anular voto", $anularVoto));

    $chart->setDataSet($dataset);
    $chart->getPlot()->setGraphPadding(new Padding(10, 50, 70, 240));
    $chart->setTitle("Votos para los partidos");
    $chart->render("generated/demo1.png");
    ?>
    <br>
    <img src="generated/demo1.png">
</body>

</html>
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
    <?php
    $link = mysqli_connect("localhost", "root", "root");
    mysqli_select_db($link, "autos");
    if ($_GET['id']) {
        $sql20 = "select * from autos where id_consesionario =" . $_GET['id'];
    } else {
        $sql20 = "select * FROM autos";
    }
    $result20 = mysqli_query($link, $sql20);
    echo '<center>';
    echo "<table border='0' cellpadding='16' cellspacing='4'>";
    $fecha = array();
    $estado = array();
    while ($row20 = mysqli_fetch_array($result20)) {
        $i[] = $row20['imagen'];
        $estado[] = $row20['sku'];
        $id[] = $row20['id_auto'];
        $consesionario[] = $row20['id_consesionario'];
        $precio[] = $row20['precio'];
        $cantidad[] = $row20['cantidad'];
    }
    function consesionario($link, $consesionario)
    {
        $sql = "select * from consesionario where id_consesionario = $consesionario";
        $resultado1 = mysqli_query($link, $sql);
        while ($mostrar1 = mysqli_fetch_array($resultado1)) {
            $vendedor = $mostrar1['nombre'];
        }
        return "<a href='catalogo.php?id=" . $consesionario . "&nombre=" . $vendedor . "'>$vendedor</a>";
    }
    echo "<tr>";
    foreach ($i as $img) {
        echo "<br><td><center><A href='catalogo.php'><img src= '$img' width = '140' height = '90'></center></td>";
    }
    echo "</tr><tr>";
    for ($i = 0; $i < count($estado); $i++) {
        echo "<td>" . $estado[$i] . "<br>$" . $precio[$i] . "<br>Vendedor: " . consesionario($link, $consesionario[$i]) . "<br>Cantidad disponible: " 
        . $cantidad[$i] . "<br><br><a href='confirmarCompra.php?id=" . $id[$i] . "&nombre=" . $estado[$i] . "'>Comprar</a></td>";
    }

    echo "</tr></table>";
    echo '</center>';
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
</body>

</html>
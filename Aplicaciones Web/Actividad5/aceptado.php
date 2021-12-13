<html>

<head>
    <title> Resumen </title>
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
    function consesionario($conn, $id_consesionario)
    {
        $sql = "SELECT * FROM consesionario WHERE id_consesionario = $id_consesionario";
        $resultado = mysqli_query($conn, $sql);
        while ($fila = mysqli_fetch_array($resultado)) {
            $vendedor = $fila['nombre'];
        }
        return $vendedor;
    }
    function venta($conn, $id_auto, $id_consesionario)
    {
        $hoy = date("Y-m-d");
        $sql = "INSERT INTO ventas (id_auto, id_consesionario, fecha) VALUES ($id_auto, $id_consesionario, '$hoy')";
        echo "<br>Fecha de compra: " . $hoy . "<br><br>";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $sql . $conn->error . "<br>";
        }
    }
    function cantidad($conn, $cantidad, $id_auto, $id_consesionario){
        if($conn->connect_errno)
        {
            echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
            
        }
        $cantidad = $cantidad - 1;
        $sql = "UPDATE autos SET cantidad = $cantidad WHERE id_consesionario = $id_consesionario AND id_auto = $id_auto";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $sql . $conn->error . "<br>";
        }
    }
    /* Main */
    include('conexion.php');
    session_start();
    echo "<h2>Gracias por su compra</h2>";
    $id_auto = $_SESSION['id_auto'];
    $sql = "SELECT * FROM autos WHERE id_auto = $id_auto";
    $resultado = mysqli_query($conn, $sql);
    while ($fila = mysqli_fetch_array($resultado)) {
        $marca = $fila['marca'];
        $nombre = $fila['sku'];
        $imagen = $fila['imagen'];
        $precio = $fila['precio'];
        $cantidad = $fila['cantidad'];
        $id_consesionario = $fila['id_consesionario'];
    }
    echo "<center><br><img width='160' height='90' src= $imagen ><br></center>";
    echo "<br>Detalle de la compra: " . $_SESSION['id_auto'];
    echo "<br>Nombre: " . $nombre;
    echo "<br>$" . $precio;
    echo "<br>Codigo del auto: " . $id_auto;
    echo "<br>Marca: " . $marca;
    echo "<br>Vendedor: " . consesionario($conn, $id_consesionario);
    cantidad($conn, $cantidad, $id_auto, $id_consesionario);
    venta($conn, $id_auto, $id_consesionario);
    echo "<br><br><center><A href='generarPDF.php'><img src='logopdf.png' width='30' height='40'> </A></center><br><br>";
    mysqli_free_result($resultado);
    mysqli_close($conn);
    /* End */
    ?>
</body>

</html>
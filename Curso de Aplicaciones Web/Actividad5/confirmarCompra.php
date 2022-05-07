<HTML>

<head>
    <title> Actividad 5 </title>
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
    include('conexion.php');
    session_start();
    $_SESSION['id_auto'] = $_GET['id'];
    $id = $_GET['id'];
    $sql="select * from autos where id_auto = $id";
    $resultado=mysqli_query($conn,$sql);
    
    while($mostrar=mysqli_fetch_array($resultado))
    {
        $marca = $mostrar['marca'];
        $nombre = $mostrar['sku'];
        $imagen = $mostrar['imagen'];
        $precio = $mostrar['precio'];
        $cantidad = $mostrar['cantidad'];
        $consesionario = $mostrar['id_consesionario'];
    }
    $sql="select * from consesionario where id_consesionario = $consesionario";
    $resultado1=mysqli_query($conn,$sql);
    while($mostrar1=mysqli_fetch_array($resultado1))
    {
        $vendedor = $mostrar1['nombre'];
    }
    echo "<h3>Confirmar compra</h3>";
    echo "<center>";
    echo "<br><img width='260' height='180' src= $imagen ><br>";
    echo "</center>";
    echo "<br>Nombre: " . $nombre;
    echo "<br>$" . $precio;
    echo "<br>Codigo del auto: " . $_GET['id'];
    echo "<br>Marca: " . $marca;
    echo "<br>Vendedor: <a href='catalogo.php?id=" . $consesionario . "&nombre=" . $vendedor . "'>$vendedor</a>";
    echo "<br>Cantidad disponible: " . $cantidad;
    ?>
    		<center>
			<table border='0' cellpadding='16' cellspacing='4'>
					<tr>
						<td><form action='aceptado.php' method='POST'><input type='submit' name='enviar' value='Comprar'></form>
						<td><form action='catalogo.php' method='POST'><input type='submit' name='enviar1' value='Regresar'></form>
					</tr>
		</center>
	</table>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consulta</title>
</head>

<body>
	<h2>Peliculas de la videoteca</h2>
	<hr>
	<?php
	$link = mysqli_connect("localhost", "root", "root");
	mysqli_select_db($link, "videoteca");
	$result = mysqli_query($link, "select * from pelicula");
	echo "<A href = 'ranking.php'> Ranking peliculas <A/>";
	echo "<br><A href = 'insertarPelicula.php'> Insertar nueva pelicula <A/><br>";
	echo "<table border = '1'>";
	echo "<TR><td> ID </td><td> Titulo </td><td> Director </td><td> Actor </td><td> Imagen </td><Tr>";

	while ($row = mysqli_fetch_array($result)) {
		$id = $row['id_pelicula'];
		$ti = $row['titulo'];
		$di = $row['director'];
		$ac = $row['actor'];
		$img = $row['imagen'];
		/* echo "$id $ti $di $ac<br>"; */
		echo "<TR><td> $id </td><td> $ti </td><td> $di </td><td> $ac </td><td> <img src= '$img' width = '80' height = '80'>'</td><Tr>";
	}
	echo "</table>"; 
	mysqli_free_result($result);
	mysqli_close($link);
	?>
</body>

</html>
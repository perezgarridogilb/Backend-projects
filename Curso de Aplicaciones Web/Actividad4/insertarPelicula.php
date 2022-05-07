<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Insertar nueva pelicula </title>
</head>
<hr>
<h2> Insertar nueva pelicula </h2>	
<form action="insertarPelicula2.php" method = "POST" enctype="multipart/form-data">
Titulo de la pelicula
<input type="text" name = "pelicula" required>
<br><br>
Director:
<input type="text" name = "director" required>
<br><br>
Actor principal:
<input type="text" name = "actor" required>
<br><br>
Ranking de la pelicula (0..100)
<input type="text" name = "director" required>
<br><br>
<input type="FILE" name="foto">
<br><br>
<input type="submit" name="enviar" value="Registar pelicula">

</form>
<body>
</body>
</html>
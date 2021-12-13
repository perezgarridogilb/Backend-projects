<HTML>

<head>
    <title> Examen </title>
</head>

<body>
    <h1> Examen: </h1>
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
            Selecciona el alumno de tu preferencia: <select name="event" required>
                <option value=""> Elegir un nombre </option>
                <?php
                $conn = mysqli_connect("localhost", "root", "root", "kardex");
                $resultado = mysqli_query($conn, "select * from alumnos");
                while ($fila = $resultado->fetch_assoc()) {
                    $id = $fila['id_estudiante'];
                    $nombre = $fila['nombre'];
                    echo "<option value = $id|$nombre>$id - $nombre </option>";
                }
                ?>
            </select><br><br>
            Estas son tus asignaturas: <br><br>

            <br><input type="submit" name="enviar" value="Mostrar kardex">
        </form>
        <?php
        include('conexion.php');
        if ($_POST['enviar']) {
            $datas = explode('|', $_POST["event"]);
            $real_id = $datas[0];
            $id = $datas[1];

            /*
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $sql . $conn->error . "<br>";
            }
            */

            $sql = "SELECT * FROM materia WHERE id_estudiante = $real_id AND id_asignatura = 1";
            $resultado = mysqli_query($conn, $sql);
            $count = 0;
            $count1 = 0;
            $calificacionSuma = 0;
            while ($fila = mysqli_fetch_array($resultado)) {
                $materia = $fila['materia'];
                $calificacion = $fila['calificacion'];
                $calificacionSuma += $calificacion;
                if ($calificacion <= 5){
                    $count++;
                }else{
                    $count1++;
                }
            }
            //echo "Error: " . $sql . "<br>" . $sql . $conn->error . "<br>";
            echo $materia . ' ' . ' :  '  . $calificacion;

            $sql = "SELECT * FROM materia WHERE id_estudiante = $real_id AND id_asignatura = 2";
            $resultado = mysqli_query($conn, $sql);

            while ($fila = mysqli_fetch_array($resultado)) {
                $materia = $fila['materia'];
                $calificacion = $fila['calificacion'];
                $calificacionSuma += $calificacion;
                if ($calificacion <= 5){
                    $count++;
                }else{
                    $count1++;
                }
            }
            //echo "Error: " . $sql . "<br>" . $sql . $conn->error . "<br>";
            echo '<br>'.$materia . ' ' . ' :  '  . $calificacion;

            $sql = "SELECT * FROM materia WHERE id_estudiante = $real_id AND id_asignatura = 3";
            $resultado = mysqli_query($conn, $sql);

            while ($fila = mysqli_fetch_array($resultado)) {
                $materia = $fila['materia'];
                $calificacion = $fila['calificacion'];
                $calificacionSuma += $calificacion;
                if ($calificacion <= 5){
                    $count++;
                }else{
                    $count1++;
                }
            }
            //echo "Error: " . $sql . "<br>" . $sql . $conn->error . "<br>";
            echo '<br>'.$materia . ' ' . ':  '  . $calificacion;

            $sql = "SELECT * FROM materia WHERE id_estudiante = $real_id AND id_asignatura = 4";
            $resultado = mysqli_query($conn, $sql);

            while ($fila = mysqli_fetch_array($resultado)) {
                $materia = $fila['materia'];
                $calificacion = $fila['calificacion'];
                $calificacionSuma += $calificacion;
                if ($calificacion <= 5){
                    $count++;
                }else{
                    $count1++;
                }
            }
            //echo "Error: " . $sql . "<br>" . $sql . $conn->error . "<br>";
            echo '<br>'.$materia . ' ' . ':  '  . $calificacion;

            $sql = "SELECT * FROM materia WHERE id_estudiante = $real_id AND id_asignatura = 5";
            $resultado = mysqli_query($conn, $sql);

            while ($fila = mysqli_fetch_array($resultado)) {
                $materia = $fila['materia'];
                $calificacion = $fila['calificacion'];
                $calificacionSuma += $calificacion;
                if ($calificacion <= 5){
                    $count++;
                }else{
                    $count1++;
                }
            }
            //echo "Error: " . $sql . "<br>" . $sql . $conn->error . "<br>";
            echo '<br>'.$materia . ' ' . ':  '  . $calificacion;
        }

        

        $sql = "SELECT * FROM alumnos WHERE id_estudiante = $real_id";
        $resultado = mysqli_query($conn, $sql);
        while ($fila = mysqli_fetch_array($resultado)) {
            $name = $fila['nombre'];
            $promedio = $fila['promedio'];
            $imagen = $fila['imagen'];
        }
        echo "<br><br>Te llamas: " . $name . "<br>";
        echo "Materias aprobadas: " . $count1;
        echo "<br>Materias reprobadas: " . $count;
        echo "<br>Este es tu promedio: " . (($calificacionSuma)/5). " <br><br>";

        echo "<br><img src = $imagen width='80' height='80'>"
        ?>
    </body>

    </html>
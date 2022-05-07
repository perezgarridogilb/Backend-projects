<HTML>

<head>
  <title> Actividad 1 </title>
</head>

<body>
  <h1> Actividad 1: Operaciones con matrices </h1>
  <hr>
  <?PHP

  function deOperacione($self, $Matriz1, $Matriz2, $renglonesA, $columnasA, $renglonesB, $columnasB)
  {
    switch ($self) {
      case 1:
        # Suma
        printf("<br>Suma: <br>");
        if ($columnasA == $columnasB && $renglonesA == $renglonesB) {
          for ($j = 0; $j < $renglonesA; $j++) {
            for ($i = 0; $i < $columnasB; $i++) {
              $Matriz3[$j][$i] = $Matriz1[$j][$i] + $Matriz2[$j][$i];
            }
          }
          echo "<br>";
          for ($j = 0; $j < $renglonesA; $j++) {
            for ($i = 0; $i < $columnasB; $i++) {
              echo $Matriz3[$j][$i];
              echo " ";
            }
            echo "<br>";
          }
        } else {
          echo "La operación no existe";
        }
        break;
      case 2:
        # Multiplicacion
        printf("<br>Multiplicación: <br>");
        if ($columnasA ==  $renglonesB && $renglonesA !=  $columnasB) {
          for ($j = 0; $j < $columnasB; $j++) {
            for ($i = 0; $i < $renglonesA; $i++) {
              $suma = 0;
              for ($k = 0; $k < $columnasA; $k++) {
                $suma += $Matriz1[$i][$k] * $Matriz2[$k][$j];
              }
              $Matriz3[$i][$j] = $suma;
            }
          }
          echo "<br>";
          for ($j = 0; $j < $renglonesA; $j++) {
            for ($i = 0; $i < $columnasB; $i++) {
              echo $Matriz3[$j][$i];
              echo " ";
            }
            echo "<br>";
          }
        } else if ($renglonesA ==  $columnasB) {
          for ($j = 0; $j < $columnasA; $j++) {
            for ($i = 0; $i < $renglonesB; $i++) {
              $suma = 0;
              for ($k = 0; $k < $columnasA; $k++) {
                $suma += $Matriz2[$i][$k] * $Matriz1[$k][$j];
                error_reporting(0);
              }
              $Matriz3[$i][$j] = $suma;
            }
          }
          echo "<br>";
          for ($j = 0; $j < $renglonesB; $j++) {
            for ($i = 0; $i < $columnasA; $i++) {
              echo $Matriz3[$j][$i];
              echo " ";
            }
            echo "<br>";
          }
        } else {
          echo "La operación no existe";
        }
        break;
      case 3:
        # Diferencia
        printf("<br>Diferencia: <br>");
        if ($columnasA == $columnasB && $renglonesA == $renglonesB) {
          for ($j = 0; $j < $renglonesA; $j++) {
            for ($i = 0; $i < $columnasB; $i++) {
              $Matriz3[$j][$i] = $Matriz1[$j][$i] + ($Matriz2[$j][$i] * -1);
            }
          }
          echo "<br>";
          for ($j = 0; $j < $renglonesA; $j++) {
            for ($i = 0; $i < $columnasB; $i++) {
              echo $Matriz3[$j][$i];
              echo " ";
            }
            echo "<br>";
          }
        } else {
          echo "La operación no existe";
        }
        break;
    }
  }

  /*  Main */
  $renglonesA = 3;
  $columnasA = 5;
  $renglonesB = 5;
  $columnasB = 3;

  for ($j = 0; $j < $renglonesA; $j++) {
    for ($i = 0; $i < $columnasA; $i++) {
      $Matriz1[$j][$i] = rand(0, 3);
    }
  }
  for ($j = 0; $j < $renglonesB; $j++) {
    for ($i = 0; $i < $columnasB; $i++) {
      $Matriz2[$j][$i] = rand(0, 3);
    }
  }
  echo "A = <br><br>";
  for ($j = 0; $j < $renglonesA; $j++) {
    for ($i = 0; $i < $columnasA; $i++) {
      echo $Matriz1[$j][$i];
      echo " ";
    }
    echo "<br>";
  }
  echo "<br>B = <br><br>";
  for ($j = 0; $j < $renglonesB; $j++) {
    for ($i = 0; $i < $columnasB; $i++) {
      echo $Matriz2[$j][$i];
      echo " ";
    }
    echo "<br>";
  }
  $count = 1;
  while ($count <= 3) {
    deOperacione($count, $Matriz1, $Matriz2, $renglonesA, $columnasA, $renglonesB, $columnasB);
    echo "<br>";
    $count++;
  }
  ?>
</body>

</HTML>
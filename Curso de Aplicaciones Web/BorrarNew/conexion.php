<?php 
function Conectarse() 
{ 
   if (!($link=mysqli_connect("localhost","root","root"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysqli_select_db($link, "videoteca")) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
?>

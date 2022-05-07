<?php
function consesionario($link, $consesionario)
{
   $sql = "select * from consesionario where id_consesionario = $consesionario";
   $resultado1 = mysqli_query($link, $sql);
   while ($mostrar1 = mysqli_fetch_array($resultado1)) {
      $vendedor = $mostrar1['nombre'];
   }
   return $vendedor;
}
require('fpdf16/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();   //Agregar una pagina
$pdf->SetFont('Arial', 'B', 14);   //Letra Arial, negrita (Bold), tam. 20

session_start();
$id_auto = $_SESSION['id_auto'];
$link = mysqli_connect("localhost", "root", "root");
mysqli_select_db($link, "autos");
$result = mysqli_query($link, "select id_auto,sku,cantidad,precio, id_consesionario from autos where id_auto = $id_auto");

//$pdf->Image('videoteca.jpg',5,8,15);
$pdf->Cell(80, 15, '        Venta de automoviles', 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'ID       Articulo       Vendedor               Precio    Iva    Total', 0, 1);
$pdf->Cell(0, 10, '_____________________________________________________________________', 0, 1);
$pdf->SetFont('Arial', '', 10);
while ($row = mysqli_fetch_array($result)) {
   $id_auto = $row["id_auto"];
   $sku = $row["sku"];
   $precio = $row["precio"];
   $iv = 0.16 * $precio;
   $total = $iv + $precio;
   $consesionario = $row["id_consesionario"];
   $consesionario = consesionario($link, $consesionario);
   $pdf->Cell(0, 10, $id_auto . '   ' . $sku . '   ' . $consesionario . '    $' . $precio . '    $' . $iv . '   $' . $total, 0, 1);
}
$hoy = date("Y-m-d");
$pdf->Cell(0, 10, 'Fecha de compra: ' . $hoy, 0, 1);
$pdf->SetTextColor(0, 0, 255);
$pdf->SetFont('', 'U');
$pdf->Write(5, 'Venta de autos', 'http://localhost:8888/Proyecto%201/Actividad5/catalogo.php');
$pdf->Output();
mysqli_free_result($result);
mysqli_close($link);
?>
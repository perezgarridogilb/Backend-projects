<?php
	
	$conn = new mysqli("localhost","root","root","kardex");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
		
	}
	
	?>
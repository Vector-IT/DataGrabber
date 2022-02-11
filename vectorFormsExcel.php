<?php 
	include "conexion.php";

	header("Content-Type: application/vnd.ms-excel");
	
	header("Expires: 0");
	
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	
	header("content-disposition: attachment;filename=VectorForms.xls");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="author" content="Vector-IT">
		<link rel="shortcut icon" href="icono.png" type="image/png">
		
		<title>Vector Forms</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style type="text/css">
			th, td {border: 1px solid;}
		</style>

	</head>
	<body>
	<?php 
		$strSQL = "SELECT Field1, date_add(Fecha, interval 3 hour) Fecha, Field2, Field3, Field4, Field5, Field6, Field7, Field8, Field9, Field10, Field11, Field12, Field13, Field14, Field15";
		$strSQL.= " FROM vectorForms";
		$strSQL.= " ORDER BY Fecha DESC";
		
		$tabla = cargarTabla($strSQL);
		
		$salida = '';
		
		if (mysqli_num_rows($tabla) > 0) {
			$salida.= $crlf.'<table class="table table-striped table-condense table-bordered">';
			$salida.= $crlf.'<tr>';
			$salida.= $crlf.'<th>Landing</th>';
			$salida.= $crlf.'<th>Fecha</th>';
			$salida.= $crlf.'<th>Nombre y Apellido</th>';
			$salida.= $crlf.'<th>Tel&eacute;fono</th>';
			$salida.= $crlf.'<th>E-Mail</th>';
			$salida.= $crlf.'<th>Mensaje</th>';
			$salida.= $crlf.'<th>Opcional 1</th>';
			$salida.= $crlf.'<th>Opcional 2</th>';
			$salida.= $crlf.'<th>Opcional 3</th>';
			$salida.= $crlf.'<th>Opcional 4</th>';
			$salida.= $crlf.'<th>Opcional 5</th>';
			$salida.= $crlf.'<th>Opcional 6</th>';
			$salida.= $crlf.'<th>Opcional 7</th>';
			$salida.= $crlf.'<th>Opcional 8</th>';
			$salida.= $crlf.'<th>Opcional 9</th>';
			$salida.= $crlf.'<th>Opcional 10</th>';
			$salida.= $crlf.'</tr>';
				
			while ($fila = $tabla->fetch_array()) {
				$salida.= $crlf.'<tr>';

				$salida.= $crlf.'<td>'.$fila[0].'</td>';
				$salida.= $crlf.'<td>'.$fila[1].'</td>';
				$salida.= $crlf.'<td>'.$fila[2].'</td>';
				$salida.= $crlf.'<td>'.$fila[3].'</td>';
				$salida.= $crlf.'<td>'.$fila[4].'</td>';
				$salida.= $crlf.'<td>'.$fila[5].'</td>';
				$salida.= $crlf.'<td>'.$fila[6].'</td>';
				$salida.= $crlf.'<td>'.$fila[7].'</td>';
				$salida.= $crlf.'<td>'.$fila[8].'</td>';
				$salida.= $crlf.'<td>'.$fila[9].'</td>';
				$salida.= $crlf.'<td>'.$fila[10].'</td>';
				$salida.= $crlf.'<td>'.$fila[11].'</td>';
				$salida.= $crlf.'<td>'.$fila[12].'</td>';
				$salida.= $crlf.'<td>'.$fila[13].'</td>';
				$salida.= $crlf.'<td>'.$fila[14].'</td>';
				$salida.= $crlf.'<td>'.$fila[15].'</td>';
						
				$salida.= $crlf.'</tr>';
			}
			
			$salida.= $crlf.'</table>';
		}
		$tabla->free();
		
		echo $salida;
	?>
	</body>

</html>
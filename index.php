<?php 
	session_start();

	include "conexion.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="author" content="Vector-IT">
		<link rel="shortcut icon" href="icono.png" type="image/png">

		<title>Vector Forms</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://use.fontawesome.com/62cc609d1d.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style type="text/css">
			th, td {border: 1px solid;}
		</style>

		<script src="indexForms.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$("#divMsjLogin").hide();
				<?php
					if (!isset($_SESSION['is_logged_in'])) {
						echo "$('#login-dialog').modal('show');";
					}
				?>
				
				$('#login-dialog').on('shown.bs.modal', function () {
					$('#usuario').focus()
				});				
			});
		</script>
	</head>
	<body>
	<div class="modal fade" id="login-dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Acceder</h4>
				</div>
				<form id="login-form" class="form-horizontal" method="post" data-dialog="#login-dialog">
					<input type="hidden" id="returnUrl" value="-1" /> 
					<div class="modal-body">
						<div class="form-group">
							<label for="usuario" class="control-label col-md-4">Usuario:</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="usuario" placeholder="Usuario" required />
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="control-label col-md-4">Contrase&ntilde;a:</label>
							<div class="col-md-8">
								<input type="password" class="form-control" id="password" placeholder="Contrase&ntilde;a" required />
							</div>
						</div>
						<div id="divMsjLogin" class="divMsj alert alert-danger" role="alert">
							<span id="txtHint">Info</span>
						</div>
					</div>
					<div class="modal-footer" id="divBotones">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Acceder</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<?php if (isset($_SESSION['is_logged_in'])) { ?>

    <button class="btn btn-default" style="position:fixed; left:0;" onclick="location.href='vectorFormsExcel.php'"><i class="fa fa-table fa-fw" atia-hidden="true"></i> Descargar Excel</button>
	<button class="btn btn-default" style="position:fixed; right:0;" onclick="location.href='logout.php'"><i class="fa fa-sign-out fa-fw" atia-hidden="true"></i> Salir</button>
    <br><br>
	<?php 
		$strSQL = "SELECT Field1, date_add(Fecha, interval 3 hour) Fecha, Field2, Field3, Field4, Field5, Field6, Field7, Field8, Field9, Field10, Field11, Field12, Field13, Field14, Field15";
		$strSQL.= " FROM vectorForms";
		$strSQL.= " ORDER BY Fecha DESC";
		
		$tabla = cargarTabla($strSQL);
		
		$salida = '';
		
		if ($tabla->num_rows > 0) {
			$salida.= $crlf.'<table class="table table-striped table-condense table-bordered table-hover">';
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
	<?php }?>
	</body>
</html>
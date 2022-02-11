<?php 
	$dbhost = "localhost";
	$db = "hiadesco_vectorForms";
	$dbuser = "hiadesco_vector";
	$dbpass = "vector123it";
	$crlf = "\n";
	
	function ejecutarCMD($strSQL) {
		global $dbhost, $dbuser, $dbpass, $db, $crlf;
		
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
		$conn->set_charset("utf8");
	
		$strError = "";
	
		if (!$conn->query($strSQL))
			$strError = $conn->error;
		$conn->close();
	
		if ($strError == "")
			return true;
		else
			return $strError;
	}

	function buscarDato($strSQL) {
		global $dbhost, $dbuser, $dbpass, $db, $crlf;
		
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
		$conn->set_charset("utf8");
	
		$strSalida = "";
	
		if (!($tabla = $conn->query($strSQL))) {
			$strSalida = "Error al realizar la consulta.";
		}
		else {
			$fila = $tabla->fetch_array();
			$strSalida = $fila[0];
			$tabla->free();
		}
	
		$conn->close();
		 
		return $strSalida;
	}
	
	function cargarTabla($strSQL) {
		global $dbhost, $dbuser, $dbpass, $db, $crlf;
		
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
		$conn->set_charset("utf8");
		
		$tabla = $conn->query($strSQL);
		
		$conn->close();
		
		return $tabla;
	}
?>
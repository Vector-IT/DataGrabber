<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vector-IT">
    <link rel="shortcut icon" href="icono.png" type="image/png">
	
    <title>Vector Forms Test</title>
</head>
<body>
    <a href="#" onclick="history.go(-1);">Volver</a><br>
<?php
    $salida = "";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["Field1"])) {
		    $salida.= '<br>Campo 1: '.$_POST["Field1"];
	    }

        if (isset($_POST["Field2"])) {
		    $salida.= '<br>Campo 2: '.$_POST["Field2"];
	    }

        if (isset($_POST["Field3"])) {
		    $salida.= '<br>Campo 3: '.$_POST["Field3"];
	    }

        if (isset($_POST["Field4"])) {
		    $salida.= '<br>Campo 4: '.$_POST["Field4"];
	    }

        if (isset($_POST["Field5"])) {
		    $salida.= '<br>Campo 5: '.$_POST["Field5"];
	    }

        if (isset($_POST["Field6"])) {
		    $salida.= '<br>Campo 6: '.$_POST["Field6"];
	    }

        if (isset($_POST["Field7"])) {
		    $salida.= '<br>Campo 7: '.$_POST["Field7"];
	    }

        if (isset($_POST["Field8"])) {
		    $salida.= '<br>Campo 8: '.$_POST["Field8"];
	    }

        if (isset($_POST["Field9"])) {
		    $salida.= '<br>Campo 9: '.$_POST["Field9"];
	    }

        if (isset($_POST["Field10"])) {
		    $salida.= '<br>Campo 10: '.$_POST["Field10"];
	    }

        if (isset($_POST["Field11"])) {
		    $salida.= '<br>Campo 11: '.$_POST["Field11"];
	    }

        if (isset($_POST["Field12"])) {
		    $salida.= '<br>Campo 12: '.$_POST["Field12"];
	    }

        if (isset($_POST["Field13"])) {
		    $salida.= '<br>Campo 13: '.$_POST["Field13"];
	    }

        if (isset($_POST["Field14"])) {
		    $salida.= '<br>Campo 14: '.$_POST["Field14"];
	    }

        if (isset($_POST["Field15"])) {
		    $salida.= '<br>Campo 15: '.$_POST["Field15"];
	    }
    }
    echo $salida;
?>
</body>
</html>
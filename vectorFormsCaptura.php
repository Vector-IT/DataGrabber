<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: origin, content-type, accept");

	if($_SERVER["REQUEST_METHOD"] == "GET") {
        
        include "conexion.php";
        
        if (isset($_GET["Field1"])) {
		    $Field1 = $_GET["Field1"];
	    }
        else
        {
            $Field1 = "";
        }

        if (isset($_GET["Field2"])) {
		    $Field2 = $_GET["Field2"];
	    }
        else
        {
            $Field2 = "";
        }

        if (isset($_GET["Field3"])) {
		    $Field3 = $_GET["Field3"];
	    }
        else
        {
            $Field3 = "";
        }

        if (isset($_GET["Field4"])) {
		    $Field4 = $_GET["Field4"];
	    }
        else
        {
            $Field4 = "";
        }

        if (isset($_GET["Field5"])) {
		    $Field5 = $_GET["Field5"];
	    }
        else
        {
            $Field5 = "";
        }

        if (isset($_GET["Field6"])) {
		    $Field6 = $_GET["Field6"];
	    }
        else
        {
            $Field6 = "";
        }

        if (isset($_GET["Field7"])) {
		    $Field7 = $_GET["Field7"];
	    }
        else
        {
            $Field7 = "";
        }

        if (isset($_GET["Field8"])) {
		    $Field8 = $_GET["Field8"];
	    }
        else
        {
            $Field8 = "";
        }

        if (isset($_GET["Field9"])) {
		    $Field9 = $_GET["Field9"];
	    }
        else
        {
            $Field9 = "";
        }

        if (isset($_GET["Field10"])) {
		    $Field10 = $_GET["Field10"];
	    }
        else
        {
            $Field10 = "";
        }

        if (isset($_GET["Field11"])) {
		    $Field11 = $_GET["Field11"];
	    }
        else
        {
            $Field11 = "";
        }

        if (isset($_GET["Field12"])) {
		    $Field12 = $_GET["Field12"];
	    }
        else
        {
            $Field12 = "";
        }

        if (isset($_GET["Field13"])) {
		    $Field13 = $_GET["Field13"];
	    }
        else
        {
            $Field13 = "";
        }

        if (isset($_GET["Field14"])) {
		    $Field14 = $_GET["Field14"];
	    }
        else
        {
            $Field14 = "";
        }

        if (isset($_GET["Field15"])) {
		    $Field15 = $_GET["Field15"];
	    }
        else
        {
            $Field15 = "";
        }

        $strSQL = "INSERT INTO vectorForms(Field1, Field2, Field3, Field4, Field5, Field6, Field7, Field8, Field9, Field10, Field11, Field12, Field13, Field14, Field15)";
        $strSQL.= " VALUES('{$Field1}', '{$Field2}', '{$Field3}', '{$Field4}', '{$Field5}', '{$Field6}', '{$Field7}', '{$Field8}', '{$Field9}', '{$Field10}', '{$Field11}', '{$Field12}', '{$Field13}', '{$Field14}', '{$Field15}')";

        $result = ejecutarCMD($strSQL);

/*
        if (!$result) 
            echo "1";
        else 
            echo "0";
*/            
    }

?>
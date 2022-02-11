$(function() {
    $("form.vectorForm").submit(function () {
        var valor1 = "";
        var valor2 = "";
        var valor3 = "";
        var valor4 = "";
        var valor5 = "";
        var valor6 = "";
        var valor7 = "";
        var valor8 = "";
        var valor9 = "";
        var valor10 = "";
        var valor11 = "";
        var valor12 = "";
        var valor13 = "";
        var valor14 = "";
        var valor15 = "";

        if ($('.vectorField1').val()) {
            valor1 = $(".vectorField1").val().trim();
        }
        if ($('.vectorField2').val()) {
            valor2 = $(".vectorField2").val().trim();
        }
        if ($('.vectorField3').val()) {
            valor3 = $(".vectorField3").val().trim();
        }
        if ($('.vectorField4').val()) {
            valor4 = $(".vectorField4").val().trim();
        }
        if ($('.vectorField5').val()) {
            valor5 = $(".vectorField5").val().trim();
        }
        if ($('.vectorField6').val()) {
            valor6 = $(".vectorField6").val().trim();
        }
        if ($('.vectorField7').val()) {
            valor7 = $(".vectorField7").val().trim();
        }
        if ($('.vectorField8').val()) {
            valor8 = $(".vectorField8").val().trim();
        }
        if ($('.vectorField9').val()) {
            valor9 = $(".vectorField9").val().trim();
        }
        if ($('.vectorField10').val()) {
            valor10 = $(".vectorField10").val().trim();
        }
        if ($('.vectorField11').val()) {
            valor11 = $(".vectorField11").val().trim();
        }
        if ($('.vectorField12').val()) {
            valor12 = $(".vectorField12").val().trim();
        }
        if ($('.vectorField13').val()) {
            valor13 = $(".vectorField13").val().trim();
        }
        if ($('.vectorField14').val()) {
            valor14 = $(".vectorField14").val().trim();
        }
        if ($('.vectorField15').val()) {
            valor15 = $(".vectorField15").val().trim();
        }

        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                return true;
            }
        };
        var url = "http://hiades.com.ar/datos/vectorFormsCaptura.php";
        url+= "?Field1=" + valor1;
        url+= "&Field2=" + valor2;
        url+= "&Field3=" + valor3;
        url+= "&Field4=" + valor4;
        url+= "&Field5=" + valor5;
        url+= "&Field6=" + valor6;
        url+= "&Field7=" + valor7;
        url+= "&Field8=" + valor8;
        url+= "&Field9=" + valor9;
        url+= "&Field10=" + valor10;
        url+= "&Field11=" + valor11;
        url+= "&Field12=" + valor12;
        url+= "&Field13=" + valor13;
        url+= "&Field14=" + valor14;
        url+= "&Field15=" + valor15;
        
        xmlhttp.open("GET", url, false);
        xmlhttp.send();
    });
});

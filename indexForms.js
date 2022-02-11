$(function() {
    
    var $form;
    var $msgShowTime = 1000;

    $("form").submit(function () {
    	$form = $(this);
    	
        switch(this.id) {
            case "login-form":
                var frmData = new FormData();
                frmData.append("usuario", $('#usuario').val().trim());
                frmData.append("password", $('#password').val().trim());
                frmData.append("returnUrl", $("#returnUrl").val());

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
    					if (xmlhttp.responseText.indexOf('ERROR') == -1) {
    						msgChange($('#divMsjLogin'), $('#divBotones'), true, "Login OK", true);
    					}
    					else {
    						msgChange($('#divMsjLogin'), $('#divBotones'), false, "Usuario o contrase&ntilde;a incorrectos.", false);
    					}
    				}
    			};

    			xmlhttp.open("POST","php/loginProcesar.php",true);
    			xmlhttp.send(frmData);
    			return false;
        }
    });
    
    function msgChange($divMensaje, $divBotones, respuesta, mensaje, refresh) {
    	$divMensaje.find("#txtHint").html(mensaje);
		
		if (respuesta) {
			$divMensaje.removeClass("alert-danger");
			$divMensaje.addClass("alert-success");
			$divBotones.hide();
		}
		else {
			$divMensaje.removeClass("alert-success");
			$divMensaje.addClass("alert-danger");
			$divBotones.show();
		}
		
		$divMensaje.show();

		if (respuesta) {
			setTimeout(function() {
				$divMensaje.hide();
				var dialog = $form.data("dialog");
				if (dialog != "")
					$(dialog).modal('toggle');
				
				if (refresh)
					location.reload();
				
	  		}, $msgShowTime);
		}
    }
});
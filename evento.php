<?php
//Inicio envio de Email	

$msgPrincipal = "<div align ='center'><h3 style='font-size:23px; text-align: center; font-weight:bold;'>Charla y taller (Atomic Swap en Bitcoin)</b></h2>";
$msgSecundario = "

		    <p>El evento es organizado por Torogoz Dev y es gratis.</p>
			<p>Fecha: <b>Sábado 25 de febrero</b></p>
			<p>Hora: <b>10 AM (GMT-6 - El Salvador)</b></p>
			<p>Lugar: <b>La Casa del Bitcoin en 9a. Calle Pte. Casa 5130, San Salvador</b><br/></p>
			<p>Mapa: <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://maps.app.goo.gl/MbNXwU2RLCYvqiqb7'>Casa del Bitcoin</a></p>
		    <p><b>Parte 1: Teórico expositivo.</b></p>		
		
			<p>¿Cómo funcionan los intercambios atómicos en general?</p>			
			<p>¿Cómo funcionan los intercambios atómicos en la plataforma boltz.exchange <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://boltz.exchange/'>https://boltz.exchange/</a></p>			
		    <p><b>Parte 2: taller</b> </p>				
			
			<p>Primera opción: Escribir un pequeño programa que orqueste un intercambio atómico a través de nuestra API de boltz.exchange. <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://docs.boltz.exchange/en/latest/api/'>https://docs.boltz.exchange/en/latest/api/</a></p>			
			<p>Segunda opción: sí el tiempo no alcanza, haremos uso de CURL para conectarse a la API y hacer diversas pruebas</p>			
			
			<p><b>Requisitos para participar del taller práctico.</b></p>		
		
			
			<p>
			- Llevar su laptop con sus herramientas de desarrollo, programas para consumir APIS.<br> 
			- Llevar instalada una wallet de BITCOIN TESTNET <br> 
			- Llevar instalada una wallet de Lightning TESTNET <br> 
			- Nodo LN lnd/cln en TESTNET<br> 
			- Leer sobre intercambios atómicos y mirar las API docs -- <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://docs.boltz.exchange/en/latest/api/'>https://docs.boltz.exchange/en/latest/api/</a>
			</p>

			<p><b>Expositores</b></p>	


			
			<p>
			
			Michael  <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://twitter.com/michael1011at'>https://twitter.com/michael1011at</a>(español)<br> 
            Kilian Rausch:  <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://twitter.com/kilrau '>https://twitter.com/kilrau </a>(ingles)<br> 
			</p>
</div>";


if(isset($_POST['boton1'])){

    if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']))
	{
        $errors[3] = '<span class="error">Ingrese un email valido</span>';
    }
	else
	{
		//echo "Ingreso a esta parte boton1";
        $evento = 'Charla y taller (Atomic Swap en Bitcoin)';		
        $email 	= $_POST['email'];
		$nombre = $_POST['nombre'];
		$taller = $_POST['taller'];
		$Fecha = 'Sábado 25 de febrero';	
		$Hora = '10 AM (GMT-6 - El Salvador)';
		$Direccion = "La Casa del Bitcoin en 9a. Calle Pte. Casa 5130, San Salvador";
		$Mapa = "<a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://maps.app.goo.gl/MbNXwU2RLCYvqiqb7'>Casa del Bitcoin</a>";
		SendMessageEmail ($nombre,$evento,$taller,$email,$Fecha,$Hora,$Direccion,$Mapa );
    }
}
function SendMessageEmail($nombre,$evento,$taller,$email,$Fecha,$Hora,$Direccion,$Mapa )
{
	$correo_admin         = 'ishi@torogoz.dev';
    $correo_destinatario  =  $email.",".$correo_admin;
	$nombre_remitente 	  = 'Torogoz Dev';
	$correo_remitente 	  = 'info@torogoz.dev';
	$asunto               = "$nombre: ha sido inscrito al evento (Atomic Swap en Bitcoin)";
	$mensaje ='
		<html>
        <head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<style type="text/css">
		body {
			font-family: "trebuchet MS", "Lucida sans", Arial;
			font-size: 12pt;
			color: #444;
			background: #fbf8e9;
			padding: 5px;
		}
		</style>
	    </head>
        <body>'; 
	$mensaje .= "
	    </br>
		<b>Nombre:</b> $nombre   <br><br> 	
		<b>Evento:</b> $evento   <br><br>
		<b>Taller:</b> $taller   <br><br> 		
		<b>Hora:</b>   $Hora     <br><br> 
		<b>Fecha:</b>  $Fecha    <br><br> 
	    <b>Direccion:</b>$Direccion     <br><br> 
		<b>Google Maps :</b>   $Mapa     <br><br> 
		<b>Email:</b>  $email    <br><br>
		<img src='https://www.bitcoin.comercioazul.com/images/evento-torogoz.png'><br><br> 
		<hr>
		"; 
	$mensaje .= "				

		    <p>El evento es organizado por Torogoz Dev y es gratis.</p>
			<p>Fecha: <b>Sábado 25 de febrero</b></p>
			<p>Hora: <b>10 AM (GMT-6 - El Salvador)</b></p>
			<p>Lugar: <b>La Casa del Bitcoin en 9a. Calle Pte. Casa 5130, San Salvador</b><br/></p>
			<p>Mapa: <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://maps.app.goo.gl/MbNXwU2RLCYvqiqb7'>Casa del Bitcoin</a></p>
		    <p><b>Parte 1: Teórico expositivo.</b></p>		
		
			<p>¿Cómo funcionan los intercambios atómicos en general?</p>			
			<p>¿Cómo funcionan los intercambios atómicos en la plataforma boltz.exchange <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://boltz.exchange/'>https://boltz.exchange/</a></p>			
		    <p><b>Parte 2: taller</b> </p>				
			
			<p>Primera opción: Escribir un pequeño programa que orqueste un intercambio atómico a través de nuestra API de boltz.exchange. <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://docs.boltz.exchange/en/latest/api/'>https://docs.boltz.exchange/en/latest/api/</a></p>			
			<p>Segunda opción: sí el tiempo no alcanza, haremos uso de CURL para conectarse a la API y hacer diversas pruebas</p>			
			
			<p><b>Requisitos para participar del taller práctico.</b></p>		
		
			
			<p>
			- Llevar su laptop con sus herramientas de desarrollo, programas para consumir APIS.<br> 
			- Llevar instalada una wallet de BITCOIN TESTNET <br> 
			- Llevar instalada una wallet de Lightning TESTNET <br> 
			- Nodo LN lnd/cln en TESTNET<br> 
			- Leer sobre intercambios atómicos y mirar las API docs -- <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://docs.boltz.exchange/en/latest/api/'>https://docs.boltz.exchange/en/latest/api/</a>
			</p>

			<p><b>Expositores</b></p>	


			
			<p>
			
			Michael  <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://twitter.com/michael1011at'>https://twitter.com/michael1011at</a>(español)<br> 
            Kilian Rausch:  <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://twitter.com/kilrau '>https://twitter.com/kilrau </a>(ingles)<br> 
			</p>	
			
		"; 

		
		
	$mensaje .= "	
		<p  style='font-family:Verdana, Arial, Tahoma;font-size:10pt;color:#444;'>-------------------- <br>
		Atentamente; <br>
		<!--<a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://www.facebook.com/bitcointhesavior'>IshiKawa</a><br>-->
        <a target='_blank' style='text-decoration: none; color:#0000ff;' href='https://www.torogoz.dev'>Torogoz Dev</a><br>		
		$correo_remitente</p>"; 				
		
	$mensaje .="</body></html>";

	/* Hacemos uso de mb_encode_mimeheader para codificar correctamente caracteres especiales */
	$headers = 'From: "' . mb_encode_mimeheader($nombre_remitente) . '" <' . $correo_remitente . ">\r\n"
	  . 'Reply-To: ' . $correo_remitente . "\r\n"
	  . 'X-Mailer: PHP/' . phpversion() . "\r\n";
	  
    /* Estas son las cabeceras básicas para el envío de UTF-8 usando codificación de 8 bits */
    $header_on = "MIME-Version: 1.0\r\nContent-type: text/html; charset=\"UTF-8\"\r\nContent-Transfer-Encoding: 8bit\r\n";	  	  

	/* Enviamos el correo y mostramos un mensaje dependiendo de la salida de la función mail */
    mailutf8($correo_destinatario,$asunto,$mensaje,$header_on . $headers);	
}

function mailutf8($correo_destinatario,$asunto,$mensaje,$header)
{	
	if (mail($correo_destinatario,mb_encode_mimeheader($asunto),$mensaje,$header)){
		echo "<p align ='center'><strong> Registro exitoso</strong></p>";
	} else {
		echo"<p align ='center'><strong> Oops, error en el registro</strong></p>";
	}
}

?>
<html>
<head>
<title>Educando sobre BITCOIN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="msapplication-tap-highlight" content="no">
<meta name="description" content="Atomic Swap en Bitcoin">
<meta property="twitter:title" content="Bitcoin">
<meta property="og:url" content="https://bitcoin.comercioazul.com">
<meta property="og:image" content="https://www.bitcoin.comercioazul.com/images/evento-torogoz.png">
<meta property="twitter:description" content="Atomic Swap en Bitcoin">
<meta name="twitter:card" content="summary_large_image">
<meta name="robots" content="index, follow">

<link rel="icon" type="image/png" href="https://www.comercioazul.com/favicon.ico"/>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> <!-- Evita Bloqueo de HTTPS -->
<meta http-equiv="Access-Control-Allow-Origin" content="*" /> <!-- Evita Bloqueo de HTTPS -->
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
<link type="text/css" rel="stylesheet" href="https://www.comercioazul.com/pagadito/css/estilosresponsive.css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
<script type="text/javascript" src="https://www.comercioazul.com/api/recursos/jquery/jquery.js"></script> <!--Valida que no recargue la pagina-->
<script type="text/javascript" src="https://www.comercioazul.com/api/recursos/jquery/jquery.form.js"></script><!--Valida que no recargue la pagina--> 

<script type="text/javascript"><!--Inicia Valida que no recargue la pagina-->
	 $('document').ready(function(){
		
		$("#element").show();
        //$("#element2").show();		
		 
		$('#form').ajaxForm( {
			//target: '#loading', 
			success: function() { 
			//$("#loading").show();
			//$("#result_ok").show();
			setTimeout('document.formulario.reset()',0000);
			//$("#element").hide();
			$("#email").val("");
			$("#nombre").val("");
            $("#element").show();
            $("#element2").show();			
			//alert("Datos enviados, revise su bandeja de entrada o spam");
			//location.reload();//Recarga Página
			return false;
			} 
		});

		 function mostrar_div(param)
		{
			alert ("ingreso mostrar_div");
			var total=parseInt(param)
			switch(total)
			{
			case 1:
				$("#element").show();
				break;
			default:
				break;
			}
		}				
		
	 });
	 
	
</script> <!--Fin Valida que no recargue la pagina-->
		

</head>
<body>
<div id="site">
  
        <form method="get" action="../index.php" align ="center"><!-- Primer Formulario -->	

            <div class="title">
                <h3 style="font-size:23px; text-align: center; font-weight:bold;">MeetUp Torogoz Dev</h3>
            </div>

			<!--<div class="clear"></div>-->
			<div class="wrapper">
				<div class="seccion"></div>
				<div class="clear"></div>
				<div align ="center">
				<div class="row">
					<div class="galeria">
						<img src="https://www.bitcoin.comercioazul.com/images/evento-torogoz.png">
					</div>
					<div class="textoCompra">
						<label id="principal"><?=$msgPrincipal?></label>
						<label id="secundario"><?=$msgSecundario?></label>
					</div>
				</div>
				</div>
			</div>
        </form>

	<div id="element" style="display: none;">
		<form name="formulario" id="form" method='POST' action='' accept-charset="utf-8">
		<div class="wrapper">
            <div class="seccion"></div>
            <div class="clear"></div>
            <div class="row">
				<hr>
				<div align ="center">	
                <h3 style="font-size:23px; text-align: center; font-weight:bold;">Inscripción</h3>				
				<p> <b>Para inscribirse digite su nombre y su correo el&eacute;ctronico</b>, luego darle enviar.</p>					
							<div id="element2" align ="center" style="display: none; width: auto; height: auto; margin: 1%; padding: 2%;  background-image: url(https://www.comercioazul.com/recursos/informacion/imagesbase/left-big-back.png);">
								<b>Registro exitoso, revise su correo en la bandeja de entrada o SPAM</b><br> 
								<b>Te esperamos</b>
								<br>
							</div>				
                <div class="textoCompra">
					<div class="row">
					<label>Solo un nombre*</label>
					<input style='font-family:Verdana, Arial, Tahoma;font-size:10pt;color:#444; text-align:center;' type="text"  required="required" size="50" maxlength="100" class="cajastexto" name="nombre" value='<?php echo $_POST['nombre']; ?>'><?php echo $errors[3] ?>
					</div>
					
					<br> 
					<div class="row">
					<label>¿Participará en el taller? (Sí/No)</label>
					<input style='font-family:Verdana, Arial, Tahoma;font-size:10pt;color:#444; text-align:center;' type="text"  required="required" size="50" maxlength="2" class="cajastexto" name="taller" value='<?php echo $_POST['nombre']; ?>'><?php echo $errors[3] ?>
					</div>
					<br> 
					<div class="row">
					<label>Email*</label>
					<input style='font-family:Verdana, Arial, Tahoma;font-size:10pt;color:#444; text-align:center;' type="email"  required="required" size="50" maxlength="100" class="cajastexto" name="email" value='<?php echo $_POST['email']; ?>'><?php echo $errors[3] ?>
					</div>
                    <br>						
					<div class="row">
					<input type="submit" value="Enviar" name='boton1' class="retorno">
					</div>
				</div>
				</div>
            </div>					
		</div>			
		</form><!-- End Form Contact --> 
    </div>
	
</div><!-- Finaliza Seccion de contenido -->

 
</div>		
		
</body>
</html>
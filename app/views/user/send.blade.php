<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <style>	@import url(http://fonts.googleapis.com/css?family=3DLato);
			body{		font-family: Lato,'Arial';				width: 900px	}	.red{		color: #e74c3c;	}	.blue{		color:#35B6ED;	}	.card_style {		background-color: #fff;		margin-bottom: 2em;		padding: 20px;		overflow: hidden;		box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.5);		border-radius:2px;		text-align:center;	}	.black{		color:#808080;	}
	</style>
                        
   </head>
	<body>
		<div class='card_style'>
		<h1 class='black'>Estimado(a) {{$nombre.' '.$apellidos }} <br> Gracias por registrarse al sitio web de GICDT.</h1>
			<h2>Ahora solo necesita activar su cuenta para tener acceso a la plataforma.</h2>
			<h2>{{ HTML::link("user/activar/$correo/$ruta", 'Activar Cuenta')}}</h2>
			<legend></legend>
			<h3 class="blue">			GICDT</h3>
	</body>
</html
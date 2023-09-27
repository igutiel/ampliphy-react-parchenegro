
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.autotube.cl/web/registrar.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Sep 2014 16:32:45 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Autotube</title>
<link rel="icon" href="img/favicon.gif" type="image/x-icon" />
<link href="css/960_24_col.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#top #contenido #contacto form #contacto {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	text-align: left;
	color: #666;
}
#top #contenido #contacto form #contacto {
	border: 1px solid #CCC;
	/*para Firefox*/
	-moz-border-radius: 5px 5px 5px 5px;
	/*para Safari y Chrome*/
	-webkit-border-radius: 5px 5px 5px 5px;
	/* para Opera */
	border-radius: 5px 5px 5px 5px;
	padding: 10px;
}
#top #contenido #contacto form h2 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	color: #900;
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>

<body>
		<div id="top" class="container_24">
        		<div id="logo_empresa" class="grid_17"><a href="index.php"><img src='img/logo.png' /> </a></div>
                <div id="boton_publicar" class="grid_7">
                			
                			<!-- Boton Publicador-->
   							<br /><br />
                            <a href='registrar.php'>Regístrese y publique gratis</a>
                </div>
                
                <div id="menu" class="grid_24">
                		<div id="menu_box" class="grid_23">
                        		<div id="menu_contenido" class="grid_19">
                                	<a href='index.php'>Inicio</a><a href='publicaciones.php'>Últimas Publicaciones</a><a href='login.php'>Ingresa a tu cuenta</a><a href='registrar.php'>Regístrese</a><a href='contacto.php'>Contacto</a>                                </div>
                                <div id="menu_social" class="grid_3">
                                    <img src="img/1397361850_social_facebook_box_blue.png" width="24" height="24" alt="facebook" />
                                    <img src="img/1397362073_Twitter.png" width="24" height="24" alt="twitter" /> 
                                    <img src="img/1397362083_647397-youtube.png" width="24" height="24" alt="youtube" /> 
                                </div>
                        </div>
                       	
                        
                </div>
                
                
                
          <div id="contenido" class="grid_24">
          <div id="contacto">
                          			 <form action="#" method="post">
            <h2>Registro de Usuario</h2>
            				<table width="500" border="0" align="center" cellpadding="5" id="contacto">
  <tr>
    <th width="163" scope="row">Nombre Completo</th>
    <th width="309" scope="row"><label for="nombre"></label>
      <span id="sprytextfield1">
      <input type="text" name="nombre" id="nombre" />
      <span class="textfieldRequiredMsg">*</span></span></th>
  </tr>
  <tr>
    <th scope="row">Apellidos</th>
    <th scope="row"><span id="sprytextfield2">
      <input type="text" name="apellidos" id="apellidos" />
      <span class="textfieldRequiredMsg">*</span></span></th>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <th scope="row"><span id="sprytextfield3">
    <input type="text" name="email" id="email" />
    <span class="textfieldRequiredMsg">*</span><span class="textfieldInvalidFormatMsg">Formato inválido.</span></span></th>
  </tr>
  <tr>
    <th scope="row">Clave</th>
    <th scope="row"><span id="sprytextfield4">
      <input type="password" name="clave" id="clave" />
      <span class="textfieldRequiredMsg">*</span></span></th>
  </tr>
  
  <tr>
    <th scope="row">&nbsp;</th>
    <th scope="row"><input type="submit" name="Enviar" id="Enviar" value="Registrar" /></th>
  </tr>
</table>
            </form>
                       	</div>	
          </div>
                
                
                
                <div id="pie" class="grid_24"> Autotube.cl © 2014. Todos los Derechos Reservados. Se prohíbe expresamente la reproducción o copia de los contenidos de este sitio sin el expreso consentimiento de la administración del sitio.</div>
                
                
        </div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>

<!-- Mirrored from www.autotube.cl/web/registrar.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Sep 2014 16:32:46 GMT -->
</html>
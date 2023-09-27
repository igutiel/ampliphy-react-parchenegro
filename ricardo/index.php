<?php
	session_start();
	//echo "upcontrato: ",@$_SESSION[upcontrato]."<br />";
	if(@$_SESSION[upcontrato] == 1) {
		header("Location:contratos.php");
	}
?>
<html>
<LINK href="css/contratos.css" rel="stylesheet" type="text/css">
<head>
<title>Sistema de contratos</title>
</head>
<body>
<form name="index" method="post">
<?php
	include "conexion/conectar.php";
	//echo "boton: ".@$_POST[boton];
	@$_SESSION[upcontrato]=0;
	switch(@$_POST[boton]) {
		case "Conectar":
			//echo "User: ".@$_POST[user]."<br />Password: ".@$_POST[password]."<br />";
			$sql_lee_usuario = "select password from tb_usuarios where username = '".@$_POST[user]."'";
			$exec_lee_usuario=mysql_query($sql_lee_usuario) or die (mysql_error());
			//echo "Filas afectadas: ".mysql_num_rows($exec_lee_usuario)."<br />";
			$password="";
			while($sel_lee_usuario=mysql_fetch_array($exec_lee_usuario, MYSQL_NUM))
				$password=$sel_lee_usuario[0];
			//echo "Len Pass: ".strlen($password)."<br />";
			if( $password != @$_POST[password] || strlen($password) == 0 ) {
				//echo "Error clave de usuario";
				echo '<script language="JavaScript">';
				echo '	alert("Error clave de usuario");';
				echo '</script>';
			}
			else
				@$_SESSION[upcontrato]=1;
			break;
		case "Limpiar":
			//echo "Limpiar...<br />";
			@$_POST[user]="";
			@$_POST[password]="";
			@$_SESSION[upcontrato]=0;
			break;
	}
?>
<div class="head">
<img src="imagenes/encabezado01.png" >
</div>
<div class="lateral">
<img src="imagenes/logo.png" >
</div>
<div class="conexion">
<table>
<tr>
<td class="index">Usuario</td><td><input type="text" name="user" value="<?php echo @$_POST[user]; ?>"></td>
</tr>
<tr>
<td class="index">Password</td><td><input type="password" name="password" value="<?php echo @$_POST[password]; ?>"></td>
</tr>
<tr>
<td><input type="submit" name="boton" value="Conectar"></td><td><input type="submit" name="boton" value="Limpiar"></td>
</tr>
</table>
</div>
</form>
</body>

<?php
	if( @$_POST[enviar] == "Salir" ) {
		if (headers_sent()) {
			echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><a href="index.php">Volver</a>';
		}
		else {
			header("Location: index.php");
			echo "Lo intento por ac� pero no funciona<br />";
		}
		exit;
	}
?>
<html>
<head>
<LINK href="css/contratos.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>P�gina de contratos</title>
</head>
<body>
<form method="post" name="formulario" action="ver_contrato.php">
<div class="head">
<img src="imagenes/encabezado01.png" >
</div>
<div class="lateral">
<img src="imagenes/logo.png" >
</div>
<?php
	include "conexion/conectar.php";
	@session_start();
	@$_SESSION[upcontrato]=0;
	$sql_min_contrato = "select max(correlativo) from tb_contratos";
	$exec_min_contrato=mysql_query($sql_min_contrato) or die (mysql_error());
	while($sel_min_contrato=mysql_fetch_array($exec_min_contrato, MYSQL_NUM))
		$min_contrato = $sel_min_contrato[0];
	$sql_lee_contrato="SELECT `correlativo` , `Ciudad_contratante` , `calle_contratante` , date_format(`fecha`, '%d/%m/%Y') , `empresa_contratante` , `representante_legal` , `rut_representante` , `calle_representante` , `numero_representante` , `comuna_representante` , `ciudad_representante` , `nombre_contratado` , `rut_contratado` , `calle_contratado` , `numero_contratado` , `comuna_contratado` , `ciudad_contratado` , date_format(`fecha_nacimiento_contratado`, '%d/%m/%Y') , `pieza_unidad1` , `pieza_unidad2` , `unidades_minimas` , `establecimiento` , `direccion_establecimiento` , date_format(`fecha_inicio`, '%d/%m/%Y') , date_format(`fecha_termino`, '%d/%m/%Y') , date_format(`hora_inicio_jornada`, '%H:%i') , date_format(`hora_termino_jornada`, '%H:%i') , `pago_pieza_terminada` , `periodo_pago` , `beneficio1` , `beneficio2` , `beneficio3` , `duracion` , date_format(`fecha_ingreso`, '%d/%m/%Y') FROM `tb_contratos` where correlativo = ".$min_contrato;
	$exec_lee_contrato=mysql_query($sql_lee_contrato) or die (mysql_error());
	while($sel_lee_contrato=mysql_fetch_array($exec_lee_contrato, MYSQL_NUM)) {
		if(@$_POST[correlativo] == "") @$_POST[correlativo] = $sel_lee_contrato[0];
		if(@$_POST[Ciudad_contratante] == "") @$_POST[Ciudad_contratante] = $sel_lee_contrato[1];
		if(@$_POST[calle_contratante] == "") @$_POST[calle_contratante] = $sel_lee_contrato[2];
		if(@$_POST[fecha] == "") @$_POST[fecha] = $sel_lee_contrato[3];
		if(@$_POST[empresa_contratante] == "") @$_POST[empresa_contratante] = $sel_lee_contrato[4];
		if(@$_POST[representante_legal] == "") @$_POST[representante_legal] = $sel_lee_contrato[5];
		if(@$_POST[rut_representante] == "") @$_POST[rut_representante] = $sel_lee_contrato[6];
		if(@$_POST[calle_representante] == "") @$_POST[calle_representante] = $sel_lee_contrato[7];
		if(@$_POST[numero_representante] == "") @$_POST[numero_representante] = $sel_lee_contrato[8];
		if(@$_POST[comuna_representante] == "") @$_POST[comuna_representante] = $sel_lee_contrato[9];
		if(@$_POST[ciudad_representante] == "") @$_POST[ciudad_representante] = $sel_lee_contrato[10];
		if(@$_POST[nombre_contratado] == "") @$_POST[nombre_contratado] = $sel_lee_contrato[11];
		if(@$_POST[rut_contratado] == "") @$_POST[rut_contratado] = $sel_lee_contrato[12];
		if(@$_POST[calle_contratado] == "") @$_POST[calle_contratado] = $sel_lee_contrato[13];
		if(@$_POST[numero_contratado] == "") @$_POST[numero_contratado] = $sel_lee_contrato[14];
		if(@$_POST[comuna_contratado] == "") @$_POST[comuna_contratado] = $sel_lee_contrato[15];
		if(@$_POST[ciudad_contratado] == "") @$_POST[ciudad_contratado]= $sel_lee_contrato[16];
		if(@$_POST[fecha_nacimiento_contratado] == "") @$_POST[fecha_nacimiento_contratado] = $sel_lee_contrato[17];
		if(@$_POST[pieza_unidad1] == "") @$_POST[pieza_unidad1] = $sel_lee_contrato[18];
		if(@$_POST[pieza_unidad2] == "") @$_POST[pieza_unidad2] = $sel_lee_contrato[19];
		if(@$_POST[unidades_minimas] == "") @$_POST[unidades_minimas] = $sel_lee_contrato[20];
		if(@$_POST[establecimiento] == "") @$_POST[establecimiento] = $sel_lee_contrato[21];
		if(@$_POST[direccion_establecimiento] == "") @$_POST[direccion_establecimiento] = $sel_lee_contrato[22];
		if(@$_POST[fecha_inicio] == "") @$_POST[fecha_inicio] = $sel_lee_contrato[23];
		if(@$_POST[fecha_termino] == "") @$_POST[fecha_termino] = $sel_lee_contrato[24];
		if(@$_POST[hora_inicio_jornada] == "") @$_POST[hora_inicio_jornada] = $sel_lee_contrato[25];
		if(@$_POST[hora_termino_jornada] == "") @$_POST[hora_termino_jornada] = $sel_lee_contrato[26];
		if(@$_POST[pago_pieza_terminada] == "") @$_POST[pago_pieza_terminada] = $sel_lee_contrato[27];
		if(@$_POST[periodo_pago] == "") @$_POST[periodo_pago] = $sel_lee_contrato[28];
		if(@$_POST[beneficio1] == "") @$_POST[beneficio1] = $sel_lee_contrato[29];
		if(@$_POST[beneficio2] == "") @$_POST[beneficio2] = $sel_lee_contrato[30];
		if(@$_POST[beneficio3] == "") @$_POST[beneficio3] = $sel_lee_contrato[31];
		if(@$_POST[duracion] == "") @$_POST[duracion] = $sel_lee_contrato[32];
		if(@$_POST[fecha_ingreso] == "") @$_POST[fecha_ingreso] = $sel_lee_contrato[33];
	}
?>
<div class="cuerpo">
<input class="entrada" type="hidden" name="correlativo" value="<?php echo @$_POST[correlativo]; ?>">
<table>
<tr>
<td class="contrato">Ciudad Contratante</td><td class="contrato"><input class="entrada" type="text" name="Ciudad_contratante" value="<?php echo @$_POST[Ciudad_contratante]; ?>"></td>
<td class="contrato">Calle Contratante</td><td class="contrato"><input class="entrada" type="text" name="calle_contratante" value="<?php echo @$_POST[calle_contratante]; ?>"></td>
<td class="contrato">Fecha</td><td class="contrato"><input class="entrada" type="text" name="fecha" value="<?php echo @$_POST[fecha]; ?>"></td>
<td class="contrato">Empresa Contratante</td><td class="contrato"><input class="entrada" type="text" name="empresa_contratante" value="<?php echo @$_POST[empresa_contratante]; ?>"></td>
<td class="contrato">Representante Legal</td><td class="contrato"><input class="entrada" type="text" name="representante_legal" value="<?php echo @$_POST[representante_legal]; ?>"></td>
</tr>
<tr>
<td class="contrato">Rut Representante</td><td class="contrato"><input class="entrada" type="text" name="rut_representante" value="<?php echo @$_POST[rut_representante]; ?>"></td>
<td class="contrato">Calle Representante</td><td class="contrato"><input class="entrada" type="text" name="calle_representante" value="<?php echo @$_POST[calle_representante]; ?>"></td>
<td class="contrato">N�mero Representante</td><td class="contrato"><input class="entrada" type="text" name="numero_representante" value="<?php echo @$_POST[numero_representante]; ?>"></td>
<td class="contrato">Comuna Representante</td><td class="contrato"><input class="entrada" type="text" name="comuna_representante" value="<?php echo @$_POST[comuna_representante]; ?>"></td>
<td class="contrato">Ciudad Representante</td><td class="contrato"><input class="entrada" type="text" name="ciudad_representante" value="<?php echo @$_POST[ciudad_representante]; ?>"></td>
</tr>
<tr>
<td class="contrato">Nombre Contratado</td><td class="contrato"><input class="entrada" type="text" name="nombre_contratado" value="<?php echo @$_POST[nombre_contratado]; ?>"></td>
<td class="contrato">Rut Contratado</td><td class="contrato"><input class="entrada" type="text" name="rut_contratado" value="<?php echo @$_POST[rut_contratado]; ?>"></td>
<td class="contrato">Calle Contratado</td><td class="contrato"><input class="entrada" type="text" name="calle_contratado" value="<?php echo @$_POST[calle_contratado]; ?>"></td>
<td class="contrato">N�mero Contratado</td><td class="contrato"><input class="entrada" type="text" name="numero_contratado" value="<?php echo @$_POST[numero_contratado]; ?>"></td>
<td class="contrato">Comuna Contratado</td><td class="contrato"><input class="entrada" type="text" name="comuna_contratado" value="<?php echo @$_POST[comuna_contratado]; ?>"></td>
</tr>
<tr>
<td class="contrato">Ciudad Contratado</td><td class="contrato"><input class="entrada" type="text" name="ciudad_contratado" value="<?php echo @$_POST[ciudad_contratado]; ?>"></td>
<td class="contrato">Fecha Nacimiento Contratado</td><td class="contrato"><input class="entrada" type="text" name="fecha_nacimiento_contratado" value="<?php echo @$_POST[fecha_nacimiento_contratado]; ?>"></td>
<td class="contrato">Piezas o unidades</td><td class="contrato"><input class="entrada" type="text" name="pieza_unidad1" value="<?php echo @$_POST[pieza_unidad1]; ?>"></td>
<td class="contrato">Piezas o unidades</td><td class="contrato"><input class="entrada" type="text" name="pieza_unidad2" value="<?php echo @$_POST[pieza_unidad2]; ?>"></td>
<td class="contrato">Unidades M�nimas</td><td class="contrato"><input class="entrada" type="text" name="unidades_minimas" value="<?php echo @$_POST[unidades_minimas]; ?>"></td>
</tr>
<tr>
<td class="contrato">Establecimiento</td><td class="contrato"><input class="entrada" type="text" name="establecimiento" value="<?php echo @$_POST[establecimiento]; ?>"></td>
<td class="contrato">Direccion Establecimiento</td><td class="contrato"><input class="entrada" type="text" name="direccion_establecimiento" value="<?php echo @$_POST[direccion_establecimiento]; ?>"></td>
<td class="contrato">Fecha Inicio</td><td class="contrato"><input class="entrada" type="text" name="fecha_inicio" value="<?php echo @$_POST[fecha_inicio]; ?>"></td>
<td class="contrato">Fecha T�rmino</td><td class="contrato"><input class="entrada" type="text" name="fecha_termino" value="<?php echo @$_POST[fecha_termino]; ?>"></td>
<td class="contrato">Hora Inicio Jornada</td><td class="contrato"><input class="entrada" type="text" name="hora_inicio_jornada" value="<?php echo @$_POST[hora_inicio_jornada]; ?>"></td>
</tr>
<tr>
<td class="contrato">Hora Termino Jornada</td><td class="contrato"><input class="entrada" type="text" name="hora_termino_jornada" value="<?php echo @$_POST[hora_termino_jornada]; ?>"></td>
<td class="contrato">Pago Pieza Terminada</td><td class="contrato"><input class="entrada" type="text" name="pago_pieza_terminada" value="<?php echo @$_POST[pago_pieza_terminada]; ?>"></td>
<td class="contrato">Per�odo Pago</td><td class="contrato"><input class="entrada" type="text" name="periodo_pago" value="<?php echo @$_POST[periodo_pago]; ?>"></td>
<td class="contrato">Beneficio 1</td><td class="contrato"><input class="entrada" type="text" name="beneficio1" value="<?php echo @$_POST[beneficio1]; ?>"></td>
<td class="contrato">Beneficio 2</td><td class="contrato"><input class="entrada" type="text" name="beneficio2" value="<?php echo @$_POST[beneficio2]; ?>"></td>
</tr>
<tr>
<td class="contrato">Beneficio 3</td><td class="contrato"><input class="entrada" type="text" name="beneficio3" value="<?php echo @$_POST[beneficio3]; ?>"></td>
<td class="contrato">Duraci�n</td><td class="contrato"><input class="entrada" type="text" name="duracion" value="<?php echo @$_POST[duracion]; ?>"></td>
<td class="contrato">Fecha Ingreso</td><td class="contrato"><input class="entrada" type="text" name="fecha_ingreso" value="<?php echo @$_POST[fecha_ingreso]; ?>"></td>
</tr>
<tr>
<td class="contrato"><input class="entrada" type="submit" name="enviar" value="Enviar" /></td>
<td class="contrato"><input class="entrada" type="submit" name="enviar" value="Salir" /></td>
</tr>
</table>
</div>
<!--<?php
	$sql_day="select day(str_to_date('".@$_POST[fecha]."', '%d/%m/%Y')), month(str_to_date('".@$_POST[fecha]."', '%d/%m/%Y')), year(str_to_date('".@$_POST[fecha]."', '%d/%m/%Y'))";
	$exec_day=mysql_query($sql_day) or die (mysql_error);
	while($sel_day=mysql_fetch_array($exec_day, MYSQL_NUM)) {
		$dia=$sel_day[0];
		$mes=$sel_day[1];
		$ano=$sel_day[2];
	}
	$meses=Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	$sql_modelo="SELECT `id_contrato`, `nombre_contrato`, `texto_contrato` FROM `tb_modelo_contrato`";
	$exec_modelo=mysql_query($sql_modelo) or die (mysql_error);
	while($sel_modelo=mysql_fetch_array($exec_modelo, MYSQL_NUM)) {
		$texto = $sel_modelo[2];
		$texto = str_replace("@Ciudad_contratante", @$_POST[Ciudad_contratante], $texto);
		$texto = str_replace("@calle_contratante", @$_POST[calle_contratante], $texto);
		$texto = str_replace("day(@fecha)", $dia, $texto);
		$texto = str_replace("mes(@fecha)", $meses[$mes-1], $texto);
		$texto = str_replace("year(@fecha)", $ano, $texto);
		$texto = str_replace("@empresa_contratante", @$_POST[empresa_contratante], $texto);
		$texto = str_replace("@representante_legal", @$_POST[representante_legal], $texto);
		$texto = str_replace("@rut_representante", @$_POST[rut_representante], $texto);
		$texto = str_replace("@calle_representante", @$_POST[calle_representante], $texto);
		$texto = str_replace("@numero_representante", @$_POST[numero_representante], $texto);
		$texto = str_replace("@comuna_representante", @$_POST[comuna_representante], $texto);
		$texto = str_replace("@nombre_contratado", @$_POST[nombre_contratado], $texto);
		$texto = str_replace("@rut_contratado", @$_POST[rut_contratado], $texto);
		$texto = str_replace("@calle_contratado", @$_POST[calle_contratado], $texto);
		$texto = str_replace("@numero_contratado", @$_POST[numero_contratado], $texto);
		$texto = str_replace("@comuna_contratado", @$_POST[comuna_contratado], $texto);
		$texto = str_replace("@ciudad_contratado", @$_POST[ciudad_contratado], $texto);
		$texto = str_replace("@fecha_nacimiento_contratado", @$_POST[fecha_nacimiento_contratado], $texto);
		$texto = str_replace("@pieza_unidad1", @$_POST[pieza_unidad1], $texto);
		$texto = str_replace("@pieza_unidad2", @$_POST[pieza_unidad2], $texto);
		$texto = str_replace("@unidades_minimas", @$_POST[unidades_minimas], $texto);
		$texto = str_replace("@establecimiento", @$_POST[establecimiento], $texto);
		$texto = str_replace("@direccion_establecimiento", @$_POST[direccion_establecimiento], $texto);
		$texto = str_replace("@fecha_inicio", @$_POST[fecha_inicio], $texto);
		$texto = str_replace("@fecha_termino", @$_POST[fecha_termino], $texto);
		$texto = str_replace("@hora_inicio_jornada", @$_POST[hora_inicio_jornada], $texto);
		$texto = str_replace("@hora_termino_jornada", @$_POST[hora_termino_jornada], $texto);
		$texto = str_replace("@pago_pieza_terminada", @$_POST[pago_pieza_terminada], $texto);
		$texto = str_replace("@periodo_pago", @$_POST[periodo_pago], $texto);
		$texto = str_replace("@beneficio1", @$_POST[beneficio1], $texto);
		$texto = str_replace("@beneficio2", @$_POST[beneficio2], $texto);
		$texto = str_replace("@beneficio3", @$_POST[beneficio3], $texto);
		$texto = str_replace("@duracion", @$_POST[duracion], $texto);
		$texto = str_replace("@fecha_ingreso", @$_POST[fecha_ingreso], $texto);
		echo '<div class="ingreso" >';
		echo '<p align="justify">'.@$_POST[Ciudad_contratante].' '.$dia.' de '.$meses[$mes-1].' de '.$ano.'</p>';
		echo '<br />';
		echo '<p align="justify">';
		echo $texto."<br />";
		$sql_num_contratos="select count(1) from tb_contratos";
		if(@$_POST[correlativo] != "") {
			$sql_num_contratos.=" where correlativo = ".@$_POST[correlativo];
			//echo "sql_num_contratos: ".$sql_num_contratos."<br />";
			$exec_num_contratos=mysql_query($sql_num_contratos) or die (mysql_error());
			while($sel_num_contratos=mysql_fetch_array($exec_num_contratos, MYSQL_NUM))
				$num_contratos = $sel_num_contratos[0];
		}
		else
			$num_contratos = 0;
		if( $num_contratos == 0 ) {
			$sql_insert="INSERT INTO `tb_contratos`(`Ciudad_contratante`, `calle_contratante`, `fecha`, `empresa_contratante`, `representante_legal`, `rut_representante`, `calle_representante`, `numero_representante`, `comuna_representante`, `ciudad_representante`, `nombre_contratado`, `rut_contratado`, `calle_contratado`, `numero_contratado`, `comuna_contratado`, `ciudad_contratado`, `fecha_nacimiento_contratado`, `pieza_unidad1`, `pieza_unidad2`, `unidades_minimas`, `establecimiento`, `direccion_establecimiento`, `fecha_inicio`, `fecha_termino`, `hora_inicio_jornada`, `hora_termino_jornada`, `pago_pieza_terminada`, `periodo_pago`, `beneficio1`, `beneficio2`, `beneficio3`, `duracion`, `fecha_ingreso`) VALUES ('".@$_POST[Ciudad_contratante]."','".@$_POST[calle_contratante]."',str_to_date('".@$_POST[fecha]."','%d/%m/%Y'),'".@$_POST[empresa_contratante]."','".@$_POST[representante_legal]."','".@$_POST[rut_representante]."','".@$_POST[calle_representante]."',".@$_POST[numero_representante].",'".@$_POST[comuna_representante]."','".@$_POST[ciudad_representante]."','".@$_POST[nombre_contratado]."','".@$_POST[rut_contratado]."','".@$_POST[calle_contratado]."',".@$_POST[numero_contratado].",'".@$_POST[comuna_contratado]."','".@$_POST[ciudad_contratado]."',str_to_date('".@$_POST[fecha_nacimiento_contratado]."','%d/%m/%Y'),'".@$_POST[pieza_unidad1]."','".@$_POST[pieza_unidad2]."',".@$_POST[unidades_minimas].",'".@$_POST[establecimiento]."','".@$_POST[direccion_establecimiento]."',str_to_date('".@$_POST[fecha_inicio]."','%d/%m/%Y'),str_to_date('".@$_POST[fecha_termino]."','%d/%m/%Y'),time_format('".@$_POST[hora_inicio_jornada]."','%H:%i'),time_format('".@$_POST[hora_termino_jornada]."','%H:%i'),".@$_POST[pago_pieza_terminada].",'".@$_POST[periodo_pago]."','".@$_POST[beneficio1]."','".@$_POST[beneficio2]."','".@$_POST[beneficio3]."',".@$_POST[duracion].",str_to_date('".@$_POST[fecha_ingreso]."','%d/%m/%Y'))";
			//echo "sql_insert: ".$sql_insert."<br />";
			$exec_insert=mysql_query($sql_insert) or die (mysql_error());
			echo mysql_affected_rows()." registros insertados";
		}
		else {
			$sql_update = "update `tb_contratos` set `Ciudad_contratante` = '".@$_POST[Ciudad_contratante]."', `calle_contratante` = '".@$_POST[calle_contratante]."', fecha=str_to_date('".@$_POST[fecha]."', '%d/%m/%Y'), `empresa_contratante`='".@$_POST[empresa_contratante]."', `representante_legal`='".@$_POST[representante_legal]."', `rut_representante`='".@$_POST[rut_representante]."', `calle_representante`='".@$_POST[calle_representante]."', `numero_representante`='".@$_POST[numero_representante]."', `comuna_representante`='".@$_POST[ciudad_representante]."', `nombre_contratado`='".@$_POST[nombre_contratado]."', `rut_contratado`='".@$_POST[rut_contratado]."', `calle_contratado`='".@$_POST[calle_contratado]."', `numero_contratado`=".@$_POST[numero_contratado].", `comuna_contratado`='".@$_POST[comuna_contratado]."', `ciudad_contratado`='".@$_POST[ciudad_contratado]."', `fecha_nacimiento_contratado`=str_to_date('".@$_POST[fecha_nacimiento_contratado]."', '%d/%m/%Y'), `pieza_unidad1`='".@$_POST[pieza_unidad1]."', `pieza_unidad2`='".@$_POST[pieza_unidad2]."', `unidades_minimas`=".@$_POST[unidades_minimas].", `establecimiento`='".@$_POST[establecimiento]."', `direccion_establecimiento`='".@$_POST[direccion_establecimiento]."', `fecha_inicio` = str_to_date('".@$_POST[fecha_termino]."', '%d/%m/%Y'), `fecha_termino` = str_to_date('".@$_POST[fecha_termino]."', '%d/%m/%Y'), `hora_inicio_jornada`=time_format('".@$_POST[hora_inicio_jornada]."', '%H:%i'), `hora_termino_jornada`=time_format('".@$_POST[hora_termino_jornada]."', '%H:%i'), `pago_pieza_terminada`=".@$_POST[pago_pieza_terminada].", `periodo_pago`='".@$_POST[periodo_pago]."', `beneficio1`='".@$_POST[beneficio1]."', `beneficio2`='".@$_POST[beneficio2]."', `beneficio3`='".@$_POST[beneficio3]."', `duracion`=".@$_POST[duracion].", `fecha_ingreso`=str_to_date('".@$_POST[fecha_ingreso]."', '%d/%m/%Y') where correlativo = ".@$_POST[correlativo];
			//echo "sql_update: ".$sql_update."<br />";
			$exec_update=mysql_query($sql_update) or die (mysql_error());
			echo mysql_affected_rows()." registros actualizados";
		}
	}
?>
</p>
</div>-->
</form>
</body>
</html>

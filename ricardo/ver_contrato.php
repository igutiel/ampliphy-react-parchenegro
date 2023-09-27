<?php
	if( @$_POST[enviar] == "Salir" ) {
		if (headers_sent()) {
			echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><a href="index.php">Volver</a>';
		}
		else {
			header("Location: index.php");
			echo "Lo intento por acá pero no funciona<br />";
		}
		exit;
	}
?>
<html>
<head>
<LINK href="css/contratos_ver.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Página de contratos</title>
</head>
<body>
<form method="post" name="formulario">
<div class="head">
<img src="imagenes/encabezado01.png" >
</div>
<div class="lateral">
<img src="imagenes/logo.png" >
</div>
<?php
	include "conexion/conectar.php";
	@session_start();

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
</div>
</form>
</body>
</html>

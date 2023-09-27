<?php
//variables para la conexion
$conection = mysql_connect("localhost","parc1014_contrat","DAwTWcnd82H3Rhm5") or die("no se puede conectar a  Server. (".mysql_error().")");
//aqui selecciono la base Northwind que ya trae MS SQL v.8 como ejemplo
@mysql_select_db("parc1014_contratos",$conection);
//tu consulta la asignas a un string $SQL

?>

<html>
<head>
<title>Graduación Seba 2015</title>
</head>
<body>
<center><h1>GRADUACIÓN SEBA 2015</h1></center>
<?php
$dir = ".";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
	if(strcmp($filename, ".") && strcmp($filename, "..") && strcmp($filename, "index.php") && strcmp($filename, "original") && strcmp($filename, "verimagen.php"))
		$files[] = $filename;
}
echo '<center><table>';
$fila=0;
$columna=0;
foreach($files as $imagen) {
	//echo $imagen."<br />";
	$completa=substr($imagen, 0, strpos($imagen, '.')).'.JPG';
	if($columna == 0)
		echo '<tr>';
	echo '<td><a href="verimagen.php?imagen='.$completa.'"><img src="'.$imagen.'" alt="'.$completa.'" /></a></td>'.chr(10);
	$columna++;
	if($columna == 6) {
		$fila++;
		$columna=0;
		echo '</tr>';
	}
}
if($columna == 0)
	echo '</tr>';
echo '</table></center>';
?>
</body>
</html>

<html>
<head>
<title>Finiquitos</title>
</head>
<body>
<center><h1>Finiquitos</h1></center>
<?php
$dir = ".";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
	if(strcmp($filename, ".") && strcmp($filename, "..") && strcmp($filename, "index.php") && strcmp($filename, "verimagen.php") && strcmp($filename, "error.log") && strrpos($filename, "bak") == 0)
		$files[] = $filename;
}
echo '<center><table>';
$fila=0;
$columna=0;
foreach($files as $imagen) {
	if($columna == 0)
		echo '<tr>';
	echo '<td><a href="verimagen.php?imagen='.$imagen.'"><img src="'.$imagen.'" alt="'.$imagen.'" width=75% height=75% /></a></td>'.chr(10);
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

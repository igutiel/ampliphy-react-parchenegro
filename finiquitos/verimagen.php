<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="css/tabla.css" type="text/css"/>
<title>Finiquitos</title>
</head>
<body>
<form method="post" action="verimagen.php">
<?php
$dir = ".";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
	if(strcmp($filename, ".") && strcmp($filename, "..") && strcmp($filename, "index.php") && strcmp($filename, "css") && strcmp($filename, "verimagen.php") && !strrpos($filename, "bak") )
		$files[] = $filename;
}
$imagenver=@$_GET[imagen];
$imagenant="";
$primera="";
$exito=0;
$pagina=0;
foreach($files as $imagen) {
	//echo "imagenant: ".$imagenant." imagen: ".$imagen." imagenver: ".$imagenver."<br />".chr(10);
	//echo $imagen."<br />";
	if($primera == "")
		$primera=$imagen;
	if( !strcmp($imagenant, $imagenver) ) {
		echo '<center><p>Finiquito: '.$pagina.'</p><br /><a href="verimagen.php?imagen='.$imagen.'"><img src="'.$imagenant.'" alt="'.$imagenant.'" width=60% height=100% /></a></center>'.chr(10);
		$exito=1;
	}
	$imagenant=$imagen;
	$pagina++;
}
if( $exito == 0 )
	echo '<center><p>Página: '.$pagina.'</p><br /><a href="verimagen.php?imagen='.$primera.'"><img src="'.$imagenver.'" alt="'.$imagenver.'" width=60% height=100% /></a></center>'.chr(10);
?>
</form>
</body>
</html>

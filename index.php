<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Parche Negro</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv = Content-Type
content = "url=http://www.parchenegro.cl"
name = "Keywords" content="filtraciones, reparaciones, calefont, filtraciones de gas, reparaciones sanitarios">
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FF0000;
}
-->
</style>
  <style>
    @font-face {
      font-family: AtariFont;
      src: url("atarifont.ttf") format('truetype');
    }

    body {
      font-family: AtariFont;
    }
  </style>
  <script type="text/javascript">
    function mensaje() {
      var txt = document.getElementById("atari");
      txt.innerHTML = txt.innerHTML + "BOOT ERROR<br>";
    }
    setInterval(mensaje, 1000);
  </script>
</meta>
</head>
<body>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11900635-1");
pageTracker._trackPageview();
} catch(err) {}</script>

<div align="center">
  <h1><span class="Estilo1">Pagina de Parche Negro</span>
  </h1>
<p><?php dolar(); ?>
<HR>
<font face="verdana" size="4" COLOR="red"><p><center>No pierda esta gran oportunidad. Parchenegro repara computadores, instala sistemas operativos, respalda información</center></p>
<p><center>Comuniquese conmigo enviando un mail a <A href=mailto:parchenegro@parchenegro.cl>parchenegro@parchenegro.cl</A> y lo atenderemos como se merece.</center></p></font>
<HR>

<!-- Histats.com  START  -->

<center>
<table>

<tr>
<td>
<br>
<center>
<!--#include virtual="tiempo.php"-->
</center>
<br>
</td>
<td>
<a href="http://www.histats.com/es/" target="_blank" title="contadores" ><script  type="text/javascript" language="javascript">
var s_sid = 746394;var st_dominio = 4;
var cimg = 26;var cwi =190;var che =115;
</script></a>
<script  type="text/javascript" language="javascript" src="http://s11.histats.com/js9.js"></script>
<noscript><a href="http://www.histats.com/es/" target="_blank">
<img  src="http://s103.histats.com/stats/0.gif?746394&1" alt="contadores" border="0"></a>
</noscript>
</div>

<!-- Histats.com  END  -->
<br>
</td>
<td>
  <IMG SRC="images/calavera.gif" WIDTH="198" HEIGHT="286" BORDER="0" ALT="">
</td>
<td>
<div align="right">
  <IMG SRC="images/birdshit.jpg" WIDTH="204" HEIGHT="220" BORDER="0" ALT="">
</div>
</td>
</tr>
</table>
</center>

<center>
<p><FONT SIZE="20" COLOR="#663333"><B>El hogar del <a href="nhp/grabb.html">NHP</a></B></FONT>
<IMG SRC="images/nhp.jpg" WIDTH="96" HEIGHT="77" BORDER="0" ALT="">
<br>
<IMG SRC="images/patos.gif" WIDTH="176" HEIGHT="197" BORDER="0" ALT="">
</p>
</center>
<img alt="" src="https://ci3.googleusercontent.com/proxy/TL-1KqNzQMJfOEyh4V_UtekMM-qBSYfOWwKbzXYHxcttKRfBDnlCgcv9nQQhl1LdeXugMunkwFu800G0cfeO8R29sJrQSLtzUDnTV0b48X2rruR91BuxR8z9Sei5DhevUov9xEE2AX5vNh3hhIjoxMewILGABccjbZQW_o8=s0-d-e1-ft#https://gallery.mailchimp.com/514d5e8e2ca64b78c0c6f5a2e/images/b4b15aa2-ab35-4247-8bb0-52ad68569740.jpg" style="max-width:800px;padding-bottom:0;display:inline!important;vertical-align:bottom;border:0;height:auto;outline:none;text-decoration:none" class="m_-3918982830861237903mcnImage CToWUd" width="539" align="middle"><br />
<a href="https://www.indiegogo.com/projects/atari-vcs-game-stream-connect-like-never-before-computers-pc/x/17850706#/"><img src="https://ci3.googleusercontent.com/proxy/5LF9MrprXrFrmR0hW1D9ZtWjswW4rXjaOsGg0RH_-babU1P2Q_xhwNHm3xq-8cM9T6fx0ovh4iqhmA=s0-d-e1-ft#http://i.countdownmail.com/2ozur.gif" alt="countdownmail.com" style="border:0;height:auto;outline:none;text-decoration:none" class="CToWUd"></a><br />
</body>
</html>
<?php
function dolar() {
	$url="http://www.bci.finmarketslive.cl/www/widget.html"; // url de la pagina que queremos obtener  
	$url_content = '';  
	$file = @fopen($url, 'r');  
	if($file){  
	  while(!feof($file)) {  
		$url_content .= @fgets($file, 4096);  
	  } 
	  $encontrar=strpos($url_content, "Observado");
	  $encontrar=strpos($url_content, "bajas", $encontrar);
	  $encontrar=strpos($url_content, "<span>", $encontrar);
	  echo "Dolar observado: ".substr($url_content, $encontrar+6, 6)."<br />";
	  fclose ($file);  
	}  
}
?>

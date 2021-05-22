<?php

ini_set("register_globals","off");
ini_set("display_errors","off");
// méthode d'appel
$méthode=$_SERVER["REQUEST_METHOD"];
// récupérer des paramètres
if($méthode=="GET")
$param=$_GET;
else $param=$_POST;
$M1=$param["M1"];
$SP=$param["SP"];
$ SP1=$param["SP1"];
$ SP2 =$param["SP2 "];
$SP3=$param["SP3"];
$ SP4=$param["SP4"];
$ SP5 =$param["SP5 "];
$NomUti=$param["NomUti "];
$ PassW=$param["PassW"];
$ Profession=implode("
",explode("\r\n",$param["Profession"]));
$ CPays=$param["CPays"];
$ Langues=$param["Langues"];
// requête
$requêteValide=isset($M1) && (isset($SP) || isset($SP1) || isset($SP2)|| isset($SP3) || isset($SP4) || isset($SP5))
&& isset($NomUti) && isset($PassW) && isset($Profession)
&& isset($CPays) && isset($Langues1) && isset($Langues2);
// affichage page
if ($requêteValide)
include "form.php";
else include "index.html";
?>
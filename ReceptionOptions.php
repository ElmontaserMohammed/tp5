<?php

if(isset($_GET["langue"])) setcookie("lang",$_GET["langue"], time()+ 3600*24*10);
if(isset($_GET["textColor"])) setcookie("textColor",$_GET["textColor"], time()+ 3600*24*10);
if(isset($_GET["bgColor"])) setcookie("bgClr",$_GET["bgColor"], time()+ 3600*24*10);
header("location: page1.php");

?> 
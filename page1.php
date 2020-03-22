<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}
?>
<?php
include("data.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/acceuil.css">
	<title>page1</title>
</head>
	<?php
	include("head.php"); 
	include("menu.php");
	?>
	<div class="description" style="background: <?= $bgColor ?>">
		<h1>Affichage des resultats</h1><br><hr><br>
		<p>Cliquez sur une filiere pour voir les resultats</p><br>
		<ul>
<?php
foreach ($Filier as $F)
{ 
	?>
	
                    <li><a href="page2.php?codeF=<?=$F["filier"]?>"><?=$F["Abr"]?></a></li>           
<?php 
} 
?> 
</ul>
</div>
<?php
include("footer.php");?>
</body>
</html>
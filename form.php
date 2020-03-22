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
		<h1>Autentification</h1>


<form action = "verifier.php" method = "post" >
<pre>
Login    <input name ="login" type = "text" placeholder="print mohammed" /> 

Password <input name ="password" type = "password" placeholder="print 2019-2020" /> 

         <input type = "submit" value = "Envoyer" /> <input type = "reset" value ="Annuler" />
</pre>
</form>
</div>
<?php
include("footer.php");?>
</body>
</html>
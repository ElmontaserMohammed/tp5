<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/acceuil.css">
	<title>autentification</title>
</head>
<body>
	<?php
	include("head.php"); 
	include("menu.php");
	?>
	<div class="description">
		<h1>Autentification</h1><br>
		<hr color="darkgray"><br>        
         <form action = "verifier.php" method = "post" >
<pre>
Login    <input name ="login" type = "text" placeholder="login" /> 

Password <input name ="password" type = "password" placeholder="password" /> 

         <input type = "submit" value = "Envoyer" /> <input type = "reset" value ="Annuler" />
</pre>
</form>
</div>
<?php
include("footer.php");?>
</body>
</html>
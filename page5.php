<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}
?>    
<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <link rel="stylesheet" href="../CSS/acceuil.css">
    <meta charset="utf-8">   
     </head>
        <?php
         include("head.php");
         include("menu.php");
        ?>
        <div class="description" style="background: <?= $bgColor ?>">
        <h1>Reception des informations</h1>
        <hr color="darkgray"><br>
        BONJOUR <?=$_POST["nom"];?> <?=$_POST["prenom"];?><br>
<strong>VOTRE MOT DE PASSE</strong> : <?=$_POST["passe"];?><br>
<strong>VOUS ETRE UNE /UN </strong> : <?=$_POST["sexe"];?><br>
<strong>VOTRE FILIERE</strong> : <?=$_POST["branche"];?><br>
<strong>VOS LOISIRES</strong>: <br><?php foreach($_POST['loisir'] as $selected){ 
                        echo "-".$selected."</br>";} ?><br>
<br /><strong>Vous avez entre le commantaire suivant</strong> : <br><?=$_POST["comment"];?><br>

<h1>Informations environnement</h1>
<hr color="darkgray"><br>
        <strong>VOTRE ADRESSE</strong>:  <?=$_SERVER["REMOTE_ADDR"];?><br>
        <strong>VOTRE NAV</strong> :  <?=$_SERVER['HTTP_USER_AGENT'];?><br>
        <strong>VOUS ETIEZ  SUR LA PAGE</strong> : <?=$_SERVER['HTTP_REFERER'];?><br>
        <strong>VOUS ETRE DANS</strong>: <?=$_SERVER['PHP_SELF'];?><br>
         Vous etes  dans le script <?=__FILE__;?><br>
          A la ligne :  <?=__LINE__;?><br>
          Repertoire : <?=__DIR__;?><br>
        <strong>La version de php tourne par le serveur</strong> : <?=PHP_VERSION;?><br>
        <strong>Le systeme d'exploitation du serveur</strong> : <?=PHP_OS;?><br>
</p>
   </div>
    <?php include("footer.php");?>
</body>
</html>
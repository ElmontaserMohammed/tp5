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
    <title>form</title>
    <link rel="stylesheet" href="../CSS/acceuil.css">
    <meta charset="utf-8">   
     </head>
        <?php
         include("head.php");
         include("menu.php");
        ?>
        <div class="description" style="background: <?= $bgColor ?>">
        <h1>Ajouter un etudiant</h1>
        <hr color="darkgray"><br>
    <form action="page5.php" method="post">
    <fieldset><legend> <h4>Vos cordonnées</h4></legend>
   Nom :<input type="text"   placeholder="Votre nom"   name="nom"><br>
    prénom :<input type="text"   placeholder ="Votre prénom" maxlength="10"  name="prenom"><br>
    Date de naissance :<input type="date"name="date"><br>
    E-Mail :<input type="email"placeholder ="Votre mail" name="email"><br>
    Code :<input type="text" name="code"><br>
   mot de passe :<input type="password" name="passe"><br>
    <input type="radio" name="sexe" value="Homme" > Homme<br>
    <input type="radio" name="sexe" value="Femme">Femme <br>
    <fieldset>
    <legend>Les filieres</legend>
    <select name="branche" id="branche">
        <?php
        
            foreach($Filier as $filiere)
            {
                ?>

    <option value=<?=$filiere['filier']?> required><?=$filiere['Abr']?></option>
    <?php
            }
            ?>
    </select>
</fieldset>
     </fieldset><fieldset> <legend> <h4>Vos loisirs</h4></legend>
   
        <input type="checkbox" name="loisir[]" value="Voyage">Voyage<br>
        <input type="checkbox" name="loisir[]" value="Lecture">Lecture<br>
        <input type="checkbox" name="loisir[]" value="Sport">Sport<br>
        <p>saisire un commentaire :</p><br>
        <textarea rows="5" cols="70%"  maxlength="50"name="comment"></textarea> 
        <br>
         <input type="reset" value="effacer">
        <input  type="submit" value="envoyer">
    </fieldset><br>
</form>
</div>
    <?php include("footer.php");?>
</body>
</html>
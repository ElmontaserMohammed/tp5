<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}
?>
<?php
include("data.php");
$code= $_GET["code"];
if ($code =="E0") $etudiants=array("E0","Mohammed","Elmontaser","SMI",18);
else if ($code =="E1") $etudiants=array("E1","Anoir","Ezzaher","SMI",19);
else if ($code =="E2") $etudiants=array("E2","Omar","Amrani","SMI",10);
else if ($code =="E3") $etudiants=array("E3","Aymen","Zaidi","SMP",8);
else if ($code =="E4") $etudiants=array("E4","Hanae","Charbak","SMA",18);
else if ($code =="E5") $etudiants=array("E5","Meryem","Sebani","SMI",15);
else $etudiants=array("inconnue","inconnue","inconnue","inconnue",0) ;


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/acceuil.css">
    <title>page3</title>
    <style>
        p{
            font-size: 20px;
            text-transform: capitalize;
        }
        p.link{
            background-color: green;
            color: #fff;
            border-radius: 5px;
            width: 100px;
       
            text-align: center;
            display: inline-block;
            margin-left: 40px; 
        }
    </style>
</head>



<?php
include("head.php");
include("menu.php");
?>
<div class="description" style="background: <?= $bgColor ?>">
        <p>code:<?=$etudiants[0]?></p>
        <p>nom: <?=$etudiants[1]?></p>
        <p>prenom: <?=$etudiants[2]?></p>
        <p>fillier: <?=$etudiants[3]?></p>
        <p>note: <?=$etudiants[4]?></p>
        <pre><a href="#"><p class="link">supprimer</p></a></pre> <br><pre><a href="#"><p class="link">modefier</p></a></pre>
    </div>
<?php
include("footer.php");
?>    
</body>
</html>
<?php 
function AffDate($lang) {
/////La date sur le serveur
$jours["AR"] = array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
$jours["FR"] = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$jours["EN"] = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$mois["AR"]=["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو" , "يوليوز" , "غشت ", "شتنبر" ,"أكتوبر" , "نونبر" , "دجنبر"];

$mois["EN"]= ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$mois["FR"]= ["Janvier","Février","Mars", "Avril","Mai","juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];


$date = getdate();
$date= $jours[$lang][$date["wday"]]. " " . $date["mday"] . " " . $mois[$lang][$date["mon"]-1] . " " .$date["year"];
return $date;
}
$lang= isset($_COOKIE["lang"])?$_COOKIE["lang"]:"AR";
$textColor= isset($_COOKIE["textColor"])? $_COOKIE["textColor"]: "green";
$bgColor= isset($_COOKIE["bgColor"])? $_COOKIE["bgColor"]: "honeydew";
?>
<body style="color: <?= $textColor ?>">
<header>
     <img src=../Images/fsdm.jpg alt="logo of FSDM"></a> 
        <p>SMI6 <br>Faculte des Sciences Dhar Mehraz,Fes</p>
    <div style="height: 20px;background-color:brown;">
    <h4 style="text-align:right;margin-right:40px"><?=AffDate($lang) ?></h4>
    </div>

<div align= "right">
<?php if (isset($_SESSION["login"])){?>
Vous êtes connectés en tant que:  <?= $_SESSION["login"] ?>&nbsp;&nbsp;
<a href = "deconnexion.php">Déconnexion</a> 
<?php } else {?>Non Connecté<?php }?> <a href = "Options.php">Options</a> 

</div>
   </header>

<?php

if(!isset($_POST["login"]) || !isset($_POST["password"]) || $_POST["login"] != "mohammed" || $_POST["password"] !="2019-2020") {

include("form.php");
exit();
}
session_start();
$_SESSION["login"]=$_POST["login"];
header ("location:page1.php");
?>

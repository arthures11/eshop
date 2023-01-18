<?php
include("connectiontodb.php");
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');

if(isset($_POST['action']) && $_POST['action'] == 'update-nazwa')
{
$userid=$_POST['id'];
$nazwa=$_POST['nazwa'];
$upd="UPDATE produkty SET nazwa='$nazwa' WHERE id='$userid'";
}
else if((isset($_POST['action']) && $_POST['action'] == 'update-cena'))
{
$userid=$_POST['id'];
$cena=$_POST['cena'];
$upd="UPDATE produkty SET cena='$cena' WHERE id='$userid'";
}
else if((isset($_POST['action']) && $_POST['action'] == 'update-ilosc'))
{
$userid=$_POST['id'];
$ilosc=$_POST['ilosc'];
$upd="UPDATE produkty SET ilosc='$ilosc' WHERE id='$userid'";
}
else if((isset($_POST['action']) && $_POST['action'] == 'update-opis'))
{
$userid=$_POST['id'];
$opis=$_POST['opis'];
$upd="UPDATE produkty SET opis='$opis' WHERE id='$userid'";
}
else if((isset($_POST['action']) && $_POST['action'] == 'update-kategoria'))
{
$userid=$_POST['id'];
$kategoria=$_POST['kategoria'];
$upd="UPDATE produkty SET kategoria='$kategoria' WHERE id='$userid'";
if($kategoria=="USUN"){
    $upd="DELETE FROM produkty WHERE id='$userid'";
}
}

$conn->query($upd);

?>
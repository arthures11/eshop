<?php
include("connectiontodb.php");
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'init.php');

if(isset($_POST['action']) && $_POST['action'] == 'update-imie')
{
$userid=$_POST['id'];
$imie=$_POST['imie'];
$upd="UPDATE user SET imie='$imie' WHERE id='$userid'";
}
else if((isset($_POST['action']) && $_POST['action'] == 'update-nazwisko'))
{
$userid=$_POST['id'];
$nazwisko=$_POST['nazwisko'];
$upd="UPDATE user SET nazwisko='$nazwisko' WHERE id='$userid'";
}
else if((isset($_POST['action']) && $_POST['action'] == 'update-email'))
{
$userid=$_POST['id'];
$email=$_POST['email'];
$upd="UPDATE user SET email='$email' WHERE id='$userid'";
}
else if((isset($_POST['action']) && $_POST['action'] == 'update-status'))
{
$userid=$_POST['id'];
$status=$_POST['status'];
$upd="UPDATE user SET status='$status' WHERE id='$userid'";
if($status=="USUN"){
    $upd="DELETE FROM user WHERE id='$userid'";
}
}

$conn->query($upd);

?>
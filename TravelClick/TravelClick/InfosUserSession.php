<?php
session_start();
$_SESSION['usuario']="jonatas.juliari";
$_SESSION['dep']="desenvolvimeno";
$_SESSION['idUser'] ="1";

$username= $_SESSION['usuario'];
$dep= $_SESSION['dep'];
$iduser= $_SESSION['idUser'];

$vetor_info_user_session = array($username,$dep,$iduser);
$json = json_encode($vetor_info_user_session);
echo($json);

?>
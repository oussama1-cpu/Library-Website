<?php
include "connexion.php";

$p=$_POST['mail'];
$n=$_POST['adresse'];


$r = "SELECT * FROM t WHERE mail='$p' and adresse='$n'";

$resultat = $sq->query($r) or die ($sq->error());
if($ligne = $resultat->fetch_assoc()){
    echo "Bienvenue.<br><br>";
    header('Location:index.html');
    exit();}
  
  else{
    echo "Login ou le mot de passe est incorrect.<br><br>";
    header('Location:login.html');
    exit();}

?>
<a href ="login.html">Page d'acceuil</a>
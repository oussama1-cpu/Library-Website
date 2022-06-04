<?php
$sq = new mysqli("localhost", "root", "", "test");


if ($sq->connect_error) { 

die($sq->connect_error);


}
else{
    $p=$_POST['nom'];
    $n=$_POST['prenom'];
    $RR=$_POST['mail'];
    $L=$_POST['adresse'];
    $t=$_POST['meassage'];
    $r = "INSERT INTO ult1 (nom,prenom,,mail,adresse,mesager) VALUES ('$p','$n','$RR','$L','$t')";
    $resultat = $sq->query($r) ;
    echo $resultat;
    
    echo "Insertion faite avec succès<br><br>";
    

}
?>
<a href="commande.html">retour</a>
<?php
include "connexion.php";

	if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['tel']) || !isset($_POST['mail']) || !isset($_POST['adresse'])) {
		$erreur = 'Les variables n�cessaires au script ne sont pas d�finies.';
        header('Location :"inscription.html');
        exit();
	}
	else {
        $p=$_POST['nom'];
        $n=$_POST['prenom'];
        $e=$_POST['tel'];
        $RR=$_POST['mail'];
        $L=$_POST['adresse'];
        $r = "INSERT INTO t (nom,prenom,telephone,mail,adresse) VALUES ('$p','$n','$e','$RR','$L')";
        $resultat = $sq->query($r) or die ($sq->error());
        
        echo "Insertion faite avec succès<br><br>";
    
    }





?>
<a href="inscription.html">retour</a>
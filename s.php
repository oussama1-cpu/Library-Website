<?php include  "connexion.php";

$requete = "DELETE FROM t WHERE id=".$_GET['identifiant'];

$resultat = $sq->query($requete) or die ($sq->error());

echo "suppression faite avec succès";
/*if (!empty($_POST['login']) )
$user=$_POST['login'];
if(isset($_POST['supp'])){
$x=0;
$resulta=$bdd->query('select login from personnes where profile="professeur" or profile="etudiant"');

while($donne=$resulta->fetch()){
if($donne['login']==$user){
$reponce5=$bdd->prepare('delete from personnes where login=?');

$reponce5->execute(array( $user));
echo 'compte supprimer';
$x=1;
break;
}
}

if($x==0)
echo 'compte n \'existe pas';*/
?>
<br><center>
<a href="afficher.php">retour</a>
</center>
<br>
</body></html>
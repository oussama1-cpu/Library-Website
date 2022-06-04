<?php
include  "connexion.php";

$s= "SELECT * FROM t WHERE id=".$_GET["identifiant"];
$resultat= $sq->query($s) or die ($sq->error());

echo "<br><table align='center' >
<tr>
<td><font color='red'>id</font></td>
<td><font color='red'>nom</font></td>
<td><font color='red'>prenom</font></td>
<td><font color='red'>email</font></td>
</tr>";

while ($ligne = $resultat->fetch_assoc())
{
    echo '<tr><td>'. $ligne["id"] .'</td>';
    echo '<td>'. $ligne["nom"] .'</td>';
    echo '<td>'. $ligne["prenom"] .'</td>';
    echo '<td>'. $ligne["mail"] .'</td>
    </tr>';
}
echo "</table>";
?>
<br><center><a href ="afficher.php">Revenir à la liste</a></center>
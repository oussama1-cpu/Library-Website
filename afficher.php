<?php
include  "connexion.php";

$s= "SELECT * FROM t";
$resultat= $sq->query($s) or die ($sq->error());

echo "<br><table align='center' >
<tr>
<td><font color='red'>id</font></td>
<td><font color='red'>nom</font></td>
</tr>";

while ($ligne = $resultat->fetch_assoc())
{
    echo '<tr><td>'. $ligne["id"] .'</td>';
    echo '<td>'. $ligne["nom"] .'</td>
    <td><a href=detail.php?identifiant='.$ligne["id"].'>details</a></td>
    <td><a href=s.php?identifiant='.$ligne["id"].'>supprimer</a></td>
    </tr>';
}
echo "</table>";
?>
<br><center><a href ="inscription.html">inscription</a></center>
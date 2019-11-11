<form method=POST name=f action="Actsupp.php">
<?

mysql_connect("localhost","root","") or die ("La connection a échouée!");
mysql_select_db("formation");
$requete="select * from inscription ";
$result=mysql_query($requete);
echo"<table border=1><tr><td></td><td><b>Num_CIN</td><td><b>Nom</td><td><b>Prénom</td><td><b>Ville</td><td><b>Email</td><td><b>HTML</td><td><b>JavaScript</td><td><b>PHP</td></tr></b><tr>";
while($ligne=mysql_fetch_array($result))
{echo"<td><input type=checkbox name=sup value=$ligne[0]></td>";
echo"<td>".$ligne['Num_CIN']."</td><td>".$ligne['Nom']."</td><td>".$ligne['Prénom']."</td><td>".$ligne['Ville']."</td><td>".$ligne['E-mail']."</td><td>".$ligne['HTML']."</td><td>".$ligne['JavaScript']."</td><td>".$ligne['PHP']."</td></tr>";}
echo"</table>";
echo"<br><a href='Inscription.html'>Retour</a>";
?>
<br><br><input type=submit value=Supprimer></form>
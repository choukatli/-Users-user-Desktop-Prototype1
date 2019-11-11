<form method=POST name=f action="Actmaj.php">
<h2 align=center><u><font face="comic sans ms" color=#006699>Saisissez les modifications</font></u></h2>
<table><tr>
<td>-Donner le numéro de CIN:&nbsp;&nbsp;</td><td><input type=texte name=cin size=40></td></tr>
<tr><td>-Donner le nom:&nbsp;&nbsp;</td><td><input type=texte name=nom size=40></td></tr>
<tr><td>-Donner le prénom:&nbsp;&nbsp;</td><td><input type=texte name=pren size=40></td></tr>
<tr><td>-Donner la ville:&nbsp;&nbsp;</td><td><input type=texte name=vil size=40></td></tr>
<tr><td>-Donner l'adresse E-mail:&nbsp;&nbsp;</td><td><input type=texte name=adr size=40></td></tr></table><br>
<font size=5 color=navy face="agency fb"><u><b>Choisissez un module:</b></u></font><br>
<table>
<tr><td><input type=checkbox name=HTML></td><td>&nbsp;&nbsp;&nbsp;&nbsp;Le language HTML</td></tr> 
<tr><td><input type=checkbox name=Js></td><td>&nbsp;&nbsp;&nbsp;&nbsp;Le language JavaScript</td></tr>
<tr><td><input type=checkbox name=PHP></td><td>&nbsp;&nbsp;&nbsp;&nbsp;Le language HTML</td></tr></table>
<font size=5 color=navy face="agency fb"><u><b>Sélectionnez la ligne à modifier:</b></u></font><br>
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
echo"<a href='Inscription.html'>Retour</a>";
?>
<center><input type=submit value=Modifier> <input type=reset value=Annuler></center></form>
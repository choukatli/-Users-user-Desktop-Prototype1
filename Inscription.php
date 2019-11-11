<?
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$pren=$_POST['pren'];
$vil=$_POST['vil'];
$adr=$_POST['adr'];
if(isset($_POST['HTML']))
$val1=1;else $val1=0;
if(isset($_POST['Js']))
$val2=1;else $val2=0;
if(isset($_POST['PHP']))
$val3=1;else $val3=0;
mysql_connect("localhost","root","") or die ("La connection a échouée!");
mysql_select_db("formation");
$requete="insert into inscription values('$cin','$nom','$pren','$vil','$adr','$val1','$val2','$val3')";
$result=mysql_query($requete);
if($result)
{echo"L'inscription est effectuée avec succès";}
else
{echo"L'inscription est échouée";}
echo"<br><a href='Inscription.html'>Retour</a>";

?>

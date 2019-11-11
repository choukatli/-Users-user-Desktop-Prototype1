<?
$cin=$_POST['cin'];echo"$cin";
$nom=$_POST['nom'];echo"$nom";
$pren=$_POST['pren'];echo"$pren";
$vil=$_POST['vil'];echo"$vil";
$adr=$_POST['adr'];echo"$adr";
if(isset($_POST['HTML']))
$val1=1;else $val1=0;
if(isset($_POST['Js']))
$val2=1;else $val2=0;
if(isset($_POST['PHP']))
$val3=1;else $val3=0;
$sup=$_POST['sup'];
mysql_connect("localhost","root","") or die ("La connection a échouée!");
mysql_select_db("formation");
$requete="update inscription set Num_CIN=$cin Nom=$nom Prénom=$pren Ville=$vil E-mail=$adr HTML=$val1 Js=$val2 PHP=$val3
where Num_CIN=$sup";
$result=mysql_query($requete);
header("location:Maj.php");
?>

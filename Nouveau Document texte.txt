<?
$sup=$_POST['sup'];
mysql_connect("localhost","root","") or die ("La connection a échouée!");
mysql_select_db("formation");
$requete="delete from inscription where Num_CIN=$sup";
$result=mysql_query($requete);
header("location:Supp.php");
?>
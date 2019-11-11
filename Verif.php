<?
$log=$_POST['log'];
$mp=$_POST['mp'];
mysql_connect("localhost","root","") or die ("La connection a échouée!");
mysql_select_db("formation");
$requete="select * from administrateur where Login='$log' and MP='$mp'";
$result=mysql_query($requete);
if($ligne=mysql_fetch_row($result))
header("location:Page1.html");
else
header("location:Admin.php");
?>
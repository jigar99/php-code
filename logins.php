<?php
$inputuser=$_POST['user'];
$inputpas=$_POST['pass'];
$user="";
$password="";

$logins=mysql_connect("localhost",$user,$password);
@mysql_select_db(tutorial) or ("Database not found");
$query="SELECT * FROM 'user ' WHERE 'user' * '$inputuser'";
$querypass="SELECT *FROM 'user' WHERE 'password'* 'inputpass'";

$result=mysql_query($query);
$result=mysql_query($querypass);

echo $query;
echo $querypass;
mysql_close();


?>
<?require("../include/global.php");
?>

<html>
<form name="add" method="post">
�ӹ�˹��:<input type="text" name="header">
������鹷���Ţ : <input type="text" name="username">
�ӹǹ : <input type="text" name="amount">
<input type="submit" name="submit" value="submit">
</form><br>
Forreset Password
<form name="reset" method="post">
���ʹ�˹�� (�� tuxml) <input type="text" name="namelike"><br>
<input type="submit" name="resetpasswd" value="resetpasswd">
</form>
</html>

<?
 if($submit){
$num=0;
while($num <= $amount){
$number=$username+$num;
$login="$header$number";
$password=MD5("$login");
if($stmp=mysql_query("INSERT INTO users (active,login,password,category) values(1,'$login','$password',2);")){
$idget=mysql_insert_id();
mysql_query("INSERT INTO users_info(id) values ('$idget');");
//}
echo $login;
echo "<br>";
}
$num++;
}
}
if($resetpasswd){
$sql=mysql_query("SELECT login from users where login like '".$namelike."%';");
while($row=mysql_fetch_array($sql)){
echo $row["password"],"<br>";
mysql_query("UPDATE users set password='".md5($row["login"])."' where
login='".$row["login"]."';");
}
}
?>

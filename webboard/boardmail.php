<?
/* 
 * **********************************************
 * **	     PHP - WebBoard : Send Mail        **
 * **********************************************
 * *                                            *
 * * Developed By : Sansak Chairattanatrai      *
 * * E-mail :  sansak@engineer.com              *
 * * UIN : 5590582                              *
 * * License : SamChai Public Soft Group(tm).   *
 * *                                            *
 * **********************************************
 */ 
?>

<html>
<style>
<!-- 
BODY 
A:link {text-decoration: none; color: blue }
A:visited {text-decoration: none; color: blue }
A:hover {text-decoration: none; color: darkorange }
A:active {text-decoration: none; color: blue }
-->
</style>

<body bgcolor=#F5FFFA>
<center>
<font size=2 face="MS Sans Serif">

<?
$f_email = $email;
if($email) $email = "[".$email."]";
$msg = "From : $f_email \n Subject : $subject \n\n $message \n\n �ҡ : $name";

if(mail($mailto , $subject , $msg , "From : ". $f_email)) {
	echo "<table cellpadding=2><tr><td bgcolor=#ff69b4>";
    echo "<table cellpadding=20><tr><td bgcolor=#f0ffff>";
	echo "<center>";
	echo "<font size=2 face='MS Sans Serif'>";
	echo "<font size=3 color=red><b>��ӡ����������</b></font><br>";
	echo "�ҡ�س <b>$name $email</b><br>";
	echo "���º�������Ǥ�Ѻ<br>";
	echo "</center>";
	echo "</td></tr></table>";
	echo "</td></tr></table>";
} else {
	echo "<table cellpadding=2><tr><td bgcolor=#ff69b4>";
    echo "<table cellpadding=20><tr><td bgcolor=#f0ffff>";
	echo "<center>";
	echo "<font size=2 face='MS Sans Serif'>";
	echo "<font size=3 color=red><b>�������ö������</b></font><br>";
	echo "�ҡ�س <b>$name $email</b><br>";
	echo "��㹢�й���Ѻ<br>";
	echo "</center>";
	echo "</td></tr></table>";
	echo "</td></tr></table>";

}

?>
<br><br>
<hr color=1E90FF>
<font size=1 face="MS Sans Serif">
	<b>Copy<font color=FF1493>LEFT</font> and Powered By : <a href=mailto:sansak@engineer.com>Sansak</a></b>
</font>
</center>
</body>
</html>
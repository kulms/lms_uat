<?
/* 
 * **********************************************
 * **     PHP - WebBoard : Member Register     **
 * **********************************************
 * *                                            *
 * * Developed By : Sansak Chairattanatrai      *
 * * E-mail :  sansak@engineer.com              *
 * * UIN : 5590582                              *
 * * License : SamChai Public Soft Group(tm).   *
 * *                                            *
 * **********************************************
 */  

	require("config.inc.php");

?>

<html>
<style type="text/css">
<!-- 
BODY {font-family:;font-size="10"}
A:link {text-decoration: none; color: blue }
A:visited {text-decoration: none; color: blue }
A:hover {text-decoration: none; color: darkorange }
A:active {text-decoration: none; color: blue }
p, div, td, ul li, ol li { font-family:  MS Sans Serif, Microsoft Sans Serif;  font-size: 10pt }
-->
</style>


<?
	$User = trim(htmlspecialchars($User));
	$Pass1 = trim(htmlspecialchars($Pass1));
	$Pass2 = trim(htmlspecialchars($Pass2));
	$Email = trim(htmlspecialchars($Email));
	$ICQ = trim(htmlspecialchars($ICQ));
	$WebName = trim(htmlspecialchars($WebName));
	$URL = trim(htmlspecialchars($URL));

	// ��Ǩ�ͺ������ʼ�ҹ�ç�ѹ�������
	$n_pw1 = strlen($Pass1);
	if($Pass1!=$Pass2 || $n_pw1<4) {
		echo "<center>";
		echo "<table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>";
		echo "<tr><td align=center>";
		echo "<font size=2 face='MS Sans Serif'>";
        echo "<font size=3 color=red><b>���ʼ�ҹ���ç�ѹ</b></font><br><br>";
		echo "���͹��¡��� 4 ��ѡ ��سҵ�Ǩ�ͺ���١��ͧ���¤�Ѻ : )";
		echo "</font></td></tr></table>";
		echo "<br><hr width=500 color=blue>";
		echo "<font size=2 face='MS Sans Serif'>";
		echo "[<a href='javascript:history.back(1)'>Back</a>]";
		echo "</center>";
		exit();
	}

	if($action!="edit") {
	// ��Ǩ�ͺ��� user ����Ѻ����ŧ����¹������ѧ
	mysql_connect($host,$user,$passwd);
	$sql = "select User from webboard_member where User='$User'";
	$result = mysql_db_query($dbname,$sql);
	$NRow = mysql_num_rows($result);

	// �����ŧ����¹���� ����駢�ͼԴ��Ҵ
	if($NRow!=0) {
		echo "<center>";
		echo "<table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>";
		echo "<tr><td align=center>";
		echo "<font size=2 face='MS Sans Serif'>";
        echo "<font size=3 color=red><b>Username [$User] ��١�������</b></font><br><br>";
		echo "��س�����¹ Username ���¤�Ѻ";
		echo "</font></td></tr></table>";
		echo "<br><hr width=500 color=blue>";
		echo "<font size=2 face='MS Sans Serif'>";
		echo "[<a href='javascript:history.back(1)'>Back</a>]";
		echo "</center>";
		exit();
	}
	mysql_close(); 
	}

	// ��ͧ�ѹ����á html �Ѻ ������ͧ���� ' "
	$User = htmlspecialchars($User);
	$Password = htmlspecialchars($Pass1);
	$Email = htmlspecialchars($Email);
	$ICQ = htmlspecialchars($ICQ);
	$WebName = htmlspecialchars($WebName);
	$URL = htmlspecialchars($URL);

	// ��Ѻ�������ç�Ѻ�������ͧ�� �óշ�� server ���������ͧ�͡
	$mdate = date("j M Y H:i",mktime( date("H")+$p_hour, date("i")+$p_min ));

	// �ѹ�֡������ŧ�ҹ������
	mysql_connect($host,$user,$passwd);
	if($action=="edit") {
		$sql = "update webboard_member set Password='$Password' , Email='$Email' , ICQ='$ICQ' , WebName='$WebName' , URL='$URL' where User='$User'";
	}
	else {
		$sql = "insert into webboard_member (User,Password,Email,ICQ,WebName,URL,Date) values ('$User','$Password','$Email','$ICQ','$WebName','$URL','$mdate')";
	}
	$result = mysql_db_query($dbname,$sql);

	if($result==0) {
		echo "<center>";
		echo "<table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>";
		echo "<tr><td align=center>";
		echo "<font size=2 face='MS Sans Serif'>";
        echo "<font size=3 color=red><b>�բ�ͼԴ��Ҵ����к�</b></font><br><br>";
		echo "��س��� admin ����Ǩ�ͺ���¤�Ѻ";
		echo "</font></td></tr></table>";
		echo "<br><hr width=500 color=blue>";
		echo "<font size=2 face='MS Sans Serif'>";
		echo "[<a href='javascript:history.back(1)'>Back</a>]";
		echo "</center>";
		exit();
	}
	mysql_close(); 

	if($action=="edit") {
		echo "<center>";
		echo "<table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>";
		echo "<tr><td align=center>";
		echo "<font size=2 face='MS Sans Serif'>";
		echo "<font size=3 color=red><b>����䢢����Ţͧ $User </b></font><br><br>";
		echo "��кѹ�֡ŧ㹰ҹ����������";
		echo "</font></td></tr></table>";
		echo "<br><hr width=500 color=blue>";
		echo "<font size=2 face='MS Sans Serif'>";
	}
	else {
		echo "<center>";
		echo "<table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>";
		echo "<tr><td align=center>";
		echo "<font size=2 face='MS Sans Serif'>";
		echo "<font size=3 color=red><b>�����������Ţͧ $User </b></font><br><br>";
		echo "ŧ㹰ҹ����������";
		echo "</font></td></tr></table>";
		echo "<br><hr width=500 color=blue>";
		echo "<font size=2 face='MS Sans Serif'>";
	}

?>
	<br>
	<font size=2 face="MS Sans Serif">
	[<a href="../webboard/webboard.php?Category=<? echo $Category; ?>&page=<? echo $page; ?>">�˹����纺���</a>]
	<font>
</center>
<html>
<head>
<title>PHP - Ultimate Webboard 2.00 : MailTO</title>
</head>

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

<body background="../img/whpaper.gif">
	<font size=2 face="Arial,MS Sans Serif">
    <h2><font color=blue> Ẻ�����������֧�س<?echo $name; ?></font></h2>
	</font>
    <br>
	<center>

	<form method=post action="boardmail.php" name="mailForm" onsubmit="return check()">
	<table border=1 bordercolor=#1E90FF bgcolor=E0FFFF cellpadding=2 cellspacing=0>
	<tr><td>�������ͧ</td><td><input type=text name="subject" value="Re:<?echo $question;?>" size=50 maxlength=80></td></tr>
	<tr><td>��ͤ���</td><td><textarea name="message" cols=50 rows= 8></textarea></td></tr>
	<tr><td>�¤س</td><td><input type=text name="name" size=50 maxlength=50></td></tr>
	<tr><td>E-mail</td><td><input type=text name="email" size=50 maxlength=50></td></tr>
	</table>
	<br>
	<input type="hidden" name="mailto" value=<?echo $wemail;?>>
	<input type=submit value="������"> 
    <input type=reset value="¡��ԡ">
	</form>
	
<hr color=1E90FF>
<font size=1 face="MS Sans Serif">
	<b>Copy<font color=FF1493>LEFT</font> and Powered By : <a href=mailto:sansak@engineer.com>Sansak</a></b>
</font>
</center>

<script language="JavaScript">
<!--
function check()
{
      var v1 = document.mailForm.subject.value;
      var v2 = document.mailForm.message.value;
      var v3 = document.mailForm.name.value;
        if ( v1.length==0)
           {
           alert("��سһ�͹�Ӷ����Ѻ");
           document.mailForm.subject.focus();           
           return false;
           }
        else if (v2.length==0)
           {
           alert("��سһ�͹��������´");
           document.mailForm.message.focus();           
		   return false;
           }
        else if (v3.length==0)
           {
           alert("��سһ�͹���ͼ����");
           document.mailForm.name.focus();           
		   return false;
           }
        else
           return true;
}
//-->
</script>
</body>
</html>

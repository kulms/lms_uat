<?require ("include/global.php");

// Complete this script with mail function!

if((!$forgot) || ($forgot=="")){
?>
<html>
<head>
	<link rel="STYLESHEET" type="text/css" href="main.css">
	<script type="text/javascript" language="JavaScript" src="check_pass.js"></script>	
</head>
<body bgcolor="#ffffff">
<p>&nbsp;</p>
<div class="h3" align="center">�ó���� password</div>
<div class="h5" align="center"></div>
<p>
<div class="main" align="center">������ Username ����ҹ������ <br>
password �ͧ��ҹ�ж١�觡�Ѻ��ѧ <font
color="cc0099">(your-account)@nontri.ku.ac.th</font> �ѹ��</div>
<form action="forgot_login.php" method="post" onSubmit="return checkmail(this);">
	<table align="center">
		<tr>
			<td class="info">User Name  </td>
			<td class="main"><input type="text" name="loginname" size="25"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="forgot" value="Send me my password!"></td>
		</tr>
	</table>
</form>
</body>
</html>
<?
}
else{
$emailhost="@nontri.ku.ac.th";
$email="$loginname$emailhost";
	$userinfo=mysql_query("SELECT login,password,email,firstname FROM users WHERE email='".$email."';");
	if($row=mysql_fetch_array($userinfo)){
		$mailbody = "Hi ".$row["firstname"]."!\n\n User Name ��� Password �ͧ��ҹ
\nlogin:".$row["login"]."\nPassword:".$row["password"]."\n\n
Course on Web , ������ǡ�����ʵ�� , ����Է������ɵ���ʵ��";
		if($a=mail($row["email"],"Your login
information",$mailbody,"From:courseadmin@$SERVER_NAME")){
			?>
			<html>
			<head>
				<link rel="STYLESHEET" type="text/css" href="main.css">
			</head>
			<body bgcolor="#ffffff"><p>&nbsp;</p>
				 <div class="main"
align="center"><font size=+2 color="#cc0099">���ѭ����ª��ͧ͢��ҹ����㹰ҹ�����Ũ�ԧ <br>
				Check Password in your Mail!!!
</font></div>
			 </body>
			</html>
	<?
		}
		else{?>
			<html>
			<head>
				<link rel="STYLESHEET" type="text/css" href="main.css">
			</head>
			<body bgcolor="#ffffff"><p>&nbsp;</p>
				 <div class="main" align="center">Sorry, an internal error occured. Please try again later...</div>
			 </body>
			</html>
		<?}
	}
	else{
?>
		<html>
		<head>
			<link rel="STYLESHEET" type="text/css" href="main.css">
			<script type="text/javascript" language="JavaScript" src="check_pass.js"></script>	
		</head>
		<body bgcolor="#ffffff">
		<p>&nbsp;</p>
			<div class="h3" align="center">��辺��ª��� (User Name
�ͧ��ҹ㹰ҹ������ :-( <br>
�ô��Ǩ�ͺ��ҷ�ҹ�����١��ͧ������� ������੾�� user name ��ҹ�� <br>
�� <font color="#cc0099">g4165265 , fengsnc </font>�繵�</div>
		</body>
		</html>	
<?
	}
}?>

<?  require ("../include/global.php");  

		function password()
		{		
				srand((double)microtime()*1000000);
				$numchar=rand(4,6);
				$temp="";
				for($b=0;$b<$numchar;$b++)
				{
						$chrnum=rand(48,109);
						if($chrnum>57)
								$chrnum+=7;
		
						if($chrnum>90)
								$chrnum+=6;
					
						$temp=$temp.chr($chrnum);
				}
				return $temp;
		}

	if(!$login || $login=="")
	{ 
?>

<html>
<head>
<title>.:: Trainee or other apply system ::.</title>
<link rel="STYLESHEET" type="text/css" href="../main.css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>

<body  bgcolor="#0a39c7" leftmargin="0" topmargin="0" text="#FFFF00">

<form action="insert_trainee.php" method="post" name="create_login";">

  <table align="center" width="550">
    <tr><td class="info" align="right" colspan="2">&nbsp;</td></tr>
    <tr bgcolor="#FFFFCC"> 
      <td colspan="2" align="center" class="info">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" class="res"><b>Login : </b></td>
      <td class="main"><input name="login" type="text" id="login" maxlength="255">
        ( Case sensitive and English ONLY)</td>
    </tr>
	<!--<tr> 
      <td align="right" class="info"><b><font color="#CCCC00">Password :</font></b></td>
      <td class="main"><input name="password" type="text" id="password" maxlength="255"></td>
    </tr>
    <tr> 
      <td align="right" class="info"><b><font color="#CCCC00">Confirm password :</font></b></td>
      <td class="main"><input name="password2" type="text" id="password2" maxlength="255"></td>
    </tr> -->
    <tr> 
      <td align="right" class="info"><b><font color="#CCCC00">�ӹ�˹�Ҫ��� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input name="title" type="text" size="8" maxlength="32">
        ( ���/�ҧ���/�.�./��./���)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input name="firstname" type="text" maxlength="255">
        ( ��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���ʡ�� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input name="surname" type="text" maxlength="255">
        ( ��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���ྨ :</font></b></td>
      <td class="main"><input name="homepage" type="text" id="homepage" maxlength="255"></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">������ӹѡ�ҹ :</font></b></td>
      <td class="main"><font color="#CCCC00">
<textarea name="office_address" cols="80" rows="4" wrap="VIRTUAL" id="office_address"></textarea>
        </font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���Ѿ�� :</font></b></td>
      <td class="main"><input name="office_telephone" type="text" id="telephone3">
        ( ���Ѿ����ӧҹ)</td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00"> ������� :</font></b></td>
      <td class="main"><font color="#CCCC00"> 
	  
        <textarea name="address" cols="80" rows="4" wrap="VIRTUAL" id="address"></textarea>
		 <br> ( �������������¹��ҹ���ͷ��ѡ�Ѩ�غѹ) </font></td>

    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���Ѿ�� :</font></b></td>
      <td class="main"><input name="telephone" type="text" id="telephone">
        ( ���Ѿ����ѡ/��ǹ���) </td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">��Ͷ�� :</font></b></td>
      <td class="info"><input name="mobile" type="text" id="mobile"></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">����ʹ� :</font></b></td>
      <td class="info"><input name="skill_interest" type="text" id="skill_interest"></td>
    </tr>
    <tr> 
      <td><b><font color="#CCCC00"></font></b></td>
      <td class="info"><font color="#CCCC00"> �������!!����¹ mode ��þ����������<font color="#FF99FF"> 
        <b>�ѧ��ɵ�����</b></font>��͹��͡㹪�ͧ E-Mail </font></td>
    </tr>
    <tr> 
      <td class="info" align="right" height="2"><b><font color="#CCCC00">E-Mail :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input type="text" name="email2" maxlength="255">
        ( �������ö���Ѵ�� password �����ҹ��)</font></td>
    </tr>
    <tr> 
      <td class="main" align="center" colspan=2> <input type="submit" name="subm" value="Submit"> 
      </td>
    </tr>
    <tr bgcolor="#FFFFCC"> 
      <td height="15" colspan=2 align="center" class="main">&nbsp;</td>
    </tr>
  </table>

  </form>
  
</body>
</html>
<?	if($subm)
			{		$emailhost="@nontri.ku.ac.th";
				
					$pos = strpos($login, "@");
					if ($pos === false) 
					{ 			
							$login=trim($login);
							
					}else{		if($pos!=0)								
											$login = substr($login, 0, $pos);
								}
				$email=trim($email);
				$firstname=trim($firstname);
				$surname=trim($surname);
				$homepage=trim($homepage);
				$address=trim($address);
				$skill_interest=trim($skill_interest);
				$telephone=trim($telephone);
				$mobile_phone=trim($mobile_phone);
				$office_tel=trim($office_tel);
				$office_address=trim($office_address);
								
				$title=trim($title);
				$email2=trim($email2);
				$email="$login$emailhost";
				mysql_query("INSERT INTO users (active,login,email,firstname,surname,homepage,category,title,email2,temp) 
											VALUES (1,'".$login."','".$email."','$firstname','$surname','$homepage',4,'$title','$email2,',5);");
				mysql_query("INSERT INTO users_info (address,skill_interest,telephone, mobile_phone,office_tel,office_address ) 
											 VALUES ('$address','$skill_interest','$telephone','$mobile_phone','$office_tel','$office_address');");
				$id=mysql_insert_id();
				print("<script language='javascript'> document.location = '../../index.html';</script>");
			}  

 }else{
        $err=0;
        $users=mysql_query("SELECT id from users WHERE login='".$login."';");
        if($check=mysql_fetch_array($users))
		{        // if user exists
?>
		<html>
		<head>
		<link rel="STYLESHEET" type="text/css" href="../main.css">
		</head>
		
		<body>
		<p>&nbsp;</p>
		<div class="h3" align="center">�ѭ����ª��ͧ͢��ҹ  ������㹰ҹ���������� �ҡ���͹�� �繪��ͺѭ�ռ����ͧ��ҹ��ԧ ���� click ��� ������ʼ�ҹ ���� <a href="forgot_login.php"> click ����� </a> ���������ʼ�ҹ��������ҹ</div>
		<p><div class="main" align="center">�ҡ�ջѭ������ǡѺ�ѭ����ª��ͧ͢��ҹ ����� email �ҷ�� <a href="mailto:admin@course.eng.ku.ac.th">admin@course.eng.ku.ac.th</a></div>
		</body>
		</html>
		<?
        }else{   // no existing user with that login and password
                $passwd=password();
                $emailhost="@nontri.ku.ac.th";
				
				$pos = strpos($login, "@");
				if ($pos === false) 
				{ 	
						$login=trim($login);
						
				}else{	if($pos!=0)								
									$login = substr($login, 0, $pos);
							}
				
                $email="$login$emailhost";
                mysql_query("INSERT INTO users (active,login,password,email,firstname,surname,category,title,ucode,temp, dept_id, fac_id, major_id) VALUES (1,'".$login."','".$passwd."','".$email."','$firstname','$surname',2,'$title','$ucode',5,'$dept', '$fac','$major');");
                $id=mysql_insert_id();
                $mailbody = "Hi!\n\nUse these information:\nUser Name:".$login."\nPassword:".$passwd."\n\nWelcome to Classroom Support at Faculty of
Engineering , KU";
                if(mail($email,"Welcome to Classroom Support",$mailbody,"From:admin@$SERVER_NAME"))
				{         ?>
                        <html>
                        <head>
                                <link rel="STYLESHEET" type="text/css" href="../main.css">
                        </head>
                         <body bgcolor="#0a39c7" text="#FFFFCC" link="#FFFF99" vlink="#FFFFCC" alink="#FFFFCC">
                        <p>&nbsp;</p>
                        <div class="h3" align="center">�ѭ����ª�������ͧ��ҹ��١���ҧ���º��������</div>
                        <p>
                        <div class="main" align="center"> �Ѻ login ��� password ���� email �ͧ��ҹ ( <font color="red"><? echo $login; ?>@nontri.ku.ac.th </font>)</div>
                        <p>
                        <p>
                        <div class="main" align="center">  ������� loginname ��� password ���� ������ҹ�Ѻ�к� � ʹѺʹع������¹����͹��ҹ��纷�� website <a href="http://course.eng.ku.ac.th">http://course.eng.ku.ac.th</a> ��ѹ��</div>
                        <p>
                        <hr width="50%">
                        <p>&nbsp;</p>
                        <div class="h3" align="center">OK, created new login.</div>
                        <p>
                        <div class="main" align="center">Please check  loginname and password  from your email ( <font color="red"><? echo $login; ?>@nontri.ku.ac.th </font> )</div>
                        <p> <div class="h3" align="center">After you've got your loginname and password. Please use that information at  website<a href="http://course.eng.ku.ac.th"> http://course.eng.ku.ac.th </a></div>
                        <p>
						</body>
                        </html>
                        <?
                }else{
                        ?>
                        <html>
                        <head>
						<link rel="STYLESHEET" type="text/css" href="../main.css">
                        </head>
                        <body>
                        <p>&nbsp;</p>
                        <div class="h3" align="center">Error sending email.</div>
                        <p>
                        <div class="main" align="center">Did you write a valid email?<br>Contact the administrator 
						<a href="mailto:admin@<? echo $SERVER_NAME; ?>">admin@<? echo $SERVER_NAME; ?></a>.</div>
                        </body>
                        </html>
<?			}
        }
} 
mysql_close();
?>
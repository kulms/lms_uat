<? require ("../include/global.php");

/*function password()
{
        srand((double)microtime()*1000000);
        $numchar=rand(4,6);
        $temp="";
        for($b=0;$b<$numchar;$b++){
                $chrnum=rand(48,109);
                if($chrnum>57){
                        $chrnum+=7;
                }
                if($chrnum>90){
                        $chrnum+=6;
                }
                $temp=$temp.chr($chrnum);
        }
        return $temp;
}

if(!$login || $login=="")
{     */   ?>
<html>
<head>
<link rel="STYLESHEET" type="text/css" href="../main.css">
<!script type="text/javascript" language="JavaScript" src="check_pass.js"><!/script>
<title>Step 2 form For Staff</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>                
<body bgcolor="#0a39c7" leftmargin="0" topmargin="0">
<form action="staff_create.php" method="post" name="create_login" onSubmit="return verify(this);">
                
  <table align="center" width="658">
    <tr bgcolor="#FFFFCC"> 
      <td class="main" align="center" colspan=2>&nbsp;</td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">�ӹ�˹�� :</font></b></td>
      <td class="main"> <font color="#FFFFCC"><input type="text" name="title" size="10">(���/�ҧ���/�.�./ ��./���)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���� :</font></b></td>
      <td class="main"> <font color="#FFFFCC"><input type="text" name="firstname">(��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���ʡ�� :</font></b></td>
      <td class="main"> <font color="#FFFFCC"><input type="text" name="surname">(��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">�������˹��§ҹ���ѧ�Ѵ 
        :</font></b></td>
      <td class="main"><select name="fac" id="fac">
          <option>------- �������˹��§ҹ���ѧ�Ѵ -------------</option>
          <option>������ǡ�����ʵ��</option>
          <option>�ӹѡ͸ԡ�ú��</option>
        </select></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">�Ҥ�Ԫ����ͽ��·���ѧ�Ѵ 
        :</font></b></td>
      <td class="main"><select name="dept" id="dept">
          <option>------- �Ҥ�Ԫ����ͽ��·���ѧ�Ѵ -----------------</option>
          <option>���ǡ������</option>
          <option>���ǡ�������ͧ��</option>
          <option>���ǡ�������������</option>
          <option>���ǡ�����Ѿ�ҡù��</option>
          <option>���ǡ�������ͧ���</option>
          <option>���ǡ���俿��</option>
          <option>���ǡ����¸�</option>
          <option>�ͧ��ҧ</option>
          <option>�ͧ������˹�ҷ��</option>
          <option>�ͧ�Ԩ��ù��Ե</option>
          <option>�ͧ��ѧ</option>
          <option>�ͧ��ԡ�á���֡��</option>
          <option>�ͧἹ�ҹ</option>
          <option>�ͧ��������ѹ��</option>
          <option>�ͧ�ҹ��˹��Ҥ�����ʶҹ��� </option>
          <option>˹��µ�Ǩ�ͺ���� </option>
        </select></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">�Ң��Ԫ�����Ἱ�����ѧ�Ѵ 
        :</font></b></td>
      <td class="main"> <font color="#FFFFCC"> 
        <select name="major" id="major">
          <option>------- ���͡�Ң��Ԫ�����Ἱ�����ѧ�Ѵ -------</option>
          <option>෤��������ʹ��</option>
          <option>���ǡ�������������</option>
          <option>�ҹ�����çҹ�ؤ�� </option>
          <option>�ҹ�Թ����йԵԡ��</option>
          <option>�ҹ����¹����ѵ�</option>
          <option>�ҹ��á��</option>
          <option>�ҹ���ʴԡ�� </option>
        </select>
        <!--
        <select name="dept" >
          <? //$select=mysql_query("SELECT fullname FROM department;");?>
          <option value="no">-------------���͡�Ҥ�Ԫ�����˹��§ҹ------------</option>
          <? //while ($row=mysql_fetch_array($select))
		  //			{ ?>
          <option value="<?// echo $row["fullname"]; ?>"><?// echo $row["fullname"];  ?></option>
          <? // } ?>
        </select>
		-->
        </font></td>
    </tr>
    <tr> 
      <td><b><font color="#FFFFCC"></font></b></td>
      <td class="info"><font color="#FFFFCC"> ����¹ mode ��þ�����������ѧ��ɡ�͹��� email</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">Email :</font></b></td>
      <td class="main"> <font color="#FFFFCC"><input type="text" name="login" maxlength="8" size="10">@ku.ac.th </font>
		<font color="#CCCC00">( @ku.ac.th ���� @nontri.ku.ac.th ��� email ������ǡѹ)</font></td>
    </tr>
    <tr> 
      <td class="main" align="center" colspan=2> <input type="submit" name="subm" value="Submit"> 
      </td>
    </tr>
    <tr bgcolor="#FFFFCC"> 
      <td class="main" align="center" colspan=2>&nbsp;</td>
    </tr>
    <tr> 
      <td class="main" align="center" colspan=2>&nbsp;</td>
    </tr>
  </table>
</form>
</center>
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
				$passwd=trim($passwd);
				$email=trim($email);
				$firstname=trim($firstname);
				$surname=trim($surname);
				$title=trim($title);
				$dept=trim($dept);
				$fac=trim($fac);
				$major=trim($major);
								
				$email="$login$emailhost";
				mysql_query("INSERT INTO users (active,login,email,firstname,surname,category,title,ucode,temp, dept_id, fac_id, major_id) VALUES (1,'".$login."','".$email."','$firstname','$surname',4,'$title','$ucode',5,'$dept', '$fac','$major');");
				$id=mysql_insert_id();
				print("<script language='javascript'> document.location = '../../index.html';</script>");
			}  

/* }else{
        $err=0;
        $users=mysql_query("SELECT id from users WHERE login='".$login."';");
        if($check=mysql_fetch_array($users)){        // if user exists
                ?>
                <html>
                <head>
                        <link rel="STYLESHEET" type="text/css" href="../main.css">
                </head>
                <body>
                <p>&nbsp;</p>
                <div class="h3" align="center">�ѭ����ª��ͧ͢��ҹ  ������㹰ҹ���������� �ҡ���͹�� �繪��ͺѭ�ռ����ͧ��ҹ��ԧ � ��� click ��� ������ʼ�ҹ ���� <a href="forgot_login.php"> click ����� </a> ���������ʼ�ҹ��������ҹ</div>
                <p>
                <div class="main"
align="center">�ҡ�ջѭ������ǡѺ�ѭ����ª��ͧ͢��ҹ ����� email �ҷ�� <a href="mailto:courseadmin@course.eng.ku.ac.th">courseadmin@course.eng.ku.ac.th</a></div>

                </body>
                </html>
                <?
        }else{        // no existing user with that login and password
                $passwd=password();
                $emailhost="@nontri.ku.ac.th";
                $email="$login$emailhost";
                mysql_query("INSERT INTO users (active,login,password,email,firstname,surname,dept,category,title) 
											VALUES (1,'".$login."','".$passwd."','".$email."','$firstname','$surname','$dept',4,'$title');");
                $id=mysql_insert_id();
                $mailbody = "Hi!\n\nUse this login information:\nUser Name:".$login."\nPassword:".$passwd."\n\nWelcome to Classroom Support at Faculty of Engineering , KU";
                if(mail($email,"Welcome to Classroom Support",$mailbody,"From:courseadmin@$SERVER_NAME"))
				{
                        ?>
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
                        <p> <div class="h3" align="center">After you've got your login name and password. Please use that information at  website<a href="http://course.eng.ku.ac.th"> http://course.eng.ku.ac.th </a></div>
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
                        <div class="main" align="center">Did you write a valid email?<br>Contact the administrator <a href="mailto:courseadmin@<? echo $SERVER_NAME; ?>">courseadmin@<? echo $SERVER_NAME; ?></a>.</div>
                        </body>
                        </html>
                        <?
                }
        }
} */
mysql_close();
?>
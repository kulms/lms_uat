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
<title>Application form for Leterer</title>
<link rel="STYLESHEET" type="text/css" href="../main.css">
<!script type="text/javascript" language="JavaScript" src="check_pass.js"><!/script>
<script type="text/javascript" language="JavaScript" src="AutoSelect.js"></script>
<script language="javascript">
	// generate array for filling in select box
	var obj1 = new Array();	// fac
	var obj2 = new Array();	// dept
	var obj3 = new Array();	 // major
	<?		
		$res_Fac = mysql_query("select * from faculty order by fac_name");
		$res_Dept = mysql_query("select d.* from faculty f, department d  where f.fac_id = d.fac_id order by f.fac_name,d.dept_name");
		$res_Major = mysql_query("select f.fac_id,m.* from  faculty f,department d, major m  where f.fac_id = d.fac_id and m.dept_id = d.dept_id order by f.fac_name,d.dept_name,m.major_name");
		while($row=mysql_fetch_array($res_Fac))
		{
			echo("obj1[obj1.length]=new OBJ1st('".$row["fac_name"]."','".$row["fac_id"]."'); \n");
		}		
		while($row1=mysql_fetch_array($res_Dept))
		{
			echo("obj2[obj2.length]=new OBJ2nd('".$row1["fac_id"]."','".$row1["dept_name"]."','".$row1["dept_id"]."'); \n");
		}		
		while($row2=mysql_fetch_array($res_Major))
		{
			echo("obj3[obj3.length]=new OBJ3rd('".$row2["fac_id"]."','".$row2["dept_id"]."','".$row2["major_name"]."','".$row2["major_id"]."'); \n");
		}				
	?>
	
			function selectChange(control, controlToPopulate)
  {  
  	// Empty the second drop down box of any choices
  	for (var q=controlToPopulate.options.length;q>=0;q--) 
	{		
		controlToPopulate.options.remove(1);
	}
  	if (control.name == "fac") {
    // Empty the third drop down box of any choices
    for (var q=create_login.major.options.length;q>=0;q--) 		
		create_login.major.options.remove(1);
 	}
  }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>

<body bgcolor="#0a39c7" leftmargin="0" topmargin="0" text="#FFFF33">

<form action="teacher_create.php" method="post" name="create_login" onSubmit="return verify(this);">

  <table align="center" width="561">
    <tr>
      <td class="info" align="right" colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" align="right" bgcolor="#FFFFCC" class="info"><div align="center"><b>
	  <font color="#0033CC" size="1">��鹵͹��� 2 Ẻ�������͡��������´ (����Ѻ�Ҩ����)</font></b></div></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#FFCCFF">�ӹ�˹�� :</font></b></td>
      <td class="main"> <input name="title" type="text" size="8" maxlength="32">(���/�ҧ���/�.�./��./��.��. ���)</td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#FFCCFF">���� :</font></b></td>
      <td class="main"> <input name="firstname" type="text" maxlength="255">(��͡��������)</td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#FFCCFF">���ʡ�� :</font></b></td>
      <td class="main"> <input name="surname" type="text" maxlength="255">(��͡��������)</td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#FFCCFF">�����Ҩ���� :</font></b></td>
      <td class="main"><input type="text" name="ucode" maxlength="8" size="8"></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#FFCCFF">��� :</font></b></td>
      <td class="main">
	    <select name="fac" onclick="manage_2nd(document.forms('create_login').dept,
		document.forms('create_login').fac.value);"  onChange="selectChange(this, create_login.dept);">
          <option value="-1"> -------------------------------- ���͡��� --------------------------------------- </option>
		  <script language = "javascript">
				Add1stSelect(document.forms('create_login').fac);
		  </script>
        </select> 
    </td></tr>
    <tr> 
      <td class="info" align="right"><b><font color="#FFCCFF"> �Ҥ�Ԫ� :</font></b></td>
      <td class="main"><font color="#CCCC00"> 
		<select name="dept" onclick="manage_3rd(document.forms('create_login').major,
			document.forms('create_login').dept.value,
			document.forms('create_login').fac.value);" onChange="selectChange(this, create_login.major);">
          <option value="-1"> -------------------------------- ���͡�Ҥ�Ԫ� ----------------------------------- </option>
        </select>
	    </font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#FFCCFF">��ѡ�ٵ� :</font></b></td>
      <td class="main">
	  <select name="major">
          <option value="no"> ------------------------------- ���͡��ѡ�ٵ� ----------------------------------- </option>
        </select> </td>
<?			
		$res_Fac = mysql_query("select * from faculty order by id");
		$res_Dept = mysql_query("select d.* from faculty f, department d  where f.fac_id = d.fac_id order by f.fac_name,d.dept_name");
		$res_Major = mysql_query("select f.fac_id,m.* from  faculty f,department d, major m  where f.fac_id = d.fac_id and m.dept_id = d.dept_id order by f.fac_name,d.dept_name,m.major_name");
?>
    </tr>
    <tr> 
      <td><b><font color="#CCCC00"></font></b></td>
      <td class="info"><font color="#CCCC00"> �������!!����¹ mode ��þ����������<font color="#FF99FF">
	  <b>�ѧ��ɵ�����</b></font>��͹��͡㹪�ͧ E-Mail </font></td>
    </tr>	
    <tr> 
      <td class="info" align="right"><b><font color="#FFCCFF">Email :</font></b></td>
      <td class="main"><input type="text" name="login" maxlength="20" size="13">@ku.ac.th 
	  <font color="#CCCC00">( @ku.ac.th ���� @nontri.ku.ac.th ��� email ������ǡѹ)</font></td>
    </tr>
    <tr> 
      <td class="main" align="center" colspan=2> <b><font color="#FFCCFF"><input type="submit" name="subm" value="Submit"></font></b></td>
    </tr>
    <tr> 
      <td colspan=2 align="center" bgcolor="#FFFFCC" class="main"><font color="#FFFF00"><b>
	  <font size="1" color="#0033CC"><a href="create_login.php">��͹��Ѻ仢�鹵͹��� 1</a></font></b></font></td>
    </tr>
    <tr> 
      <td class="main" align="center" colspan=2>&nbsp;</td>
    </tr>
  </table>
  
	</form>
	
</body>
</html>

<?  
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
				
		/* 	$pos = strpos($mystring, "b");    // in versions older than 4.0b3: 
				if (!is_integer($pos)) {  ...not found...  }*/

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
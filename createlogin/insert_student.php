<?  require ("../include/global.php");

/*  $stu_major=mysql_query("SELECT * FROM major m, department d, faculty f WHERE f.fac_id=d.fac_id AND 
													m.dept_id=d.dept_id ORDER BY fac_name, dept_name, major_name");
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
{   */
?>

<html>
<head>
<title>Application form for Student</title>
<link rel="STYLESHEET" type="text/css" href="../main.css">
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
<body bgcolor="#0a39c7" leftmargin="0" topmargin="0" text="#FFFF00">

<form action="insert_student.php" method="post" name="create_login" onSubmit="return verify(this);">

  <table align="center" width="500">
    <tr> 
      <td class="info" align="right" colspan="2">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFCC"> 
      <td height="17" colspan="2" align="right" class="info"> <div align="center"></div></td>
    </tr>
    <tr> 
      <td width="82" align="right" class="info"><b><font color="#CCCC00">�ӹ�˹�� :</font></b></td>
      <td width="406" class="main"> <font color="#CCCC00"> 
        <input name="title" type="text" size="8" maxlength="32">
        (���/�ҧ���/�.�./��./���)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input name="firstname" type="text" maxlength="200">(��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���ʡ�� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input name="surname" type="text" maxlength="200">(��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">��� :</font></b></td>
	  
      <td class="main">
	<select name="fac" onclick="manage_2nd(document.forms('create_login').dept,
		document.forms('create_login').fac.value);" onChange="selectChange(this, create_login.dept);">
          <option value="-1"> -------------------------------- ���͡��� --------------------------------------- </option>
		  <script language = "javascript">
				Add1stSelect(document.forms('create_login').fac);
		  </script>
        </select> 
	</td>	
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00"> �Ҥ�Ԫ� :</font></b></td>
      <td class="main"><font color="#CCCC00"> 
		<select name="dept" onclick="manage_3rd(document.forms('create_login').major,
			document.forms('create_login').dept.value,
			document.forms('create_login').fac.value);" onChange="selectChange(this, create_login.major);">
          <option value="-1"> -------------------------------- ���͡�Ҥ�Ԫ� ----------------------------------- </option>
        </select>
	    </font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">��ѡ�ٵ� :</font></b></td>
      <td class="main"> 
	  <select name="major">
          <option value="no"> ------------------------------- ���͡��ѡ�ٵ� ----------------------------------- </option>
        </select> </td>
    </tr>
	<?			
		$res_Fac = mysql_query("select * from faculty order by id");
		$res_Dept = mysql_query("select d.* from faculty f, department d  where f.fac_id = d.fac_id order by f.fac_name,d.dept_name");
		$res_Major = mysql_query("select f.fac_id,m.* from  faculty f,department d, major m  where f.fac_id = d.fac_id and m.dept_id = d.dept_id order by f.fac_name,d.dept_name,m.major_name");
	?>
    <tr> 
      <td><b><font color="#CCCC00"></font></b></td>
      <td class="info"><font color="#CCCC00"> �������!!����¹ mode ��þ����������<font color="#FF99FF">
	  <b>�ѧ��ɵ�����</b></font>��͹��͡㹪�ͧ E-Mail </font></td>
    </tr>
    <tr> 
      <td class="info" align="right" height="2"><b><font color="#CCCC00">E-Mail :</font></b></td>
      <td class="main" height="2"> <font color="#CCCC00"><input type="text" name="login" maxlength="20" size="13"> 
			@ku.ac.th (@ku.ac.th ���� @nontri.ku.ac.th ��� email ������ǡѹ)</font></td>
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
				$passwd=trim($passwd);
				$email=trim($email);
				$firstname=trim($firstname);
				$surname=trim($surname);
				$title=trim($title);
				$dept=trim($dept);
				$fac=trim($fac);
				$major=trim($major);

				$email="$login$emailhost";
				mysql_query("INSERT INTO users (active,login,email,firstname,surname,category,title,temp, dept_id, fac_id, major_id) VALUES (1,'".$login."','".$email."','$firstname','$surname',3,'$title',5,'$dept', '$fac','$major');");
				$id=mysql_insert_id();
				print("<script language='javascript'> document.location = '../../index.html';</script>");
			}  


 /*}else{  //  login exists

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
                <div class="h3" align="center">�ѭ����ª��ͧ͢��ҹ  ������㹰ҹ����������</div>
                <p>
                <div class="main" align="center">�������ö���ҧ�ѭ����ª����������Ѻ��ҹ�� �ҡ�ջѭ������ǡѺ�ѭ����ª��ͧ͢��ҹ 
					<a href="http://course.eng.ku.ac.th/course/login/faq.php">���仴���������´</a>
				</div>
                </body>
                </html>
<?
        }else{ 
				   // no existing user with that login and password
                $passwd=password();
                $emailhost="@nontri.ku.ac.th";
                $email="$login$emailhost";
                mysql_query("INSERT INTO users (active,login,password,email,firstname,surname,dept,category,title)
											 VALUES (1,'".$login."','".$passwd."','".$email."','$firstname','$surname','$dept',3,'$title');");
                $id=mysql_insert_id();
                $mailbody = "Hi!\n\nUse these information:\nUser Name:".$login."\nPassword:".$passwd."\n\nWelcome to 
				Classroom Support at Faculty of Engineering , KU";
                if(mail($email,"Welcome to Classroom Support",$mailbody,"From:admin@$SERVER_NAME"))
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
                        <p><center><a href="https://webmail.ku.ac.th"><div class="main">��������<img src="../images/nontri_mail.jpg" border="0"></div></a></center>
                       <p>
                        <div class="main" align="center">  ������� loginname ��� password ���� ������ҹ�Ѻ�к� � ʹѺʹع������¹����͹��ҹ��纷�� website 
							<a href="http://course.eng.ku.ac.th">http://course.eng.ku.ac.th</a> ��ѹ��</div>
                        <p>
                        <hr width="50%">
                        <p>&nbsp;</p>
                        <div class="h3" align="center">OK, created new login.</div>
                        <p>
                        <div class="main" align="center">Please check  loginname and password  from your email ( 
							<font color="red"><? echo $login; ?>@nontri.ku.ac.th </font> )</div>
                        <p> <div class="h3" align="center">After you've got your loginname and password.  
								Please use that information at  website<a href="http://www.eng.ku.ac.th"> http://www.eng.ku.ac.th </a></div>
                        <p>
                                        </body>
                        </html>

<?                }else{          ?>

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
<?
                }
        }
} */
mysql_close();
?>
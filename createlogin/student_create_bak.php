<?  require ("../include/global.php");

$stu_major=mysql_query("SELECT * FROM major m, department d, faculty f WHERE f.fac_id=d.fac_id AND 
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
{
        ?>
<html>
<head>
<link rel="STYLESHEET" type="text/css" href="../main.css">
<!script type="text/javascript" language="JavaScript" src="check_pass.js"><!/script>
<script type="text/javascript" language="JavaScript" src="AutoSelect.js"></script>
<script language="javascript">
	// generate array for filling in select box
	var obj1 = new Array();
	var obj2 = new Array();
	var obj3 = new Array();
	<?			
		$res_Fac = mysql_query("select * from faculty order by fac_name");
		$res_Dept = mysql_query("select d.* from faculty f, department d  where f.fac_id = d.fac_id order by f.fac_name,d.dept_name");
		$res_Major = mysql_query("select f.fac_id,m.* from  faculty f,department d, major m  where f.fac_id = d.fac_id and m.dept_id = d.dept_id order by f.fac_name,d.dept_name,m.major_name");
	
		while($row=mysql_fetch_array($res_Fac))
		{
			echo("obj1[obj1.length]=new OBJ1st('".$row["fac_name"]."','".$row1["fac_id"]."'); \n");
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
</script>

<meta http-equiv="Content-Type" content="text/html; charset=windows-874"></head>

<body bgcolor="#0a39c7" leftmargin="0" topmargin="0" text="#FFFF00">

<form action="student_create.php" method="post" name="create_login" onSubmit="return verify(this);">

  <table align="center" width="488">
    <tr> 
      <td class="info" align="right" colspan="2">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFCC"> 
      <td class="info" align="right" colspan="2"> <div align="center">
	  <b><font size="1" color="#0033CC">��鹵͹��� 2 Ẻ�������͡��������´(����Ѻ���Ե)</font></b></div></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">�ӹ�˹�� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input type="text" name="title" size="8">
        (���/�ҧ���/�.�./��./���)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input type="text" name="firstname">(��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���ʡ�� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input type="text" name="surname">(��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">��� :</font></b></td>
	  
      <td class="main">
	<select name="fac">
          <option value="-1">--------- ���͡��� ---------------</option>
<!--          <option value="0">����ɵ� �Է��ࢵ�ҧࢹ</option>
          <option value="0">����ɵ� �Է��ࢵ��ᾧ�ʹ</option>
          <option value="0">��к����ø�áԨ</option>
          <option value="0">��л����</option>
          <option value="0">����������ʵ��</option>
          <option value="0">���ǹ��ʵ��</option>
          <option value="0">����Է����ʵ��</option>
          <option value="0">������ǡ�����ʵ��</option>
          <option value="0">�����Ż��ʵ������Է����ʵ��</option>
          <option value="0">����֡����ʵ��</option>
          <option value="0">������ɰ��ʵ��</option>	
          <option value="0">���ʶһѵ¡�����ʵ��</option>
          <option value="0">����ѧ����ʵ��</option>
          <option value="0">����ѵ�ᾷ���ʵ��</option>
          <option value="0">����ص�ˡ����ɵ�</option>
-->
        </select> 
	</td>
	
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00"> �Ҥ�Ԫ� :</font></b></td>
      <td class="main"><font color="#CCCC00"> 
  	 	   <!--<select name="dept" >
          <option value="no">-------���͡�Ҥ�Ԫ�---------</option>
          <option value="none">�ѧ����¡�Ҥ�Ԫ�</option>
          <option value="Aerospace">Aerospace</option>
          <option value="Agricultural">Agricultural</option>
          <option value="Architecture">Architecture</option>
          <option value="Chemical">Chemical</option>
          <option value="Civil ">Civil </option>
          <option value="Computer ">Computer </option>
          <option value="Electrical">Electrical</option>
          <option value="Environmental">Environmental</option>
          <option value="Food">Food</option>
          <option value="Industrail">Industrail</option>
          <option value="Irrigation">Irregation</option>
          <option value="Material">Material</option>
          <option value="Mechanical">Mechanical</option>
          <option value="Water resource">Water resource</option>
        </select>-->       
	  <select name="dept" onChange="DoSelect(0);">
		<? if($p_id==none || $p_id=="")
				{		$p_id = 0;						
		?>
          <option value="" selected> --------- ���͡�Ҥ�Ԫ� -------------   </option>
		  <?  } else { 	?>
	          <option value=""> ---------  ���͡�Ҥ�Ԫ� -------------  </option>
		  	<?             }	
				 $result=mysql_query("select * from project order by name desc");
				  while($row=mysql_fetch_array($result))
					{		
						echo("<option value=\"".$row["id"]."\"");
						if($row["id"] == $p_id) 
								echo " selected"; 
						echo(">&nbsp;&nbsp;".$row["name"]."</option>");
					}
			?>
        </select>

	    </font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">��ѡ�ٵ� :</font></b></td>
      <td class="main"> 
	  <select name="major">
          <option value="no">------------------------------- ���͡��ѡ�ٵ� -------------------------------- 
          </option>
          <option value="dcpe">���ǡ�����ʵ���ɮպѳ�Ե �Ң����ǡ�������������</option>
          <option value="mcpe">���ǡ�����ʵ����Һѳ�Ե �Ң����ǡ�������������(MCPE)</option>
          <option value="msit">�Է����ʵ����Һѳ�Ե �Ң�෤��������ʹ��(MSIT)</option>
          <option value="cpe">���ǡ�����ʵ��ѳ�Ե �Ң����ǡ�������������</option>
        </select> </td>
    </tr>
    <tr> 
      <td><b><font color="#CCCC00"></font></b></td>
      <td class="info"><font color="#CCCC00"> �������!!����¹ mode ��þ����������<font color="#FF99FF">
	  <b>�ѧ��ɵ�����</b></font>��͹��͡㹪�ͧ E-Mail </font></td>
    </tr>
    <tr> 
      <td class="info" align="right" height="2"><b><font color="#CCCC00">E-Mail 
        :</font></b></td>
      <td class="main" height="2"> <font color="#CCCC00"> 
        <input type="text" name="login" maxlength="8" size="8">
        @ku.ac.th (@ku.ac.th ���� @nontri.ku.ac.th ��� email ������ǡѹ)</font></td>
    </tr>
    <tr> 
      <td class="main" align="center" colspan=2> <input type="submit" name="subm" value="Submit"> 
      </td>
    </tr>
    <tr bgcolor="#FFFFCC"> 
      <td class="main" align="center" colspan=2><font color="#FFFF00"><b><font size="1" color="#0033CC">
	  <a href="create_login.php">��͹��Ѻ仢�鹵͹��� 1</a></font></b></font></td>
    </tr>
  </table>
                </form>
                </body>
                </html>
<?
}else{  //  login exists

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
<?
                }
        }
}
mysql_close();
?>
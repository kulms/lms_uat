<?
	    include("../include/global_login.php");
		include("./include/var.inc.php");
		// Teacher OR Admin
		echo $courses;
		echo    $person["category"] ;
		
  $person["category"]=3;
  
if($person["category"]==3){


?>
<html>
<head>
<title>e-Evaluation for M@xlearn / KU-LMS</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<meta name="Author" CONTENT="�ҧ��ǪԴ��� ��ó���(MissChitchanok Wannakul)">
<meta name="keywords" content="Evaluation for M@xlearn / KU-LMS[ Kasetsart University Learning Management System ]">
<meta name="description" content="Evaluation for M@xlearn / KU-LMS[ Kasetsart University Learning Management System ]
 ���к������Թ������¹����͹�͹�Ź�(��ҹ���͢��¤���������) ����Է������ɵ���ʵ�� �鹼�����¹���ٹ���ҧ ������¹����ö�֡����з��ǹ�����¹����µ��ͧ">
<link href="./include/main.css" rel="stylesheet" type="text/css">
<script language="Javascript" src="./js/mmopenwindow.js" type="text/javascript"></script>
</head>
<body>
<center>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="24" bgcolor="#004080" class="bwhite">&nbsp; �к������Թ����͹�ͧ�Ҩ�����¹��Ե ( Teaching 
      Evaluate System :TES )</td>
  </tr>
<form name="form1" method="post" action="">
  <tr> 
      <td height="24" bgcolor="#E9E9F3"><b><a href="./index.php">Home</a> 
	<!--   | <a onClick="MM_openBrWindow('./report/eval_report.htm','','scrollbars=yes,width=800,height=600, resizeable=yes, statusbar=yes')" style="cursor:hand">�����š�û����Թ��͹��ѧ</a></b>   -->
       | <a onClick="#" style="cursor:hand">�����š�û����Թ��͹��ѧ</a></b> 

	    </td>
  </tr>
</form>
</table>
<br>

<table background="images/left_bg.gif" width="90%" align="center">
  <tr><td>&nbsp; �����Թ����͹&nbsp; 
  <br>
  &nbsp; 
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 			<tr><td height="21" align="left" valign="top">����Ԫҷ��س�ѧ���������Թ</td>
 			</tr>
	   </table>
 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="<? echo $bottom.$top.$left.$right; ?>">
          <tr align="center"> 
            <td height="21" bgcolor="#DDDDEE" style="<? echo $right.$bottom; ?>">&nbsp;<b>�ӴѺ���</b>&nbsp;</td>
            <td bgcolor="#DDDDEE" style="<? echo $right.$bottom; ?>">&nbsp;<b>����Ԫ�</b>&nbsp;</td>
            <td bgcolor="#DDDDEE" style="<? echo $right.$bottom; ?>">&nbsp;<b>������Ẻ�����Թ</b>&nbsp;</td>
            <td bgcolor="#DDDDEE" style="<? echo $right.$bottom; ?>">&nbsp;<b>ʶҹС�û����Թ</b>&nbsp;</td>
			<td bgcolor="#DDDDEE" style="<? echo $bottom; ?>">&nbsp;</td>
          </tr>
        
          <tr align="center"> 
            <td height="21" bgcolor="<? echo $bgcolor; ?>" style="<? echo $right; ?>">&nbsp; &nbsp;</td>
            <td align="left" bgcolor="<? echo $bgcolor; ?>" style="<? echo $right; ?>">&nbsp;</td>
            <td bgcolor="<? echo $bgcolor; ?>" style="<? echo $right; ?>"> &nbsp;</td>
            <td bgcolor="<? echo $bgcolor; ?>" style="<? echo $right; ?>">&nbsp;</td>
			   <td bgcolor="<? echo $bgcolor; ?>"><!--<a onClick="MM_openBrWindow('./drop_course.php?courses=<? echo $row1["id"]; ?>&chc=<? echo $row1["chc"]; ?>','','scrollbars=yes,width=650,height=300, resizeable=yes, statusbar=yes')" style="cursor:hand">--><a href="drop_course.php<? echo "?courses=".$row1["id"]; ?>" target="_blank">�͹����Ԫ�</a></td>
          </tr>

        </table><br>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 			<tr><td height="21" align="left" valign="top">����Ԫҷ��س�����Թ����</td>
 			</tr>
	   </table>
 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="<? echo $bottom.$top.$left.$right; ?>">
          <tr align="center" bgcolor="#DDDDEE"> 
            <td height="21" style="<? echo $right.$bottom; ?>">&nbsp;<b>�ӴѺ���</b>&nbsp;</td>
            <td style="<? echo $right.$bottom; ?>">&nbsp;<b>����Ԫ�</b>&nbsp;</td>
            <td style="<? echo $right.$bottom; ?>">&nbsp;<b>������Ẻ�����Թ</b>&nbsp;</td>
            <td style="<? echo $bottom; ?>">&nbsp;<b>ʶҹС�û����Թ</b>&nbsp;</td>
          </tr>
		
          <tr align="center"> 
            <td height="21" style="<? echo $right; ?>" bgcolor="<? echo $bgcolor; ?>">&nbsp;&nbsp;</td>
            <td align="left" style="<? echo $right; ?>" bgcolor="<? echo $bgcolor; ?>">&nbsp; &nbsp; </td>
            <td style="<? echo $right; ?>" bgcolor="<? echo $bgcolor; ?>"> &nbsp; </td>		  
            <td bgcolor="<? echo $bgcolor; ?>">&nbsp;  </td>
          </tr>
</table>
</td>
  </tr>
</table>
<table background="images/left_bg.gif" width="90%" align="center">
  <tr><td>&nbsp; 

		 �Ż����Թ����͹<br>
		 &nbsp;
		 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="<? echo $top.$left.$right.$bottom; ?>">				
			<tr align="center" bgcolor="#DDDDEE" > 
						<td height="21" style="<? echo $right.$bottom; ?>"><b>�ӴѺ���</b></td>
						<td style="<? echo $right.$bottom; ?>"><b>����Ԫ�</b></td>
						<td style="<? echo $right.$bottom; ?>"><b>������Ẻ�����Թ</b></td>
						<td style="<? echo $bottom; ?>"><b>�š�û����Թ</b></td>
		   </tr>
          <tr align="center" <? echo $bgcolor; ?>> 
            <td height="21" valign="top" style="<? echo $right; ?>"><br>&nbsp; &nbsp;</td>
            <td align="left" valign="top" style="<? echo $right; ?>"><br>&nbsp;			  <br>
										  &nbsp; <br>&nbsp; [ <a href="trackstd.php?courses=<? echo $row2["id"]; ?>&qset=<?  echo $row2["qset"]; ?>">��Ǩ�ͺ��ª��ͼ�����ѧ���������Թ</a> ]<br>&nbsp; </td>
            <td valign="top" style="<? echo $right; ?>"><br>&nbsp;</td>
            <td align="left" valign="top"><br><br>
            &nbsp;</td>
          </tr>
        </table></td>
  </tr>
</table>
</center>
</body>
</html>
<? }?>

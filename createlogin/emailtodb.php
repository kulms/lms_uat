<?php
require("conn.php");
?>
<font face="MS Sans Serif" size="1">��� email ��ҧ���� text box �����к���Ҥ�鹴������� <br>��
ojini@ku.ac.th;su@ad.com  ��� ����ͧ�ѹ�������� text box<br> ���� �к� delimiter �� ; �� submit  ����ŧ�ҹ������
mysql �ѹ�� ( delimiter �� spacebar ����)</font><br>
<body bgcolor="#FFFFFF">
<table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><form name="form1" action="emailtodb.php" method="post" >
        <p align="center"> <font size="1" face="MS Sans Serif, Microsoft Sans Serif">
          <textarea name="emailtext" rows="10" cols="50"></textarea>
          </font></p>
        <p align="center"><font size="1" face="MS Sans Serif, Microsoft Sans Serif">delimiter
          <input type="text" name="delimiter" size="4" maxlength="1">
          </font></p>      <p align="center"> <font size="1" face="MS Sans Serif, Microsoft Sans Serif">
<input type="hidden" name="insert" value="insert">
          <input type="submit" name="submit" value="submit">
          <input type="reset" name="Submit2" value="Reset">
          </font></p>
</form></td>
  </tr>
</table>
<? if ($insert=="insert"){
//echo $emailtext;
$arr=split($delimiter,$emailtext);
while (list ($i) = each ($arr))
   {
echo $i.".".$arr[$i];
$arr[$i]=strtolower($arr[$i]);
echo " ---lowercase-->".$arr[$i];
$test=$arr[$i];
$check=mysql_query("SELECT email FROM email WHERE email like '$test';");
if(mysql_num_rows($check)!=0){echo "  --->Skipped ...Email Duplicate<br>";
$i++;
                            }
elseif (mysql_num_rows($check)==0 && $arr[$i] !=""){
mysql_query("INSERT INTO email (email) VALUES ('".$arr[$i]."');");
echo "   --->Inserted<font color=red>...Yes</font><br>";
$i++;
                 }else{echo " <font color=green>--->Spacebar....Skipped</font><br>"; $i++;}
    }

             }
?>
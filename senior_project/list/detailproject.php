<html>
<head>
<title>Project List</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
</head>

<body bgcolor="#99FFFF">
<font face="MS San Sarif">
<p>
  <center>
    <img src = ../pic/kaset_small.jpg>
    <img src = ../pic/search_detail.jpg>
    <img src = ../pic/kaset_small.jpg>
  </center>
</p>
<p>
  <center><img src = ../pic/newline.jpg></center>
</p>

<?
  require("../sql_password.php");
  $link = mysql_connect($server,$sql_username,$sql_password);
  $select = mysql_select_db("ieprojectdatabase",$link);
  $query = "select * from project where id=\"$project_id\" ";
  $result = mysql_query($query,$link);
  $row = mysql_fetch_row($result);
  print ("<center>");
  print ("<table  border=\"1\">");
  print
  ("
    <tr>
      <td>�����ç�ҹ</td>
      <td>$row[1]</td>
    </tr>
  ");
  $q_users_prj = "select useid from users_prj where prjid=\"$row[0]\" ";
  $r_users_prj = mysql_query($q_users_prj,$link);
  while ($row_users_prj = mysql_fetch_row($r_users_prj))
  {
    $q_users = "select * from users where id=\"$row_users_prj[0]\" and category=\"3\" ";
    $r_users = mysql_query($q_users,$link);
    $row_users=mysql_fetch_row($r_users);
    if ($row_users[6]=="")
       {$row_users[6]="&nbsp";}
    if ($row_users[0] != "")
    {
      print
      ("
        <tr>
          <td>���ʻ�Шӵ�ǹ��Ե</td>
          <td>$row_users[17]</td>
        </tr>
        <tr>
          <td>����-���ʡ�Ź��Ե</td>
          <td>$row_users[16]$row_users[4] $row_users[5]</td>
        </tr>
        <tr>
          <td>E-mail ���Ե�����ç�ҹ</td>
          <td>$row_users[6]</td>
        </tr>
      ");
    }
    $q_users = "select * from users where id=\"$row_users_prj[0]\" and category=\"2\" ";
    $r_users = mysql_query($q_users,$link);
    $row_users=mysql_fetch_row($r_users);
    if ($row_users[0] != "")
    {
      print
      ("
        <tr>
          <td>�Ҩ�������֡���ç�ҹ</td>
          <td><a href=search.php?adviser_id=$row_users[0]&list=adviser>$row_users[16]$row_users[4] $row_users[5]</a></td>
        </tr>
      ");
    }
  }
  $q_department = "select fullname from department where id=\"$row[10]\" ";
  $r_department = mysql_query($q_department,$link);
  $row_department = mysql_fetch_row($r_department);
  print
  ("
    <tr>
      <td>�Ҥ�Ԫ�</td>
      <td>$row_department[0]</td>
    </tr>
  ");
  print
  ("
    <tr>
      <td>�ա�÷����ç�ҹ</td>
      <td>$row[2]</td>
    </tr>
    <tr>
      <td>�Ҥ����֡��</td>
      <td>�͹$row[3]</td>
    </tr>
  ");
  $q_topic = "select * from topic where id=\"$row[7]\" ";
  $r_topic = mysql_query($q_topic,$link);
  $row_topic = mysql_fetch_row($r_topic);
  print
  ("
    <tr>
      <td>���Ӥѭ/Key word</td>
      <td><a href=search.php?topic_id=$row_topic[0]&list=topic>$row_topic[1]</a></td>
    </tr>
  ");
  $q_company = "select * from company where id=\"$row[9]\" ";
  $r_company = mysql_query($q_company,$link);
  $row_company = mysql_fetch_row($r_company);
  if ($row_company[0] == "")
  {  
    print 
    ("
      <tr>
        <td>����ѷ/�ç�ҹ�������Ǣ�ͧ</td>
        <td><a href=search.php?company_id=none&list=company>�ç�ҹ�����������Ǣ�ͧ�Ѻ����ѷ/˹��§ҹ</a></td>
      </tr>
    ");
  }
  else
  {
    print
    ("
      <tr>
        <td>����ѷ/�ç�ҹ�������Ǣ�ͧ</td>
        <td><a href=search.php?company_id=$row_company[0]&list=company>$row_company[1]</a></td>
      </tr>
    ");
  }
  $q_subject = "select * from subject where id=\"$row[8]\" ";
  $r_subject = mysql_query($q_subject,$link);
  $row_subject = mysql_fetch_row($r_subject);
  print
  ("
    <tr>
      <td>�Ԫҷ������Ǣ�ͧ�ҡ����ش</td>
      <td><a href=search.php?subject_id=$row_subject[0]&list=subject>$row_subject[1] $row_subject[2]</a></td>
    </tr>
  ");
  $q_subject2 = "select * from subject where id=\"$row[11]\" ";
  $r_subject2 = mysql_query($q_subject2,$link);
  $row_subject2 = mysql_fetch_row($r_subject2);
  if ($row_subject2[1]=="")
  {
    print
    ("
      <tr>
        <td>�Ԫҷ������Ǣ�ͧ��� �</td>
        <td>&nbsp</td>
      </tr>
    ");
  }
  else
  {
    print
    ("
      <tr>
        <td>�Ԫҷ������Ǣ�ͧ��� �</td>
        <td><a href=search.php?subject_id=$row_subject2[0]&list=subject>$row_subject2[1] $row_subject2[2]</a></td>
      </tr>
    ");
  }
  $q_subject3 = "select * from subject where id=\"$row[12]\" ";
  $r_subject3 = mysql_query($q_subject3,$link);
  $row_subject3 = mysql_fetch_row($r_subject3);
  if ($row_subject3[1]=="")
  {
    print
    ("
      <tr>
        <td>�Ԫҷ������Ǣ�ͧ��� �</td>
        <td>&nbsp</td>
      </tr>
    ");
  }
  else
  {
    print
    ("
      <tr>
        <td>�Ԫҷ������Ǣ�ͧ��� �</td>
        <td><a href=search.php?subject_id=$row_subject3[0]&list=subject>$row_subject3[1] $row_subject3[2]</a></td>
      </tr>
    ");
  }
  print
  ("
    <tr>
      <td>���Ѵ���</td>
      <td><a href = viewabstract.php?abstract=$row[5]>�ٺ��Ѵ���</a></td>
    </tr>
  ");
  print ("</center>");
  print ("</table>");
?>

</font>
<br>
<p>
  <center><img src = ../pic/line.jpg></center>
</p>

<font face="MS San Sarif" size = 2 color = orange>
  <center>
    <a href = list.html><b>���ҵ��</b></a>
  </center>
  <center>
    <a href = listproject.php>�����ç�ҹ</a>
    <a href = liststudent.php>���͹ѡ�֡��</a>
    <a href = listadviser.php>�����Ҩ����</a>
    <a href = listsubject.php>�����Ԫ�</a>
    <a href = listcompany.php>���ͺ���ѷ</a>
    <a href = listtopic.php>���Ӥѭ</a>
  </center>
</font>

</body>
</html>
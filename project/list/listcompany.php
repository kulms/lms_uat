<html>
<head>
<title>Company List</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
</head>

<body bgcolor="#99FFFF">
<font face="MS San Sarif" size = 3>
<p>
  <center>
    <img src = ../pic/kaset_small.jpg>
    <img src = ../pic/search_com.jpg>
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
  $query = "select * from company order by comname";
  $result = mysql_query($query,$link);
  print ("<center>");
  print 
  ("
    <table width=\"80%\" border=\"1\">
    <tr>
      <td><p align=center>�ӴѺ</p></td>
      <td><p align=center>���ͺ���ѷ</p></td>
      <td><p align=center>��������áԨ</p></td>
      <td><p align=center>ʶҹ�����</p></td>
      <td><p align=center>�������Ѿ��</p></td>
    </tr>
  ");
  $count=0;
  while ($row = mysql_fetch_row($result))
  {
    $count=$count+1;
    print 
    ("
      <tr>
        <td><p align=center>$count</p></td>
        <td><a href=search.php?company_id=$row[0]&list=company>$row[1]</a></td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td><p align=center>$row[4]</p></td> 
     </tr>
    ");
  }  
  print ("</table>");
  print ("</center>");
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
<html>
<head>
<title>Projectdata</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
</head>

<body bgcolor="#99FFFF">
<font face="MS San Sarif"> 
<p>
  <center>
    <img src = "pic/kaset_small.jpg">
    <img src = "pic/projectdata.jpg">
    <img src = "pic/kaset_small.jpg">
  </center>
</p>
<p>
  <center><img src = "pic/newline.jpg"></center>
</p>
<br>

<?
  require("sql_password.php");
  $link = mysql_connect($server,$sql_username,$sql_password);
  $select = mysql_select_db("ieprojectdatabase",$link);
?>

  <form ENCTYPE="multipart/form-data" action="companydata.php" method="post">
  <p>�����ç�ҹ 
    <input type="text" size ="32" name="p_name">
  </p>
  <p>�Ҥ�Ԫ�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
    <select name="p_department">
    <option value ="">���͡�Ҥ�Ԫ�</option>
    <?
      $query = "select * from department";
      $result = mysql_query($query,$link);     
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[2]</option>"); }
    ?>
    </select>
  </p>
  <p>�����ç�ҹ/����ѷ�������Ǣ�ͧ 
    <select name="p_company">
    <option value="">���͡����ѷ�������Ǣ�ͧ</option>
    <option value="none">�ç�ҹ�����������Ǣ�ͧ�Ѻ����ѷ/˹��§ҹ</option>
    <?
      $query = "select * from company order by comname desc";
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[1]</option>"); }
    ?>
    </select>
    <a href="add/addcompany.php">���������ç�ҹ<a>
  </p>
  <p>���Ӥѭ/Key word)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
    <select name="p_topic">
    <option value ="">���͡���Ӥѭ</option>
    <?
      $query = "select * from topic order by topname desc";
      $result = mysql_query($query,$link);     
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[1]</option>"); }
    ?>
    </select>
    <a href="add/addtopic.php">�������Ӥѭ</a>
  </p>
  <p>�ա���֡�� 
    <select name="p_year">
    <?
      $year=2531;
      for ($year=2531;$year<2600;$year++)
      { print ("<option value=$year>$year</option>"); }
    ?>
    </select>
    �Ҥ����֡�� 
    <input type="radio" name="p_term" value="��">
    �� 
    <input type="radio" name="p_term" value="����">
    ����
  </p>
  <p>�Ԫҷ������Ǣ�ͧ(�ҡ����ش)
    <select name="p_subject">
    <option value ="">���͡�Ԫҷ������Ǣ�ͧ</option>
    <?
      $query = "select * from subject order by subcode";
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[1]&nbsp;&nbsp;$row[2]</option>"); }
    ?>
    </select>
<!--    <a href="/add/addsubject.php">���������Ԫ�<a>-->
  </p>
  <p>�Ԫҷ������Ǣ�ͧ(��� �)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
    <select name="p_subject2">
    <option value ="">���͡�Ԫҷ������Ǣ�ͧ</option>
    <?
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[1]&nbsp;&nbsp;$row[2]</option>"); }
    ?>
    </select>
  </p>
  <p>�Ԫҷ������Ǣ�ͧ(��� �)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
    <select name="p_subject3">
    <option value ="">���͡�Ԫҷ������Ǣ�ͧ</option>
    <?
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[1]&nbsp;&nbsp;$row[2]</option>"); }
    ?>
    </select>
  </p>
  <p>�Ҩ�������֡���ç�ҹ
    <select name="p_adviser">
    <option value ="">���͡�Ҩ�������֡���ç�ҹ</option>
    <?
      $query = "select * from users where category=\"2\"  order by ucode";
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[17]&nbsp;&nbsp;$row[16]$row[4]&nbsp;&nbsp;$row[5]</option>"); }
    ?>
    </select>
<!--    <a href="addadviser.php">���������Ҩ����<a>-->
  </p>
  <p>���͡��캷�Ѵ���(.txt)&nbsp;&nbsp
    <!--<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="1024000">-->
    <INPUT NAME="UploadedFile" TYPE="file">
  </p>
  <p>�����˵�
    <input type="text" name="p_note">
  </p>
  <p align="right">
    <input type="submit" name="Submit" value="Next">
  </p>
</form> 
</font>
</body>
</html>
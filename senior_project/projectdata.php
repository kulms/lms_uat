<html>
<head>
<title>Projectdata</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
</head>

<body bgcolor="#99FFFF">
<font face="MS San Sarif"> 

<?

  require("sql_password.php");
  $link = mysql_connect($server,$sql_username,$sql_password);
  $select = mysql_select_db("ieprojectdatabase",$link);

  if ($add=="")
  {
    if ($u_dept=="")
    {
      print ("<div align=center><b>������Ѻ������\"�Ҥ�Ԫ�\"  ��سҵ�Ǩ�ͺ�ա����</b></div>");
      print ("<form><div align=right><input type=button value=Back onclick='history.back() ; '></div></form>");
      exit();
    }
    elseif ($u_category=="")
    {
      print ("<div align=center><b>������Ѻ������\"�����������\"  ��سҵ�Ǩ�ͺ�ա����</b></div>");
      print ("<form><div align=right><input type=button value=Back onclick='history.back() ; '></div></form>");
      exit();
    }
    elseif ($u_title=="")
    {
      print ("<div align=center><b>������Ѻ������\"�ӹ�˹��\"  ��سҵ�Ǩ�ͺ�ա����</b></div>");
      print ("<form><div align=right><input type=button value=Back onclick='history.back() ; '></div></form>");
      exit();
    }
    elseif ($u_firstname=="")
    {
      print ("<div align=center><b>������Ѻ������\"���ͼ����\"  ��سҵ�Ǩ�ͺ�ա����</b></div>");
      print ("<form><div align=right><input type=button value=Back onclick='history.back() ; '></div></form>");
      exit();
    }
    elseif ($u_surname=="")
    {
      print ("<div align=center><b>������Ѻ������\"���ʡ�ż����\"  ��سҵ�Ǩ�ͺ�ա����</b></div>");
      print ("<form><div align=right><input type=button value=Back onclick='history.back() ; '></div></form>");
      exit();
    }
    elseif ($u_ucode=="")
    {
      print ("<div align=center><b>������Ѻ������\"���ʻ�Шӵ��\"  ��سҵ�Ǩ�ͺ�ա����</b></div>");
      print ("<form><div align=right><input type=button value=Back onclick='history.back() ; '></div></form>");
      exit();
    }
    elseif ($u_address=="")
    {
      print ("<div align=center><b>������Ѻ������\"�����������\"  ��سҵ�Ǩ�ͺ�ա����</b></div>");
      print ("<form><div align=right><input type=button value=Back onclick='history.back() ; '></div></form>");
      exit();
    }
    else
    {
      $query = "insert into users (dept,category,title,firstname,surname,ucode,telephone,address,email,homepage) values (\"$u_dept\",\"$u_category\",\"$u_title\",\"$u_firstname\",\"$u_surname\",\"$u_ucode\",\"$u_telephone\",\"$u_address\",\"$u_email\",\"$u_homepage\" )";
      mysql_query($query,$link);
    }
  }


?>

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

  <form ENCTYPE="multipart/form-data" action="companydata.php" method="post">
  <table width="100%" border="1" height="374">
    <tr> 
      <td width="30%"><font face="MS San Sarif">�����ç�ҹ</font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <input type="text" size ="58" name="p_name">
        </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">�Ҥ�Ԫ�</font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <select name="p_department">
          <option value ="">���͡�Ҥ�Ԫ�</option>
          <?
            $query = "select * from department";
            $result = mysql_query($query,$link);     
            while ($row = mysql_fetch_row($result))
              { print ("<option value=\"$row[0]\">$row[2]</option>"); }
          ?>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">�����ç�ҹ/����ѷ�������Ǣ�ͧ 
        </font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <select name="p_company">
          <option value="">���͡����ѷ�������Ǣ�ͧ</option>
          <option value="none">�ç�ҹ�����������Ǣ�ͧ�Ѻ����ѷ/˹��§ҹ</option>
          <?
      $query = "select * from company order by comname";
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[1]</option>"); }
    ?>
        </select>
        <a href="add/addcompany.php"><font face="MS San Sarif">���������ç�ҹ</font><a><font face="MS San Sarif"></font></a></a> 
        </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">���Ӥѭ/Key word</font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <select name="p_topic">
          <option value ="">���͡���Ӥѭ</option>
          <?
      $query = "select * from topic order by topname";
      $result = mysql_query($query,$link);     
      while ($row = mysql_fetch_row($result))
        { print ("<option value=\"$row[0]\">$row[1]</option>"); }
    ?>
        </select>
        <a href="add/addtopic.php">�������Ӥѭ</a> </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">�շ��ŧ����¹�Ԫ��ç�ҹ(�.�.)</font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <select name="p_year">
          <?
      $year=2531;
      for ($year=2531;$year<2600;$year++)
      { print ("<option value=$year>$year</option>"); }
    ?>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">�Ҥ����֡�� </font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <input type="radio" name="p_term" value="��">
        �� 
        <input type="radio" name="p_term" value="����">
        ���� </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">�Ԫҷ������Ǣ�ͧ(�ҡ����ش)</font></td>
      <td width="70%"><font face="MS San Sarif"> 
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
        </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">�Ԫҷ������Ǣ�ͧ(��� �)</font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <select name="p_subject2">
          <option value ="">���͡�Ԫҷ������Ǣ�ͧ</option>
          <?
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[1]&nbsp;&nbsp;$row[2]</option>"); }
    ?>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">�Ԫҷ������Ǣ�ͧ(��� �)</font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <select name="p_subject3">
          <option value ="">���͡�Ԫҷ������Ǣ�ͧ</option>
          <?
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[1]&nbsp;&nbsp;$row[2]</option>"); }
    ?>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td width="30%"><font face="MS San Sarif">�Ҩ�������֡���ç�ҹ</font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <select name="p_adviser">
          <option value ="">���͡�Ҩ�������֡���ç�ҹ</option>
          <?
      $query = "select * from users where category=\"2\"  order by ucode";
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      { print ("<option value=\"$row[0]\">$row[17]&nbsp;&nbsp;$row[16]$row[4]&nbsp;&nbsp;$row[5]</option>"); }
    ?>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td width="30%"> 
        <p><font face="MS San Sarif">���͡��캷�Ѵ���(.txt)</font></p>
      </td>
      <td width="70%"><font face="MS San Sarif"> 
        <!--<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="1024000">-->
        <input name="UploadedFile" type="file" size="25">
        </font></td>
    </tr>
    <tr>
      <td width="30%"><font face="MS San Sarif">�����˵�</font></td>
      <td width="70%"><font face="MS San Sarif"> 
        <input type="text" size=58 name="p_note">
        </font></td>
    </tr>
  </table>
  <p align="center"><img src="pic/newline.jpg" width="690" height="18"></p>
  <?
    $userID = mysql_insert_id();
    print ("<p><input type=\"hidden\" name=\"p_student\" value=\"$userID\"</p>");
  ?>
  <p align="right">
    <input type="submit" name="Submit" value="Next">
  </p>
</form> 
</font>
</body>
</html>
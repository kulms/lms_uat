<html>
<head>
<title>Companydata</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
</head>

<body bgcolor="#99FFFF">
<font face="MS San Sarif">

<?
  if ( ($p_name=="") || ($p_topic=="") || ($p_company=="") || ($p_year=="") || ($p_term=="") || ($p_subject=="") || ($p_subject2=="") || ($p_subject3=="") || ($p_adviser=="") || ($UploadedFile_name=="") )
  {
    print ("<div align=center><b>��سҡ�͡���������ú(¡��鹪�ͧ�����˵ب�����������������)</b></div>");
#    print ("<a href = \"../projectdata.php\"><img src = ../pic/back-s.gif border = 0 align = right></a> ");
    print ("<form>");
    print ("<div align=right><input type=button value=Back onclick='history.back() ; '></div>" );
    print ("</form>");
    exit();
  }
  else
  {
    require("sql_password.php");
    $link = mysql_connect($server,$sql_username,$sql_password);
    if ($link)
    {
      $select = mysql_select_db("ieprojectdatabase",$link);
      $query = "select * from project";
      $result = mysql_query($query,$link);
      while ($row = mysql_fetch_row($result))
      {
        if ( ($row[1]==$p_name) || ($row[5]==$UploadedFile_name) )
        {
          print ("<p>�������ö�ѹ�֡������ŧ㹰ҹ������ŧ��  ���˵��Ҩ�Դ�ҡ</p>");
          print ("<p>1. ������Ǣ���ç�ҹ���</p>");
          print ("<p>2. ������캷�Ѵ��ͫ��</p>");
          exit();
        }
      }
      $query = "insert into project (prjname,prjyear,prjterm,prjnote,prjabstract,topID,subID,subID2,subID3,comID,depID) values (\"$p_name\",\"$p_year\",\"$p_term\",\"$p_note\",\"$UploadedFile_name\",\"$p_topic\",\"$p_subject\",\"$p_subject2\",\"$p_subject3\",\"$p_company\",\"$p_department\")";
      mysql_query($query,$link);
      $prjID = mysql_insert_id();
      $query = "insert into users_prj (prjID) values (\"$prjID\")";
      mysql_query($query,$link);
    }
    else { print ("�������ö�Դ��͡Ѻ�ҹ��������"); }
  }
  $path="../files/stdproject";
  if( $UploadedFile != none )
  {
    print ("Local File: $UploadedFile <BR>\n");
    print ("Name: $UploadedFile_name <BR>\n");
    print ("Size: $UploadedFile_size <BR>\n");
    print ("Type: $UploadedFile_type <BR>\n");
    print ("<HR>");
    if (copy( $UploadedFile , "$path/$UploadedFile_name" ))
    { print "$UploadedFile has been copy to $path/$UploadFile_name<br>"; }
    else { print "Error.. can't upload<br>"; }
    # unlink($UploadedFile);
  }
  else { print "Error.. no file.<br>"; }





  if ($p_company==1)
  {
    print ("<p><center><h3><b>������鹡�á�͡�������ç�ҹ</b></h3></center></p>");
    print ("<br>");
    print ("<p><center><a href=\"http://www.ku.ac.th\">Go to KU Homepage</a></center></p>");
  }
  else
  {
    print ("<p><center><img src = /pic/kaset_small.jpg><img src = /pic/><img src = /pic/kaset_small.jpg></center></p>");
    print ("<p><center><img src = /pic/newline.jpg></center></p>");
    print ("<br>");
    $query = "select * from company";
    $result = mysql_query($query,$link);
    while ($row = mysql_fetch_row($result))
    {
      if ( ($row[0]==$p_company) && ($row[2]!="") )
      {
        print ("<div align=\"center\"><p>�������ç�ҹ</p></div>");
        print ("<form method=\"post\" action=\"finish.php\">");
        print ("<p>�����ç�ҹ/����ѷ : $row[1] </p>");
        print ("<p>��������áԨ(�������Ǣ�ͧ�Ѻ�ç�ҹ�ҡ����ش) : $row[2] </p>");
        print ("<p>������ç�ҹ/����ѷ : $row[3] </p>");
        print ("<p>�������Ѿ�� : $row[4] </p>");
        print ("<p>Fax : $row[5] </p>");
        print ("<p>E-Mail : $row[6] </p>");
        print ("<p>Homepage : $row[7] </p>");
        print ("<p>�����˵�<input type=\"text\" name=\"c_note\" value=$row[8]></p>");
        print ("<p>*** ����բ���������١��ͧ��س�����������㹪�ͧ�����˵� ***</p>");
        print ("<p><input type=\"hidden\" name=\"c_id\" value=\"$p_company\"</p> ");
        print ("<p><input type=\"hidden\" name=\"c_add\" value=\"old\"</p> ");
        print ("<p align=\"right\"><input type=\"submit\" name=\"Submit\" value=\"Finish\"></p>");
        print ("</form>");
        mysql_close($link);
        exit();
      }
      elseif ($row[0]==$p_company)
      {
        print ("<div align=\"center\"><p>�������ç�ҹ</p></div>");
        print ("<form method=\"post\" action=\"finish.php\">");
        print ("<p>�����ç�ҹ/����ѷ : $row[1] </p>");
        print ("<p>��������áԨ(�������Ǣ�ͧ�Ѻ�ç�ҹ�ҡ����ش) : <input type=\"text\" name=\"c_kind\"></p>");
        print ("<p>������ç�ҹ/����ѷ : <input type=\"text\" name=\"c_address\"></p>");
        print ("<p>�������Ѿ�� : <input type=\"text\" name=\"c_phone\"></p>");
        print ("<p>Fax : <input type=\"text\" name=\"c_fax\"></p>");
        print ("<p>E-Mail : <input type=\"text\" name=\"c_email\"></p>");
        print ("<p>Homepage : <input type=\"text\" name=\"c_homepage\"></p>");
        print ("<p>�����˵� <input type=\"text\" name=\"c_note\"></p>");
        print ("<p><input type=\"hidden\" name=\"c_id\" value=\"$p_company\"</p> ");
        print ("<p><input type=\"hidden\" name=\"c_add\" value=\"new\"</p> ");
        print ("<p align=\"right\"><input type=\"submit\" name=\"Submit\" value=\"Finish\"></p>");
        print ("</form>");
        mysql_close($link);
        exit();
      }
    }
  }
?>

</font>
</body>
</html>
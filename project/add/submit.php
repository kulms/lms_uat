<html>
<head>
<title>Projectdata</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
</head>

<body bgcolor="#99FFFF">
<font face="MS San Sarif"> 

<?
  require("../sql_password.php");
  $link = mysql_connect($server,$sql_username,$sql_password);
  $select = mysql_select_db("ieprojectdatabase",$link);
  if ($name="$addtopic")
  {
    $query = "select topname from topic";
    $result = mysql_query($query,$link);
    while ($row = mysql_fetch_row($result))
    {
      if ($row[0]==$addtopic)
      {
        print ("<p align=center><b>�����ŷ���͡������㹰ҹ����������  ��سҵ�Ǩ�ͺ�����ŷ���͡�ա����</b></p>");
        print ("<form>");
        print ("<p align=right><input type=button value=Back onclick='history.back() ; '></p>" );
        print ("</form>");
        exit();
      }
    }
    $query = "insert into topic (topname) values (\"$addtopic\")";
    mysql_query($query,$link);
    print ("<p align=center><b>�����ŷ���͡��ѹ�֡ŧ㹰ҹ���������º��������</b></p>");
    print ("<a href = \"../projectdata.php\"><img src = ../pic/back-s.gif border = 0 align = right></a>");
  }
  elseif ($name="$addcompany")
  {
    $query = "select comname from company";
    $result = mysql_query($query,$link);
    while ($row = mysql_fetch_row($result))
    {
      if ($row[0]==$addcompany)
      {
        print ("<p align=center><b>�����ŷ���͡������㹰ҹ����������  ��سҵ�Ǩ�ͺ�����ŷ���͡�ա����</b></p>");
        print ("<form>");
        print ("<p align=right><input type=button value=Back onclick='history.back() ; '></p>" );
        print ("</form>");
        exit();
      }
    }
    $query = "insert into company (comname) values (\"$addcompany\")";
    mysql_query($query,$link);
    print ("<p align=center><b>�����ŷ���͡��ѹ�֡ŧ㹰ҹ���������º��������</b></p>");
    print ("<a href = \"../projectdata.php\"><img src = ../pic/back-s.gif border = 0 align = right></a>");
  }

  elseif ($addtopic=="" || $addcompany=="")
  {
    print ("<p align=center><b>������Ѻ�����ŷ���͡</b></p>");
    print ("<form>");
    print ("<p align=right><input type=button value=Back onclick='history.back() ; '></p>" );
    print ("</form>");
    exit();
  }

?>

</font>
</body>
</html>

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
        print ("<p align=center>�����ŷ���͡������㹰ҹ����������  ��سҵ�Ǩ�ͺ�����ŷ���͡�ա����</p>");
        print ("<form>");
        print ("<p align=right><input type=button value=Back onclick='history.back() ; '></p>" );
        print ("</form>");
        exit();
      }
    }
    $query = "insert into topic (topname) values (\"$addtopic\")";
    mysql_query($query,$link);
    print ("<p>�����ŷ���͡�١�ѹ�֡ŧ㹰ҹ���������º��������</p>");
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
        print ("�����ŷ���͡��ѹ�֡����㹰ҹ����������");
        print ("<form>");
        print ("<p align=right><input type=button value=Back onclick='history.back() ; '></p>" );
        print ("</form>");
        exit();
      }
    }
    $query = "insert into company (comname) values (\"$addcompany\")";
    mysql_query($query,$link);
    print ("<p>�����ŷ���͡��ѹ�֡ŧ㹰ҹ���������º��������</p>");
    print ("<a href = \"../projectdata.php\"><img src = ../pic/back-s.gif border = 0 align = right></a>");
  }

  elseif ($addtopic=="" || $addcompany=="")
  {
    print ("������Ѻ�����ŷ���͡");
    print ("<form>");
    print ("<input type=button value=Back onclick='history.back() ; '>" );
    print ("</form>");
    exit();
  }

?>
<html>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=../projectdata.php">
</html>
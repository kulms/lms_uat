<html>
<head>
<title>Project List</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
</head>

<body bgcolor="#99FFFF">
<font face="MS San Sarif">

<?
  require("../sql_password.php");
  $Temp=" '%".$searchtext."%' ";

  if ($searchtopic=="none")
  {
    print ("<p align=center>��س����͡<b>\"��Ǣ�ͷ���ͧ��ä���\"</b></p>");
    print ("<form>");
    print ("<p align=right><input type=button value=Back onclick='history.back() ; '></p>" );
    print ("</form>");
    exit();
  }
  elseif ($searchtext=="")
  {
    print ("<p align=center><b>������Ѻ�����ŷ���ͧ��ä���  ��سҵ�Ǩ�ͺ�ա����</b></p>");
    print ("<form>");
    print ("<p align=right><input type=button value=Back onclick='history.back() ; '></p>" );
    print ("</form>");
    exit();
  }
  elseif  ($searchtopic=="s_project")
  {
    print
    ("
      <table width=\"75%\" border=\"1\" align=center>
      <tr>
        <td><p align=center><b>�ӴѺ</b></p></td>
        <td><p align=center><b>�����ç�ҹ</b></p></td>
        <td><p align=center><b>�շ���</b></p></td>
      </tr>
    ");
    $query = "select * from project where prjname Like $Temp order by prjname";
    $result = mysql_query($query,$link);
    $count=0;
    while ($row = mysql_fetch_row($result))
    {
      $count=$count+1;
      print
      ("
        <tr>
          <td><p align=center>$count</p></td>
          <td><a href=detailproject.php?project_id=$row[0]>$row[1]</a></td>
          <td><p align=center>$row[2]</p></td>
        </tr>
      ");
    }
  }
  elseif  ($searchtopic=="s_subject")
  {
    print
    ("
      <table width=\"75%\" border=\"1\" align=center>
      <tr>
        <td><p align=center><b>�ӴѺ</b></p></td>
        <td><p align=center><b>�����Ԫ�</b></p></td>
        <td><p align=center><b>�����Ԫ�</b></p></td>
      </tr>
    ");
    $query = "select * from subject where subname Like $Temp order by subcode ";
    $result = mysql_query($query,$link);
    $count=0;
    while ($row = mysql_fetch_row($result))
    {
      $count=$count+1;
      print
      ("
        <tr>
          <td><p align=center>$count</p></td>
          <td><a href=search.php?subject_id=$row[0]&list=subject>$row[1]</a></td>
          <td><p align=center>$row[2]</p></td>
        </tr>
      ");
    }
  }
  elseif  ($searchtopic=="s_keyword")
  {
    print
    ("
      <table width=\"75%\" border=\"1\" align=center>
      <tr>
        <td><p align=center><b>�ӴѺ</b></p></td>
        <td><p align=center><b>���Ӥѭ</b></p></td>
      </tr>
    ");
    $query = "select * from topic where topname Like $Temp order by topname";
    $result = mysql_query($query,$link);
    $count=0;
    while ($row = mysql_fetch_row($result))
    {
      $count=$count+1;
      print
      ("
        <tr>
          <td><p align=center>$count</p></td>
          <td><a href=search.php?topic_id=$row[0]&list=topic>$row[1]</a></td>
         </tr>
      ");
    }
  }
  elseif  ($searchtopic=="s_company")
  {
    print
    ("
      <table width=\"75%\" border=\"1\" align=center>
      <tr>
        <td><p align=center><b>�ӴѺ</b></p></td>
        <td><p align=center><b>���ͺ���ѷ</b></p></td>
        <td><p align=center><b>��������áԨ</b></p></td>
        <td><p align=center><b>ʶҹ�����</b></p></td>
        <td><p align=center><b>�������Ѿ��</b></p></td>      </tr>
    ");
    $query = "select * from company where comname Like $Temp order by comname";
    $result = mysql_query($query,$link);
    $count=0;
    while ($row = mysql_fetch_row($result))
    {
      $count=$count+1;
      if ($row[2]=="")
        { $row[2]="&nbsp"; }
      if ($row[3]=="")
        { $row[3]="&nbsp"; }
      if ($row[4]=="")
        { $row[4]="&nbsp"; }
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
  }

  elseif  ($searchtopic=="s_comkind")
  {
    print
    ("
      <table width=\"75%\" border=\"1\" align=center>
      <tr>
        <td><p align=center><b>�ӴѺ</b></p></td>
        <td><p align=center><b>���ͺ���ѷ</b></p></td>
        <td><p align=center><b>��������áԨ</b></p></td>
        <td><p align=center><b>ʶҹ�����</b></p></td>
        <td><p align=center><b>�������Ѿ��</b></p></td>      </tr>
    ");
    $query = "select * from company where comkind Like $Temp order by comname";
    $result = mysql_query($query,$link);
    $count=0;
    while ($row = mysql_fetch_row($result))
    {
      $count=$count+1;
      if ($row[2]=="")
        { $row[2]="&nbsp"; }
      if ($row[3]=="")
        { $row[3]="&nbsp"; }
      if ($row[4]=="")
        { $row[4]="&nbsp"; }
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
  }

  elseif  ($searchtopic=="s_comaddress")
  {
    print
    ("
      <table width=\"75%\" border=\"1\" align=center>
      <tr>
        <td><p align=center><b>�ӴѺ</b></p></td>
        <td><p align=center><b>���ͺ���ѷ</b></p></td>
        <td><p align=center><b>��������áԨ</b></p></td>
        <td><p align=center><b>ʶҹ�����</b></p></td>
        <td><p align=center><b>�������Ѿ��</b></p></td>      </tr>
    ");
    $query = "select * from company where comaddress Like $Temp order by comname";
    $result = mysql_query($query,$link);
    $count=0;
    while ($row = mysql_fetch_row($result))
    {
      $count=$count+1;
      if ($row[2]=="")
        { $row[2]="&nbsp"; }
      if ($row[3]=="")
        { $row[3]="&nbsp"; }
      if ($row[4]=="")
        { $row[4]="&nbsp"; }
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
  }

  elseif  ($searchtopic=="s_name")
  {
    print
    ("
      <table width=\"75%\" border=\"1\" align=center>
      <tr>
        <td><p align=center><b>�ӴѺ</b></p></td>
        <td><p align=center><b>���ʻ�Шӵ�ǹ��Ե</b></p></td>
        <td><p align=center><b>����-���ʡ��</b></p></td>
      </tr>
    ");
    $query = "select * from users where category=\"3\" and firstname Like $Temp order by ucode";
    $result = mysql_query($query,$link);
    $count=0;
    while ($row = mysql_fetch_row($result))
    {
      $count=$count+1;
      print
      ("
        <tr>
          <td><p align=center>$count</p></td>
          <td><p align=center><a href=search.php?student_id=$row[0]&list=student>$row[17]</a></center></td>
          <td>$row[16] $row[4] $row[5]</td>
        </tr>
      ");
    }
  }
  elseif  ($searchtopic=="s_adviser")
  {
    print
    ("
      <table width=\"75%\" border=\"1\" align=center>
      <tr>
        <td><p align=center><b>�ӴѺ</b></p></td>
        <td><p align=center><b>���ʻ�Шӵ��</b></p></td>
        <td><p align=center><b>����-���ʡ��</b></p></td>
      </tr>
    ");
    $query = "select * from users where category=\"2\" and firstname Like $Temp order by ucode";
    $result = mysql_query($query,$link);
    $count=0;
    while ($row = mysql_fetch_row($result))
    {
      $count=$count+1;
      print
      ("
        <tr>
          <td><p align=center>$count</p></td>
          <td><p align=center><a href=search.php?adviser_id=$row[0]&list=adviser>$row[17]</a></p></td>
          <td>$row[16] $row[4] $row[5]</td>
        </tr>
      ");
    }
  }
  print ("</table>");
?>
</font>
</body>
</html>
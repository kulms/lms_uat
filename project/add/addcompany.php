<html>
<head>
<title>Add Topic</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
</head>

<body bgcolor="#99FFFF">
<font face="MS San Sarif"> 
<p>
  <center>
    <img src = ../pic/kaset_small.jpg>
    <img src = ../pic/addcompany.jpg>
    <img src = ../pic/kaset_small.jpg>
  </center>
</p>
<p>
  <center><img src = ../pic/newline.jpg></center>
</p>
<br>

<?
  require("../sql_password.php");
  $link = mysql_connect($server,$sql_username,$sql_password);
  $select = mysql_select_db("ieprojectdatabase",$link);
  $query = "select comname from company";
  $result = mysql_query($query,$link);     
?>

<form action="submit.php">
  <p><center><h3><b>�����ç�ҹ/����ѷ�������������</b></h3></center></p>
  <p>
    <center>
      <select name="companylist" size="10">
      <?
        while ($row = mysql_fetch_row($result))
        { print ("<option value=\"$row[0]\">$row[0]</option>"); }
      ?>
      </select>
    </center>
  </p>
  <p>
    <center>
      �����ç�ҹ����ͧ���������� : 
      <input type="text" name="addcompany">
      <input type="submit" name="Submit" value="Submit">
    </center>
  </p>
  <div align=right><input type=button value=Back onclick='history.back() ; '></div>
</form> 
<!--<a href = "../projectdata.php"><img src = ../pic/back-s.gif border = 0 align = right></a>-->
</body>
</font>
</html>
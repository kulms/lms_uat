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
    <img src = "pic/userdata.jpg">
    <img src = "pic/kaset_small.jpg">
  </center>
</p>
<p>
  <center><img src = "pic/newline.jpg"></center>
</p>


<?
  require("sql_password.php");
?>
</font></p>
<form  method="post" action="projectdata.php">
  <table width="75%" border="1" align="center">
    <tr>
      <td width="30%">�Ҥ�Ԫ�</td>
      <td width="70%">
        <select name="u_dept">
          <option value ="">���͡�Ҥ�Ԫ�</option>
          <?
            $query = "select * from department";
            $result = mysql_query($query,$link);
            while ($row = mysql_fetch_row($result))
              { print ("<option value=\"$row[0]\">$row[2]</option>"); }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td width="30%">�����������</td>
      <td width="70%">
        <select name="u_category">
          <option value ="">���͡�����������</option>
          <?
            $query = "select * from users_type where id !=0 ";
            $result = mysql_query($query,$link);
            while ($row = mysql_fetch_row($result))
              { print ("<option value=\"$row[0]\">$row[1]</option>"); }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td width="30%">�ӹ�˹��</td>
      <td width="70%">
        <select name="u_title">
          <option value ="">���͡�ӹ�˹��</option>
          <option value ="���">���</option>
          <option value ="�.�.">�.�.</option>
          <option value ="�.">�Ҩ����</option>
          <option value ="��.">��.</option>
          <option value ="��.">��.</option>
          <option value ="��.��.">��.��.</option>
          <option value ="��.">��.</option>
          <option value ="��.��.">��.��.</option>
        </select>
<!--        <input type="text" name="u_title"> -->
      </td>
    </tr>
    <tr>
      <td width="30%">����</td>
      <td width="70%">
        <input type="text" name="u_firstname">
      </td>
    </tr>
    <tr>
      <td width="30%">���ʡ��</td>
      <td width="70%">
        <input type="text" name="u_surname">
      </td>
    </tr>
    <tr>
      <td width="30%">���ʻ�Шӵ��</td>
      <td width="70%">
        <input type="text" name="u_ucode">
      </td>
    </tr>
    <tr>
      <td width="30%">�������Ѿ��</td>
      <td width="70%">
        <input type="text" name="u_telephone">
      </td>
    </tr>
    <tr>
      <td width="30%">�������</td>
      <td width="70%">
        <input type="text" name="u_address">
      </td>
    </tr>
    <tr>
      <td width="30%">E-Mail Address</td>
      <td width="70%">
        <input type="text" name="u_email">
      </td>
    </tr>
    <tr>
      <td width="30%">Homepage</td>
      <td width="70%">
        <input type="text" name="u_homepage">
      </td>
    </tr>
  </table>
  <p align="center"><img src="pic/newline.jpg" width="690" height="18"></p>
  <p align="right">
    <input type="submit" name="Submit" value="Next">
  </p>
</form>

</font>
</html>
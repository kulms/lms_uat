<?require("../include/global_login.php");


?>
<html>
<head>
        <title>Add NEWS</title>
<script language="javascript">
</script>
<link rel="STYLESHEET" type="text/css" href="../main.css">
</head>
<body bgcolor="#ffffff">
<div class="info" align="center">
<center>
<table width="482" border="0" cellspacing="0" cellpadding="0" align="center"
background="../images/headerbg.gif" height="53">
  <tr><td class="menu" align="center">
        <b>������Ǣ�͢��� ��Ш��ѹ��� <?echo date("d-m-Y",time()) ?> </b>

</td></tr>
</table>
<hr width="50%">

           <form action="send.php" method="post" enctype="multipart/form-data">
<table width="45%" border="0" cellspacing="5" cellpadding="0" align="center">
  <tr>
    <td class="info">
      <div align="right">��Ǣ������ͧ</div>
    </td>
    <td class="info">
      <input type="text" name="name" size="40">
    </td>
  </tr>
  <tr>
    <td class="info">
      <div align="right">�������ͧ����</div>
    </td>
    <td class="info">
      <select name="news_type">
        <option>------���͡�������ͧ����----</option>
        <option value="public">��Ъ�����ѹ��</option>
        <option value="info">����ͧ�����ͷ�Һ</option>
        <option value="feedback">����ͧ���;Ԩ�ó�</option>
        <option value="anno">��С��/�����/�觵��</option>
        <option value="report">��§ҹ��û�Ъ��</option>
        <option value="finance">����º����Թ</option>
        <option value="store">����º��ʴ�</option>
        <option value="research">�ҹ��ԡ���Ԫҡ������Ԩ��</option>
        <option value="training">�ع����֡�� �֡ͺ�� �٧ҹ</option>
      </select>
    </td>
  </tr>
  <tr>
    <td class="info">
      <div align="right">File</div>
    </td>
    <td class="info">
      <input type="file" name="file">
    </td>
  </tr>
<tr>
    <td class="res">
      <div align="right"></div>
    </td>
    <td class="res">
      <input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Submit2" value="Reset">
    </td>
  </tr>

</table>                                  </form>

</body>
</html>
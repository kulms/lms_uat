<?include("../include/global_loing.php");


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

           <form action="send.php" method="post" enctype="multipart/form-data">
<table width="45%" border="0" cellspacing="5" cellpadding="0" align="center">
  <tr>
    <td class="info">
      <div align="right">��Ǣ������ͧ</div>
    </td>
    <td class="info">
      <input type="text" name="textfield">
    </td>
  </tr>
  <tr>
    <td class="info">
      <div align="right">�������ͧ����</div>
    </td>
    <td class="info">
      <select name="select">
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
      <div align="right">Files</div>
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
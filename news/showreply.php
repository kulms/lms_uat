<?require("../include/global_login.php");
$sql=mysql_query("SELECT * FROM news WHERE id=$id;");
$row=mysql_fetch_array($sql);
?>

<html>
<head>
        <title>Internal New @ Faculty of Engineering, KU</title>
<script language="javascript">
</script>
<link rel="STYLESHEET" type="text/css" href="../main.css">
</head>
<body bgcolor="#FFFFFF">
<table width="482" border="0" cellspacing="0" cellpadding="0" align="center"
background="../images/headerbg.gif" height="53">
  <tr><td class="menu" align="center">
        <b>�š�õͺ�Ѻ</b>
</td></tr>
</table>
<hr width="50%">
<table bgcolor="AntiqueWhite" width="80%" cellpadding="6" cellspacing="0" border="1" align="center">
      <tr>
       <td class="info">���</td>
       <td class="info" colspan="2"><b><? echo $row["news_id"] ?></td>
      </tr>
      <tr>
       <td class="info">����ͧ</td>
       <td class="info" colspan="2"><b><? echo $row["name"] ?></td>
      </tr>
      <tr>
           <td class="info" align="center" width="15%"><b>����/�Ҥ/˹��§ҹ</b></td>
           <td class="info" align="center"><b>��ͤ����ͺ�Ѻ</b></td>
           <td class="info" align="center" width="80"><b>���ҷ��ͺ�Ѻ</b></td>
     </tr>
<? $replysql=mysql_query("SELECT * FROM news_res WHERE news=$id and to_users=".$person["id"].";");
    while($show=mysql_fetch_array($replysql)){?>
     <tr bgcolor="silver"><?$user=mysql_query("SELECT firstname FROM users WHERE id=".$show["users"].";");?>
          <td class="info" align="right"><?echo mysql_result($user,0,"firstname"); ?></td>
          <td class="info"><?echo $show["text"] ?></td>
          <td class="info" align="center"><?echo date("d-m-Y H:i",$show["date"]) ?></td>
</tr>
<? } ?></table>
</body>
</html>
<?mysql_close();?>
<?require("../include/global_login.php");
?>
<html>
<head>
        <title>Internal New @ Faculty of Engineering, KU</title>
<script language="javascript">
</script>
<link rel="STYLESHEET" type="text/css" href="../main.css">
</head>
<body>
<table border="1" cellspacing="1" cellpadding="1" align="center" bordercolor="#333333" >
<?
if (($filename!="") && ($text==0)){?>
<tr><td class="info" width="5%">���  : </td>
     <td class="info" width="80%"><?echo $news_id ?></td>
      <td class="info">������ <?if ($check==0){echo "1";}else{echo $check+1;} ?> ˹��</td>
      </tr>
<tr><td class="info" width="5%">�Ѻ��� : </td>
     <td class="info" width="80%"><?echo $news_in ?></td>
     <td class="info">�˹�ҷ��
<? if ($check==0){$p=1;}
   if ($check!=0){$p=$check+1;}
$a=1;
while($p >= $a){?>
<a href="show.php?id=<?echo $id?>&pages=<?echo $a ?>">
<?echo "$a"?></a>  <?
$a++;
}?></td>
      </tr>
<tr><td class="info" width="5%">����ͧ : </td>
     <td class="info" width="80%"><?echo $name ?></td>
     <td class="info">˹�� </td>
      </tr>
<tr><td colspan="3" align="center"><img src="imgfiles/<?
if ($pages=="" || $pages==1){echo $filename;}
else {
$get=mysql_query("SELECT file FROM news_page WHERE from_news=$id AND page=$pages;");
echo mysql_result($get,0,"file"); }?>"></td>
 </tr>
<? }
if ($text==1){  ?>
<tr><td class="info" width="5%">����ͧ : </td>
     <td class="info"><?echo $name ?></td>
</tr>
<?
}
if (($filename=="") && ($text==0)){ ?>
<tr><td class="info" width="5%">����ͧ : </td>
     <td class="info"><?echo $name ?></td>
      </tr>
<tr><td class="info">URL :</td>
     <td><a href="<?echo $url ?> target="_blank"><?echo $url ?></a></td>
 </tr>
<?
} ?>
</table>
</body>
</html>
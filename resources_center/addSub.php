<? require("../../include/global_login.php");
//$check=mysql_query("SELECT name from modules WHERE id=$modules;");

//$get_course=mysql_query("SELECT courses FROM wp WHERE modules=$modules;");
//$check_cadmin=mysql_query("SELECT id FROM wp WHERE courses=".mysql_result($get_course,0,"courses")." AND admin=1 AND users=".$person["id"].";");
if (($person["category"] == 2) || ($person["category"] == 0)) {
        $cadmin=1;
}else{
        $cadmin=0;
}
//echo $id."<br>";
?>
<html>
<head>
<title>Edit resources</title>
<script language="javascript">
</script>
<link rel="STYLESHEET" type="text/css" href="../../main.css">
</head>
<body bgcolor="#ffffff">
<div align="center">
<h1 class="h1"><? //echo mysql_result($check,0,"name");?></h1>
<?
if($id!="0"){
        $rs=mysql_query("SELECT * from resources_center WHERE id=$id;");
        $r=mysql_fetch_array($rs);
        if($r["users"]==$person["id"] || $person["admin"]==1 || $cadmin==1){
?>
        <h3 class="h3">Edit</h3>
        
  <table border="0" cellpadding="2" cellspacing="0">
    <tr> 
      <form action="rename.php" method="post">
        <!--<input type="hidden" name="modules" value="<? //echo $modules?>">-->
        <input type="hidden" name="id" value="<? echo $id?>">
        <td width="87" class="res">Subject Group:</td>
        <td width="356" class="res"> <input type="text" name="name" size="40" value="<? echo $r[name];?>"> 
          <input type="submit" value="Rename"> </td>
      </form>
    </tr>
    <?
                 if($r["folder"]==0 && strlen($r["url"])>0){
                         ?>
    <tr> 
      <form action="url.php" method="post">
        <!--<input type="hidden" name="modules" value="<? //echo $modules?>">-->
        <input type="hidden" name="id" value="<? echo $id?>">
        <td class="res">Subject:</td>
        <td class="res"> <input type="text" name="url" size="40" value="<? echo $r["url"]?>"> 
          <input type="submit" value="Update Subject"> </td>
      </form>
    </tr>
    <?
                 }
                if($r["folder"]==0 && strlen($r["url"])==0){
                        ?>
    <?
                }
                        if($r["users"]==$person["id"] || $person["admin"]==1 || $cadmin==1){
                        ?>
    <tr> 
      <td colspan="2" align="center"> <form>
          <input type="button" value="Delete!" onClick="if(confirm('Realy delete?')){location='delete.php?modules=<? echo $modules?>&id=<? echo $r["id"]?>';}">
        </form></td>
    </tr>
    <? }?>
  </table>
<?
        }else{
        $getuser=mysql_query("SELECT u.firstname, u.surname FROM users u, resources_center r WHERE r.id=$id AND u.id=r.users");
        $creator=mysql_result($getuser,0,"firstname")."&nbsp;".mysql_result($getuser,0,"surname");
        ?>
        <p>
        <div class="h5" align="center">Sorry, you can't edit this item. It can only be edited by it's creator (<i><? echo $creator ?></i>)</div>
        </p>
        <? }
}
if($folder=="true"){
        ?>
        <hr noshade size="4" width="200">
        <h1 class="h1">Add</h1>
        <table border="0" cellpadding="2" cellspacing="0">
                <tr>
                        
      <td align="center" colspan="2"><h4 class="h4">Subject</td>
                </tr>
                <tr>
                        <form action="folder.php" method="post">
                        <!--<input type="hidden" name="modules" value="<? //echo $modules?>">-->
                        <input type="hidden" name="id" value="0">
                        <input type="hidden" name="refid" value="<? echo $id?>">
                        <td class="res">Name:</td>
                        <td class="res"><input type="text" name="name"></td>
                </tr>
                <tr>
                        <td align="center" class="res" colspan="2"><input type="submit" value="New Subject"></td>
                        </form>
                </tr>
                <tr>
                        <td align="center" colspan="2"><hr noshade size="1" width="150"><h4 class="h4"> 
        				
						</td>
                </tr>
                
                
        </table>
        <?
}
?>
</div>
</body>
</html>
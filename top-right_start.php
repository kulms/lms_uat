<?require("include/global_login.php");?>
<HTML><HEAD><TITLE>navigation</TITLE>
<META content="text/html; charset=windows-874" http-equiv=Content-Type>
<link rel="STYLESHEET" type="text/css" href="main.css">
<SCRIPT language=JavaScript>
function on0(){
      document.images[0].src="top-images/myinext.gif";
        document.images[1].src="top-images/spacer.gif";
        document.images[2].src="top-images/on-l.gif";
        document.images[3].src="top-images/starttabon.gif";
        document.images[4].src="top-images/on-lr.gif";
        document.images[5].src="top-images/personaltab.gif";
        document.images[6].src="top-images/off-lr.gif";
        document.images[7].src="top-images/newstab.gif";
        document.images[8].src="top-images/off-lr.gif";
        document.images[9].src="top-images/coursetab.gif";
        document.images[10].src="top-images/off-r.gif";
}
function on1(){
         document.images[0].src="top-images/myinext.gif";
        document.images[1].src="top-images/spacer.gif";
        document.images[2].src="top-images/off-l.gif";
        document.images[3].src="top-images/starttab.gif";
        document.images[4].src="top-images/on-rl.gif";
        document.images[5].src="top-images/personaltabon.gif";
        document.images[6].src="top-images/on-lr.gif";
        document.images[7].src="top-images/newstab.gif";
        document.images[8].src="top-images/off-lr.gif";
        document.images[9].src="top-images/coursetab.gif";
        document.images[10].src="top-images/off-r.gif";
}
function on2(){
         document.images[0].src="top-images/myinext.gif";
        document.images[1].src="top-images/spacer.gif";
        document.images[2].src="top-images/off-l.gif";
        document.images[3].src="top-images/starttab.gif";
        document.images[4].src="top-images/off-lr.gif";
        document.images[5].src="top-images/personaltab.gif";
        document.images[6].src="top-images/on-rl.gif";
        document.images[7].src="top-images/newstabon.gif";
        document.images[8].src="top-images/on-lr.gif";
        document.images[9].src="top-images/coursetab.gif";
        document.images[10].src="top-images/off-r.gif";
}
function on3(){
                  document.images[0].src="top-images/myinext.gif";
        document.images[1].src="top-images/spacer.gif";
        document.images[2].src="top-images/off-l.gif";
        document.images[3].src="top-images/starttab.gif";
        document.images[4].src="top-images/off-lr.gif";
        document.images[5].src="top-images/personaltab.gif";
        document.images[6].src="top-images/off-lr.gif";
        document.images[7].src="top-images/newstab.gif";
        document.images[8].src="top-images/on-rl.gif";
        document.images[9].src="top-images/coursetabon.gif";
        document.images[10].src="top-images/on-r.gif";
}

</SCRIPT>

</HEAD>
<BODY aLink=#ffffff background=top-images/bgtopr.gif bgColor=#ffffff
link=#000080 vLink=#000080 >
<TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
  <TBODY>
  <TR>
    <td align="center" class="info" width="58%"><font face="MS Sans Serif, Microsoft Sans Serif" size="1" color="#0000FF">������к���й�� :   <?echo $person["firstname"]?> <? echo $person["surname"] ?><br>
      <a href="../course/include/logout.php" target="_top">
      <font color="red">�͡�ҡ�к� Click Here!!!</font>
      </a> </font></td>
    <TD align=right bordercolor="#CCCCCC" width="42%"><img src="top-images/myinext.gif" width="310" height="43" align="top">
    </TD>
  </TR></TBODY></TABLE><TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
  <TBODY>
  <TR>
    <TD align=right><IMG border=0 height=19
      src="top-images/spacer.gif" width=20><BR>
      <TABLE border=0 cellPadding=0 cellSpacing=0>
        <TBODY>
        <TR>
          <TD><IMG border=0 height=23 src="top-images/off-l.gif"
            width=23></TD>
          <TD><A href="start/menu.php" target="ws_menu" onClick="on0()">
        <IMG alt=START border=0 height=23 src="top-images/starttab.gif" width=77></a></TD>
          <TD><IMG border=0 height=23 src="top-images/off-lr.gif"
            width=26></TD>
          <TD><A href="personal/menu.php" target="ws_menu" onClick="on1()">
                <IMG alt=PERSONAL border=0 height=23 name=tb2_
            src="top-images/personaltab.gif" width=71></A></TD>
          <TD><IMG border=0 height=23 src="top-images/off-lr.gif"
            width=25></TD>
          <TD><A href="news/menu.php" target="ws_menu" onClick="on2()">
                <IMG alt=NEWS border=0 height=23 name=tb2_
            src="top-images/newstab.gif" width=71></A></TD>
          <TD><IMG border=0 height=23 src="top-images/on-rl.gif"
            width=25></TD>
          <TD><A href="courses/menu_courses.php" target="ws_menu" onClick="on3()">
                <IMG alt="COURSE" border=0 src="top-images/coursetabon.gif"></A></TD>
          <TD><IMG border=0 height=23 src="top-images/on-r.gif"
            width=23></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
<?/*
" target="ws_main">�����Թ�š���͹�ͧ�Ҩ����
       | <a href="http://eval.eng.ku.ac.th/manage/intralog.asp?uid=<?echo $person["ucode"];?>" target="ws_main">
      �����Թ�š�ú�����</a> | <a href="http://eval.eng.ku.ac.th/report_subj/intralog.asp?uid=<?echo $person["ucode"];?>" target="ws_main">��§ҹ����������ǡѺ�Ԫҷ���͹
      </a><br>
      <a href="http://158.108.42.39/reserve_car/intralog.asp?uid=<?echo $person["ucode"];?>" target="_blank">��â����ҹ��˹�</a>
      | <a href="http://158.108.42.39/reserve_room/intralog.asp?uid=<?echo $person["ucode"];?>" target="_blank">��â�����ͧ����������-��Ъ��������</a>
      <a href="http://eval.eng.ku.ac.th/aspprof/BypassLogin.asp?id=<?echo $person["ucode"]; ?>&firstname=<?echo $person["firstname"];?>&surname=<?echo $person["surname"] ?>" target="ws_main">
      | ���Чҹ�Ҩ����</a>  
*/
?></BODY></HTML>
<?
// <a href="http://eval.eng.ku.ac.th/aspdb/intralog.asp?uid=<?echo $person["ucode"]; 
?>
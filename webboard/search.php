<?php
require("../include/global_login.php");
/*
 * **********************************************
 * **     PHP - WebBoard : Search Question     **
 * **********************************************
 * *                                            *
 * * Developed By : Sansak Chairattanatrai      *
 * * E-mail :  sansak@engineer.com              *
 * * UIN : 5590582                              *
 * * License : SamChai Public Soft Group(tm).   *
 * *                                            *
 * **********************************************
 */
?>
        <html>
        <head>
        <title>WebBoard</title>
        <style type="text/css">
        <!--
        BODY {font-family:;font-size="10"}
        A:link {text-decoration: none; color: blue }
        A:visited {text-decoration: none; color: blue }
        A:hover {text-decoration: none; color: darkorange }
        A:active {text-decoration: none; color: blue }
        p, div, td, ul li, ol li { font-family:  MS Sans Serif, Microsoft Sans Serif;  font-size: 10pt }
        -->
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=tis-620"></head>
        <body bgcolor=#FFFFE0>
        <table width=100% border=0>
        <tr><td>
        <img src="../webboard/img/arrow.gif">
        <a href="../webboard/webboard.php?Category=<? echo $Category; ?>&webboard_name=<?echo $webboard_name?>">��Ѻ˹���á</a> |
        <a href="../webboard/postq.php?Category=<? echo $Category; ?>&page=<? echo $page; ?>&webboard_name=<?echo $webboard_name?>">��駤Ӷ������</a>
        </td></tr></table>

<?
        require("config.inc.php");
        $search_topic = $search;
        $search = strtolower(trim($search));
        $chk_date = date("j M Y",mktime( date("H")+$p_hour, date("i")+$p_min ));
        if (empty($page)){
                $page=1;
        }

        // �Դ��� database ������ҹ������
        // �Ҩӹǹ˹�ҷ�����
	  $sql = "select No from webboard_data where webboard_name=2 and Category='$Category'  and (Question like '%$search%' or Note like '%$search%')"; 
        $result = mysql_db_query($dbname,$sql);
        $NRow = mysql_num_rows($result);
        $rt = $NRow%$list_page;
        if($rt!=0) {
                $totalpage = floor($NRow/$list_page)+1;
        }
        else {
                $totalpage = floor($NRow/$list_page);
        }
        $goto = ($page-1)*$list_page;

        echo "<font size=2 face='MS Sans Serif'>\n";
        echo "�Ũҡ��ä��Ҥ���� \" <b>$search_topic </b>\" �ͷ������ӹǹ \" <b>$NRow</b> \" �Ӷ��\n";
        echo "</font><br><br>\n\n";

        // Query �����ŵ���ӹǹ����˹�
   //  $sql = "select * from webboard_data where webboard_name=2 and Category='$Category'  and Question like '%$search%' or Note like '%$search%' order by No DESC limit $goto,$list_page";
  $sql = "select * from webboard_data where webboard_name=2 and Category='$Category'  and (Question like '%$search%' or Note like '%$search%' )order by No DESC limit $goto,$list_page";
	    $result = mysql_db_query($dbname,$sql);
        $NRow = mysql_num_rows($result);

        if($NRow==0) {
                echo "<hr color=1E90FF>\n";
                echo "</body>\n";
                echo "</html>\n";
                exit();
        }
        // �ʴ���Ǣ�ͧ͢����
        else {
                echo "<table width=100% border=1 bordercolor=black cellspacing=0 cellpadding=2>\n";
                echo "<tr bgcolor= dodgerblue>\n";
                echo "\t<td align=center width=11%><font size=2 color=#FFF8DC><b>�Ӷ�����</b></font></td>\n";
                echo "\t<td align=center width=47%><font size=2 color=#FFF8DC><b>�Ӷ��</b></font></td>\n";
                echo "\t<td align=center width=24%><font size=2 color=#FFF8DC><b>�����[�ѹ�����]</b></font></td>\n";
                echo "\t<td align=center width=18%><font size=2 color=#FFF8DC><b>�ӹǹ�ӵͺ</b></font></td>\n";
                echo "</tr>\n\n";

                // ǹ�ٻ�ʴ������ŷ����ҹ��
                while ($row = mysql_fetch_array($result)) {

                        // ��˹��բͧ���ҧ ��������ա����Ѻ��
                        $bgc = ($bgc=="lightcyan") ? "powderblue" : "lightcyan";

                        // ��˹���ҵ����
                        $No = sprintf("%05d",$row["No"]);
                        $Question = $row["Question"];
                        $Name = $row["Name"];
                        $Member = $row["Member"];
                        $Date = substr($row["Date"],0,11); // �ʴ�੾���ѹ���
                        $Reply = $row["Reply"];
                        $ReplyDate = substr($row["ReplyDate"],0,11); // �ʴ�੾���ѹ���

                        echo "<tr bgcolor=$bgc>\n";

                        // �ʴ��ٻ folder
                        if($ReplyDate!="") {
                            echo "\t<td align=center><img src='../webboard/img/openfd.gif'> $No</td>\n";
                        }
                        else {
                            if($Date==$chk_date) {
                                    echo "\t<td align=center><img src='../webboard/img/newfd.gif'> $No</td>\n";
                                }
                                else {
                                    echo "\t<td align=center><img src='../webboard/img/closefd.gif'> $No</td>\n";
                                }
                        }

                        echo "\t<td><a href='show.php?Category=$Category&No=$row[No]&webboard_name=$webboard_name' target='$No'>$Question</a></td>\n";

                        if($Member) {
                                echo "\t<td>$Name <font size=1 color=red><b>M</b></font> [$Date]</td>\n";
                        }
                        else {
                                echo "\t<td>$Name [$Date]</td>\n";
                        }

                        // ��Ǩ�ͺ����դ��ͺ�Ӷ�������ѧ
                        if($ReplyDate!="") {
                                echo "\t<td>$Reply <font color=blue>[$ReplyDate]</font></td>\n";
                        }
                        else {
                                echo "\t<td>$Reply</td>\n";
                        }
                        echo "</tr>\n\n";
                }
                echo "</table>\n\n";

                // table ͸Ժ�¤������¢ͧ�ٻ
                echo "<table width=100% border=0 bordercolor=black cellspacing=0 cellpadding=2>\n";
                echo "<tr><td align=left>\n";
                echo "\t<img src='../webboard/img/newfd.gif'> - �Ӷ������ \n";
                echo "\t<img src='../webboard/img/closefd.gif'> - �Ӷ����� \n";
                echo "\t<img src='../webboard/img/openfd.gif'> - �Ӷ�����١�ͺ����\n";
                echo "\t<font size=1 color=red><b>M</b></font> - ��Ҫԡ��纺���\n";
                echo "</td></tr>\n";
                echo "</table>\n\n";

                // table �ʴ��Ţ˹��
                echo "<table width=100% border=0 bordercolor=black cellspacing=0 cellpadding=2>\n";
                echo "<tr><td align=left>\n";
                echo "\t<font size=2 color=#9400D3>\n";

                // ���ҧ link �����˹�ҡ�͹-˹�ҶѴ�
                if($page>1 && $page<=$totalpage) {
                        $prevpage = $page-1;
                        echo "\t<a href='search.php?Category=$Category&page=$prevpage&search=$search'>[˹�ҡ�͹ = $prevpage]</a>\n";
                }

                echo "\t ���ѧ�ʴ�˹�ҷ�� $page/$totalpage \n";

                if($page!=$totalpage) {
                        $nextpage = $page+1;
                        echo "\t<a href='search.php?Category=$Category&page=$nextpage&search=$search'>[˹�ҶѴ� = $nextpage]</a>\n";
                }

                echo "\t</font>\n";
                echo "</td></tr>\n";
                echo "<tr><td>\n";
                echo "\t<font size=2 face='MS Sans Serif'>\n";

                // ǹ�ٻ�ʴ��Ţ˹�ҷ�����
                for($i=1 ; $i<$page ; $i++) {
                        echo "\t<a href='search.php?Category=$Category&page=$i&search=$search'>$i</a> \n";
                }
                echo "\t<font size=2 color=red><b>$page</b></font> \n";
                for($i=$page+1 ; $i<=$totalpage ; $i++) {
                        echo "\t<!a href='search.php?Category=$Category&page=$i&search=$search'>$i</a> \n";
                }

                echo "\t</font>\n";
                echo "</td></tr>\n";
                echo "</table>\n";
        }
?>
<hr color=1E90FF>
</body>
</html>
<?
require("../include/global_login.php");
require("config.inc.php");
/*
 * **********************************************
 * **      PHP - WebBoard : Reply Question     **
 * **********************************************
 * *                                            *
 * * Developed By : Sansak Chairattanatrai      *
 * * E-mail :  sansak@engineer.com              *
 * * UIN : 5590582                              *
 * * License : SamChai Public Soft Group(tm).   *
 * *                                            *
 * **********************************************
 */

        $IP = getenv("REMOTE_ADDR");
        $Member = 0;

        // ��ͧ�ѹ����á html �Ѻ ������ͧ���� ' "
        $MsgBy = htmlspecialchars($MsgBy);
        $Email = htmlspecialchars($Email);
        $Msg = htmlspecialchars($Msg);


        // ��ͧ�ѹ����Һ
        $word = array("ashole","a s h o l e","a.s.h.o.l.e","bitch","b i t c h","b.i.t.c.h","shit","s h i t","s.h.i.t","fuck","dick","f u c k","d i c k","f.u.c.k","d.i.c.k","�֧","�� �","��","���","� � �","�.�.�","���","�����","�����","�ҵ����","�Ҵ���","� � � � � �","�.�.�.�.�.�","� � �� � � �","�.�.��.�.�.�","���","�Ѵ���","�Ѵ","���","��");
        $ban = "<font color=red>***</font>";
        for ($i=0 ; $i<sizeof($word) ; $i++) {
                $MsgBy = eregi_replace($word[$i],$ban,$MsgBy);
                $Email = eregi_replace($word[$i],$ban,$Email);
                $Msg = eregi_replace($word[$i],$ban,$Msg);
        }

        // ��Ǩ�ͺ����á�ٻ�Ҿ
        $txt = array(":smile:", ":sad:",":red:", ":big:", ":ent:", ":shy:", ":sleepy:", ":sun:", ":sg:", ":embarass:", ":dead:", ":cool:", ":clown:", ":pukey:", ":eek:", ":roll:", ":smoke:", ":angry:", ":confused:", ":cry:", ":lol:", ":yawn:", ":devil:", ":tongue:", ":alien:", ":tasty:", ":crazy:");
        $pic = array("smile.gif","frown.gif","redface.gif","biggrin.gif","blue.gif","shy.gif","sleepy.gif","sunglasses.gif","supergrin.gif","embarass.gif","dead.gif","cool.gif","clown.gif","pukey.gif","eek.gif","sarcblink.gif","smokin.gif","reallymad.gif","confused.gif","crying.gif","lol.gif","yawn.gif","devil.gif","tongue.gif","aysmile.gif","tasty.gif","grazy.gif");
        for ($a=0 ; $a<sizeof($txt) ; $a++) {
                $Msg = eregi_replace($txt[$a],"<img src=\"pic/$pic[$a]\">",$Msg);
        }

    // ��Ǩ�ͺ��� �ա�û�͹ url ���� email ��������� ��������� link
        $Msg = eregi_replace("([[:alnum:]]+)://([^[:space:]]*)([[:alnum:]#?/&=])","<a href=\"\\1://\\2\\3\" target=\"\\2\\3\">\\1://\\2\\3</a>",$Msg);
        $Msg = eregi_replace("([[:alnum:]]+)@([^[:space:]]*)([[:alnum:]])","<a href=mailto:\\1@\\2\\3>\\1@\\2\\3</a>",$Msg);

        // ����鹺ѹ�Ѵ���� �óշ���ա����� Enter
        $Msg = eregi_replace(chr(13),"<br>",$Msg);

        /* ��Ǩ�ͺ�������Ҫԡ�������
        $sql = "select User,Password,Email from webboard_member where User='$MsgBy'";
        $result = mysql_db_query($dbname,$sql);
        $NRow = mysql_num_rows($result);
        $row = mysql_fetch_array($result);

        // ��Ǩ�ͺ��� Password �١�������
        if($MsgBy==$row["User"] && $QPass==$row["Password"]) {
                $Member = 1;
                if(!$Email) {
                        $Email = $row["Email"];
                }
        }



                if($QPic!="none") {
                        if($QPic_type!="image/gif") {
                                echo "���������ٻ�Ҿ .gif<br>";
                                exit();
                        }
                        if($QPic_size>$Image_size) {
                                echo "��Ҵ�ͧ�Ҿ�Թ $Image_size bytes<br>";
                                exit();
                        }

                        copy($QPic,$QPic_name);
                        // copy(stripslashes($QPic),$QPic_name); // For Windows
                        $Psize = filesize($QPic_name);
                        $PData = addslashes(fread(fopen($QPic_name,"r"),$Psize));
                }  */

                // ��Ѻ�������ç�Ѻ�������ͧ�� �óշ�� server ���������ͧ�͡
        $mdate = date("j M Y H:i",mktime( date("H")+$p_hour, date("i")+$p_min ));

        // �ѹ�֡������ŧ database
        $sql1 = "INSERT INTO webboard_ans (QuestionNo, Name, Member, IP, Email, Msg, Date, Image,webboard_name,users) VALUES ('$No', '$MsgBy', '$Member', '$IP', '$Email', '$Msg', '$mdate', '$PData','$webboard_name','".$person["id"]."')";
        $sql2 = "UPDATE webboard_data SET Reply=Reply+1, ReplyDate='$mdate' WHERE No='$No'";

        $result1 = mysql_db_query($dbname,$sql1);
        $result2 = mysql_db_query($dbname,$sql2);

        if(!$result1) { echo "Error : Can not save to database"; exit(); }
        if(!$result2) { echo "Error : Can not update to database"; exit(); }

        $ShowNo = sprintf("%05d",$No);

        if($QPic_name) {
                unlink($QPic_name);
        }

        mysql_close();
?>

        <html>
        <head>
        <title>PHP - Ultimate Webboard 2.00</title>
        <meta name="Generator" content="EditPlus">
        <META HTTP-EQUIV="Content-Type" content="text/html; charset=unknown">
        <META HTTP-EQUIV="REFRESH" CONTENT="2; URL=show.php?Category=<? echo $Category; ?>&No=<? echo $No; ?>&webboard_name<?echo $webboard_name?>">
        </head>

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

        <body>
        <center>
        <table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>
        <tr><td align=center>
        <font size=2 face='MS Sans Serif'>
        <font size=3 color=red><b>���Ѻ���������Ǥ�Ѻ</b></font><br><br>
        �ҡ�ӵͺ�ͧ�س�������顴���� Refresh/Reload ��Ѻ
        </font></td></tr></table>
        </center>
        </body>
        </html>
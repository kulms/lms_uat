<?require("../include/global_login.php");
require("config.inc.php");
/*
 * **********************************************
 * **           PHP - WebBoard : Post Question      **
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
        <META HTTP-EQUIV="REFRESH" CONTENT="2; URL=webboard.php?webboard_name=<?echo $webboard_name?>">
        <title>Webboard</title>
        <link rel="STYLESHEET" type="text/css" href="../main.css">
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
        </head>

        <body>

 <?
        $IP = getenv("REMOTE_ADDR");
        $Member = 0;
        // ��ͧ�ѹ����á html �Ѻ ������ͧ���� ' "
        $QTitle = htmlspecialchars($QTitle);
        $QNote = htmlspecialchars($QNote);
        $QName = htmlspecialchars($QName);
        $QEmail = htmlspecialchars($QEmail);

        // ��ͧ�ѹ����Һ
        $word = array("ashole","a s h o l e","a.s.h.o.l.e","bitch","b i t c h","b.i.t.c.h","shit","s h i t","s.h.i.t","fuck","dick","f u c k","d i c k","f.u.c.k","d.i.c.k","�֧","�� �","��","���","� � �","�.�.�","���","�����","�����","�ҵ����","�Ҵ���","� � � � � �","�.�.�.�.�.�","� � �� � � �","�.�.��.�.�.�","���","�Ѵ���","�Ѵ","���","��");
        $ban = "<font color=red>***</font>";
        for ($i=0 ; $i<sizeof($word) ; $i++) {
                $QTitle = eregi_replace($word[$i],$ban,$QTitle);
                $QNote = eregi_replace($word[$i],$ban,$QNote);
                $QName = eregi_replace($word[$i],$ban,$QName);
                $QEmail = eregi_replace($word[$i],$ban,$QEmail);
        }

        // ��Ǩ�ͺ����á�ٻ�Ҿ
        $txt = array(":smile:", ":sad:",":red:", ":big:", ":ent:", ":shy:", ":sleepy:", ":sun:", ":sg:", ":embarass:", ":dead:", ":cool:", ":clown:", ":pukey:", ":eek:", ":roll:", ":smoke:", ":angry:", ":confused:", ":cry:", ":lol:", ":yawn:", ":devil:", ":tongue:", ":alien:", ":tasty:", ":crazy:");
        $pic = array("smile.gif","frown.gif","redface.gif","biggrin.gif","blue.gif","shy.gif","sleepy.gif","sunglasses.gif","supergrin.gif","embarass.gif","dead.gif","cool.gif","clown.gif","pukey.gif","eek.gif","sarcblink.gif","smokin.gif","reallymad.gif","confused.gif","crying.gif","lol.gif","yawn.gif","devil.gif","tongue.gif","aysmile.gif","tasty.gif","grazy.gif");
        for ($a=0 ; $a<sizeof($txt) ; $a++) {
                $QNote = eregi_replace($txt[$a],"<img src=\"pic/$pic[$a]\">",$QNote);
        }

        // ��Ǩ�ͺ��� �ա�û�͹ url ���� email ��������� ��������� link
        $QNote = eregi_replace("([[:alnum:]]+)://([^[:space:]]*)([[:alnum:]#?/&=])","<a href=\"\\1://\\2\\3\" target=\"\\2\\3\">\\1://\\2\\3</a>",$QNote);
        $QNote = eregi_replace("([[:alnum:]]+)@([^[:space:]]*)([[:alnum:]])","<a href=mailto:\\1@\\2\\3>\\1@\\2\\3</a>",$QNote);

        // ����鹺ѹ�Ѵ���� �óշ���ա����� Enter
        $QNote = eregi_replace(chr(13),"<br>",$QNote);

        // ��Ǩ�ͺ�������Ҫԡ�������
    /*    mysql_connect($host,$user,$passwd);
        $sql = "select loginUser,Password,Email from webboard_member where User='$QName'";
        $result = mysql_db_query($dbname,$sql);
        $NRow = mysql_num_rows($result);
        $row = mysql_fetch_array($result);

        // ��Ǩ�ͺ��� Password �١�������
        if($QName==$row["User"] && $QPass==$row["Password"]) {
                $Member = 1;
                if(!$QEmail) {
                        $QEmail = $row["Email"];
                }
        }
        mysql_close();

                       if($QPic!="none") {
                $filetype=substr($QPic_name,-3);
                echo $filetype."<br>";
                if($filetype!="gif"){
                                echo "���������ٻ�Ҿ����ʴ��� web �� (.gif)<br>";
                                exit();
                        }
                        if($QPic_size>$Image_size) {
                                echo "<h2>��Ҵ�ͧ�Ҿ�Թ $Image_size bytes</h2><br>";
                                exit();
                        }

                        copy($QPic,$QPic_name);
                        //copy(stripslashes($QPic,$QPic_name)); // For Windows
                        $Psize = filesize($QPic_name);
                        $PData = addslashes(fread(fopen($QPic_name,"r"),$Psize));
                }
   */

        // ��Ѻ�������ç�Ѻ�������ͧ�� �óշ�� server ���������ͧ�͡
        $mdate = date("j M Y H:i",mktime( date("H")+$p_hour, date("i")+$p_min ));

        // ��¹������ŧ database
 //       mysql_connect($host,$user,$passwd);
        $sql = "insert into webboard_data (Category,Question,Note,Name,Member,IP,Email,Date,Image,webboard_name,users) values ('$Category','$QTitle','$QNote','$QName','$Member','$IP','$QEmail','$mdate','$PData','$webboard_name','".$person["id"]."')";
        if(mysql_db_query($dbname,$sql)) {
                echo "<center>";
                echo "<table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>";
                echo "<tr><td align=center>";
                echo "<font size=2 face='MS Sans Serif'>";
                echo "<font size=3 color=red><b>���Ѻ���������Ǥ�Ѻ</b></font><br><br>";
                echo "</font></td></tr></table>";
                echo "<br><hr color=FF1493 width=600>";
                echo "<font size=2 face='MS Sans Serif'>";
                echo "<font>";
                echo "</center>";
                if($QPic_name) {
                        unlink($QPic_name);
                }
        }
        else {
                echo "Error <br>";
        }
        mysql_close();
?>

</body>
</html>
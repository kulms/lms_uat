<?require("../include/global_login.php");
/*
 * **********************************************
 * **        PHP - WebBoard : Show Image       **
 * **********************************************
 * *                                            *
 * * Developed By : Sansak Chairattanatrai      *
 * * E-mail :  sansak@engineer.com              *
 * * UIN : 5590582                              *
 * * License : SamChai Public Soft Group(tm).   *
 * *                                            *
 * **********************************************
 */

        require("config.inc.php");

        // �Դ��� database ������ҹ������
        $sql = "select image from webboard_$table where No='$No'";
        $result = mysql_db_query($dbname,$sql);
        $row = mysql_fetch_row($result);

        // ��˹� Header �� GIF
        header("Content-type: image/gif");

        // �ʴ��Ҿ
        echo $row[0];

?>
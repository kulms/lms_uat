<?
/*
 * **********************************************
 * **    PHP - WebBoard : Configuration File   **
 * **********************************************
 * *                                            *
 * * Developed By : Sansak Chairattanatrai      *
 * * E-mail :  sansak@engineer.com              *
 * * UIN : 5590582                              *
 * * License : SamChai Public Soft Group(tm).   *
 * *                                            *
 * **********************************************
 */

//(1) ��駤�ҵ�ҧ� �ͧ MySQL Server
//        $host = "course.eng.ku.ac.th";
//        $user = "alumni";
//        $passwd = "inmula";
//        $dbname = "alumni";

//(2) Admin Password
        $admin = "jtn";
        $admin_pwd = "";

//(3) ��駤�Ҥ�����ҧ�ͧ���� Server �Ѻ �������
        $p_hour = 0;
        $p_min = 0;

//(4) ��駤�Ҩӹǹ�Ӷ�����˹��
        $list_page = 20;

//(5) ��駤������ʴ������Ţ IP Address
        // ALL - �ʴ�����ء��ѡ , BAN - �ʴ� 3 ��ѡ�á , NONE - ����ʴ� IP Address
        $showIP = "BAN";

//(6) ���͡�к���������
        // 1 - ������ҡ Script �ͧ��纺��� , 2 - ������ҡ MS Outlook Express
        $s_mail = "1";

//(7) ��˹���Ҵ�ͧ�Ҿ���͹حҵ��� upload �� (˹����� byte)
        $Image_size = 1024000;        // 10240 = 10 kbytes

//(8) ��˹��ٻẺ�ͧ����ʴ�ʶҹ� ICQ (1-17)
        $ICQ_Image_Type = 5;

//(9) �ʴ��ӴѺ�ͧ�ӵͺ
        // ASC - ���§�ӴѺ�����Ũҡ������ҡ , DESC - ���§�ӴѺ�����Ũҡ�ҡ仹���
        $order = "ASC";
?>
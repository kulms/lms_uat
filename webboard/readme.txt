* **********************************************
* **       PHP - Ultimate Webboare 2.00       **
* **********************************************
* *                                            *
* * Developed By : Sansak Chairattanatrai      *
* * E-mail :  sansak@engineer.com              *
* * UIN : 5590582                              *
* * License : SamChai Public Soft Group(tm).   *
* *                                            *
* **********************************************
 
================================================
����������¹�ŧ��ҧ� PHP - Ultimate Webboard 2.00
================================================
1. ����ö�á�ԧ�� URL ŧ��� ����֧ ������ 
	�¾���� http://www.something.com/ ����
	sansak@engineer.com ŧ� text box 
	���������зӡ���ŧ���ԧ������ͧ
	���ѧ����������ö㹡�û�ͧ�ѹ tag html ����
2. �����ٻ��ҿ�ԡ���� 
	�������ٻ Folder, E-mail, ICQ, ProFile, Homepage
3. ��Ѻ��ا�к����Ң�ͤ��� (search)
	������ѹ������Ѻ��ا�к����Ң�ͤ��������ʹ�
	����ѡ�� ���-�˭� �������� key word ����ͧ��ä���
	ŧ� text box
4. �����к���Ҫԡ
	������ѹ����������س���ѵԹ������ ���
	��Ҫԡ����ö�������� ��������Ҫԡ��
5. ���к��� IP Address �ͧ�����-�ͺ
	����ѧ����ö���͡�Ըա���ʴ� IP Address 
	�� 3 Ẻ
6. ������ǹ��� upload �ٻ���ͧ (੾����Ҫԡ)
7. ����ö�á�ٻ�Ҿ��硷���������Ѻ�����
8. ����ö��������֧��Ңͧ��з�����ͤ��ͺ 
	������ѹ����������س���ѵԹ������ ���
	����ö���͡����� ����������ҡ�������纺��� ����
	��������ҡ����� MS Outlook Express
9. ����ö����������´�ͧ��Ҫԡ�� (Profile)
10. ��Ѻ��ا�������ҹ����¢�� ���ͷ��л�Ѻ��ا˹�ҵҢͧ��纺�������� 
11. ������ѹ�������¹������ҡ PHP 4.0.0 
12. ��Ѻ��ا��������㹡���ʴ���, ��ä��� ��� �����˹��
13. ���꡵�ҧ� ������ѹ 1.00

=================
������ͧ��âͧ�к�
=================
PHP 4.0.0 ����
MySQL 3.0.0 ����

=========================================
��鹵͹��õԴ��� PHP - Ultimate Webboard 2.00
=========================================
1. ᵡ��� webboard2.0.0.zip ŧ� root directory(������ǡѺ�������� index)
   ���Ш����ҧ directory ���� webboard ����ͧ
2. ��������� config.inc.php �ѧ���

	//(1) ��駤�ҵ�ҧ� �ͧ MySQL Server
		$host = "localhost";
		$user = "";   <=== ��� user name 
		$passwd = ""; <=== ��� password
		$dbname = "";  <=== ���� database �����

	//(2) Admin Password
		$admin = "root";  <=== ��˹� username ����Ѻ˹�� Admin
		$admin_pwd = "";  <=== ��˹� password ����Ѻ˹�� Admin

	//(3) ��駤�Ҥ�����ҧ�ͧ���� Server �Ѻ �������
		$p_hour = 12;  <== �óշ��  Server �������ͧ�͡
		$p_min = 30;

	//(4) ��駤�Ҩӹǹ�Ӷ�����˹��
		$list_page = 15; <=== �繡�á�˹�����ʴ��ӹǹ�Ӷ����� 1 ˹��

	//(5) ��駤������ʴ������Ţ IP Address 
		// ALL - �ʴ�����ء��ѡ , BAN - �ʴ� 3 ��ѡ�á , NONE - ����ʴ� IP Address
		$showIP = "BAN";

	//(6) ���͡�к���������
		// 1 - ������ҡ Script �ͧ��纺��� , 2 - ������ҡ MS Outlook Express
		$s_mail = "1";

	//(7) ��˹���Ҵ�ͧ�Ҿ���͹حҵ��� upload �� (˹����� byte)
		$Image_size = 10240;	// 10240 = 10 kbytes

	//(8) ��˹��ٻẺ�ͧ����ʴ�ʶҹ� ICQ (1-17)
		$ICQ_Image_Type = 5;

	//(9) �ʴ��ӴѺ�ͧ�ӵͺ
		// ASC - ���§�ӴѺ�����Ũҡ������ҡ , DESC - ���§�ӴѺ�����Ũҡ�ҡ仹���
		$order = "ASC";  <=== ����ö��˹� �ӴѺ����ʴ��ӵͺ��

3. ����������� config.inc.php ���� ����ѹ��� "setup.php" ���������������ҧ�ҹ������
   ������㹡���� �Ӷ��-�ӵͺ �����¡������ѧ���
   http://www.yourdomain.com/webboard/setup.php
   �����������ʴ�ʶҹ��������ö���ҧ�ҹ���������������
4. �Ըա�����¡����纺��� ������ҧ link �ѧ���
	
	<a href="http://www.yourdomain.com/webboard/webboard.php?Category=���ͺ���>���ͺ���</a>
	����
	<a href="../webboard/webboard.php?Category=���ͺ���>���ͺ���</a>

�����������������纺��촹����§ 1 ����� ����ö���ҧ��������纺��� ��§���˹��ç Category ����
����� Category �з�˹�ҷ���繵������Ǵ����ͧ��纺�������ͧ ������ҧ��

<h1>Test PHP - Ultimate Webboard 2.00</h1>
<a href="../webboard/webboard.php?Category=php">PHP Webboard</a><br>
<a href="../webboard/webboard.php?Category=asp">ASP Webboard</a><br>
<a href="../webboard/webboard.php?Category=perl">Perl Webboard</a><br>
<a href="../webboard/webboard.php?Category=vb">VB Webboard</a><br>

���ͷ��ͧ���¡��� test.html

5. ����Ѻ��ҹ����� Windows ���к���Ժѵԡ�� 
��������� post.php ��÷Ѵ��� 96 ��� 97
�ҡ
		copy($QPic,$QPic_name);
		//copy(stripslashes($QPic,$QPic_name)); // For Windows
��
		//copy($QPic,$QPic_name);
		copy(stripslashes($QPic,$QPic_name)); // For Windows
��������� reply.php ��÷Ѵ��� 75 ��� 76
�ҡ
		copy($QPic,$QPic_name);
		//copy(stripslashes($QPic,$QPic_name)); // For Windows
��
		//copy($QPic,$QPic_name);
		copy(stripslashes($QPic,$QPic_name)); // For Windows

����Ѻ��ҹ����� Unix ���к���Ժѵԡ��
������¡��� phpinfo.php ���Ǵ���ҷ�� Configuration PHP Core ��÷Ѵ�����¹���

+----------------+----------+----------+
| upload_tmp_dir | no value | no value |
+----------------+----------+----------+

��Ң���蹹�� �з�����������纺����������ö upload �ٻ�� ����¡��
�Դ��͡Ѻ�������к� ��������������к���Һ��� ��ͧ��˹� temp directory

==========================
����Ѻ˹�� Admin(admin.html)
==========================
1. ��������¡��� admin.html ��������� ��ҹ�е�ͧ��͡ Admin ID ��� Password ��͹ 
(Admin ID ��� Password �١��˹�������� config.inc.php)
2. ��ѧ�ҡ�������� Login �������Ǩ��տ��������͡ ������ 2 ��ͧ
3. ���͡ ź�Ӷ��(��з��) ���� ź�ӵͺ ����������ͧ��������ҧ˹�� ��� ��͡ �����Ţŧ�
(�����Ţ - �����Ţ�Ӷ��(��з��) ���� �����Ţ�ӵͺ)
4. ����͡����� >ź< ��������ʴ�˹�������¨к͡��������´�ͧ���ź��������������� 


===================================
*** ��ͧ�ͷӤ������㨡ѹ�ѡ�Դ�Ф�Ѻ ***
===================================
 �������纺��촷�����Ӣ�� �繡����¹���������ͧ������ �����ӡ�÷��ͺ�����ҹ����
1. ����ӡ�õ�Ǩ������ʡ�͹���й������������ server 
2. �������Ѻ�Դ�ͺ��ͤ���������µ�ҧ� ����Դ�ҡ��õԴ�������� PHP - Ultimate Webboard 2.00
3. ����� PHP - Ultimate Webboard 2.00 �� freeware �й�������ӡ�ë���-��� ���索Ҵ
4. �����繡��ѧ�㹡�����ҧ��ä�ŧҹ���� � ���·��ԧ���Ѻ���Ҽ���ҧ��Ѻ 

����ջѭ��㹡�õԴ�����纺��� ����ö�Դ��ͼ���ҹ�ҧ��纺��촢ͧ��纼� ����
E-mail �ҷ�� sansak@engineer.com ��Ѻ �����ء��ҹ���ʺ���������㹡�õԴ��駹Ф�Ѻ : )

�ʹ�ѡ��� ���ѵ�����
sansak@engineer.com
http://sansak.saxen.net/


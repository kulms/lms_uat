<?
/*
#===========================================================================
#= Script : EGAT e-Learning
#= Author : S.Kongdej
#= Web Designer: somboonph@egat.or.th
#= Email  : skongdej@hotmail.com
#= Support: http://www.learningnuke.com
#===========================================================================
#= Copyright (c) 2004 Electricity Generating Authority of Thailand,Jongdee Group
#= You are free to use and modify this script as long as this header
#=
#= This program is free software; you can redistribute it and/or modify
#= it under the terms of the GNU General Public License as published by
#= the Free Software Foundation; either version 2 of the License, or
#= (at your option) any later version.
#=
#= This program is distributed in the hope that it will be useful,
#= but WITHOUT ANY WARRANTY; without even the implied warranty of
#= MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#= GNU General Public License for more details.
#=
#= You should have received a copy of the GNU General Public License
#= along with this program; if not, write to the Free Software
#= Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#===========================================================================
*/
/**
*  �ʴ�����ѵԡ�����¹�ͧ�ѡ���¹
*/
function showRosterAdmin() {
	global $config,$lang,$usersess,$color;
	global $scheduleid;

	$inst = db_getvar($config['tablescheduling'],"SchedulingID='$scheduleid'","Instructor");
	$start = db_getvar($config['tablescheduling'],"SchedulingID='$scheduleid'","Start");
	$course = db_getvar($config['tablescheduling'],"SchedulingID='$scheduleid'","CourseID");
	$coursename = db_getvar($config['tablecourse'],"CID='$course'","CourseName");
	$coursecode = db_getvar($config['tablecourse'],"CID='$course'","Code");
	$datestart=C2TH($start,1);

	echo '<DIV ALIGN="LEFT">&nbsp;&nbsp;<IMG SRC="theme/'.$config['theme'].'/title/'.$config['language'].'/studentlist.jpg" BORDER=0>';
	
	echo "<BR><BR>&nbsp;&nbsp;<B><FONT COLOR=#669900>&quot;$coursecode:$coursename ($datestart)&quot; </FONT></B></DIV><BR>";
	echo "<div align=right>( <font face='ms sans serif'  SIZE=1 COLOR=#8B8B8B>S=$lang[study], P=$lang[pass], D= $lang[drop], <img src=images/complete.gif> = $lang[pass] $config[highscore] %</FONT> )&nbsp;&nbsp;</div>";

	if ($usersess->get_var("admin")) {
		echo "&nbsp;&nbsp;&nbsp;  - <A HREF='index.php?action=showboard&scheduleid=$scheduleid&courseid=$course'><B>$lang[menu_board]</B></A>";
	}

	if ($usersess->get_var("admin") || $usersess->get_var("nickname") == $inst) { 
		$sql = "SELECT e.Nickname,u.Firstname,u.Lastname,u.Email,u.Phone,u.Shows, e.Status,u.ID FROM $config[tableenroll] e, $config[tableuser] u WHERE e.Nickname=u.Nickname and e.SchedulingID='$scheduleid'";

		$result=db_select($sql);
		$rows=mysql_num_rows($result);

		if ($rows > 0) {
		
			echo "<TABLE WIDTH=98% CELLSPACING=0 CELLPADDING=0 BORDER=0>";
			echo "<FORM METHOD=POST ACTION='index.php'>";
			echo "<INPUT TYPE=hidden NAME='action' VALUE='checkscore'>";
			echo "<INPUT TYPE=hidden NAME='scheduleid' VALUE='$scheduleid'>";
			echo "<TR align=center height=20><TD class=head><B>$lang[nickname]</B></TD><TD class=head><B>$lang[firstname] $lang[lastname]</B></TD><TD  class=head><B>$lang[email]</B>,<B>$lang[phone]</B></TD><TD class=head>&nbsp;</TD><TD  class=head>&nbsp;</TD><TD class=head><B>S</B></TD><TD class=head><B>P</B></TD><TD class=head><B>D</B></TD></TR>";
	

			for($i=1;list($nickname,$firstname,$lastname,$email,$phone,$shows,$status,$empn) = mysql_fetch_row($result);$i++) {
				$email="<a href='mailto:$email'>$email";
				
				if ($status==1) {
					$cerlinknickname="<AHREF='index.php?action=showcer&user=$nickname&scheduleid=$scheduleid' target='_blank'>$nickname <img src='images/cer.gif' border=0 align=absmiddle></A>";
				}
				else {
					$cerlinknickname=$nickname;
				}

				$colors= $i%2 ? $color['color_a'] : $color['color_b'];

				echo "<TR bgcolor=".$colors."><TD width=100>$i. $cerlinknickname</TD><TD>$firstname $lastname</TD><TD>$email, $phone</TD>";
				echo "<TD><input type='button' value='$lang[button_history]' class=button onclick=\"popup('index.php?action=history&user=$nickname&scheduleid=$scheduleid','_blank',600,600)\"></TD>";

				// ��Ǩ�ͺ����ͺ��ҹ�Թ 60% �������
				$sql2 = "SELECT COUNT(l.LessonID) FROM $config[tablelesson] l,$config[tablequiz] q WHERE q.LessonID=l.LessonID AND l.CourseID='$course'  GROUP BY l.LessonID";
				$result2=db_select($sql2);
				$nlesson=mysql_num_rows($result2);

				$sql1 = "SELECT MAX(Score) FROM $config[tablescore]  WHERE Nickname='$nickname' and SchedulingID='$scheduleid'  GROUP BY LessonID";
				$result1=db_select($sql1);
				$rows=mysql_num_rows($result1);
				$comcourse="<img src='images/complete.gif' border=0>";
				if (($rows == $nlesson) && $nlesson != 0) {
					for($j=1;list($score) = mysql_fetch_row($result1);$j++) {
						if ($score < $config['highscore'])
							$comcourse="";
					}
				}
				else {
					$comcourse="";
				}

				// study progress check
				$status_check[$status]='checked';
				echo "<TD>$comcourse</TD>";
				echo "<TD align=center><input name='s[$i]' type='radio' value='$config[status_study]' ".$status_check[$config['status_study']]."></TD>";
				echo "<TD align=center><input name='s[$i]' type='radio' value='$config[status_pass]' ".$status_check[$config['status_pass']]."></TD>";
				echo "<TD align=center><input name='s[$i]' type='radio' value='$config[status_drop]' ".$status_check[$config['status_drop']]."></TD>";
				echo "</TR>";
			}
			echo '<TR height=1 bgcolor=#CCCCCC><TD colspan="8" backgruound="images/line2.gif"></TD></TR>';
			
			$now=date ("j F Y");

			echo "<TR><TD colspan=8>";
			echo "<BR>$lang[certificatedate]: <INPUT TYPE=text NAME=datecer value='$now'  size=10>&nbsp;&nbsp;";
			echo " Mail&nbsp;<INPUT TYPE=checkbox NAME=sendcer value=1 checked>&nbsp;&nbsp;<P>";
			echo "<INPUT class=button TYPE='submit' value='  $lang[button_ok]  '>&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;</TD></TR></FORM>";
			echo "</TABLE><BR>";

		}
	}
	else {
		echo "<P><CENTER><B>You are not authorized!!</B></CENTER>";
	}
}


/*- - - �ʴ�����ѵԡ�����¹ - - -*/
function history() {
	global $config, $usersess;
	global $user,$scheduleid;

	$start = db_getvar($config['tablescheduling'],"SchedulingID='$scheduleid'","Start");
	$course = db_getvar($config['tablescheduling'],"SchedulingID='$scheduleid'","CourseID");
	$coursename = db_getvar($config['tablecourse'],"CID='$course'","CourseName");
	$coursecode = db_getvar($config['tablecourse'],"CID='$course'","Code");
	$sql="SELECT * FROM $config[tablelog] WHERE Nickname='$user' and Event like '%$course-$scheduleid%' ORDER BY Eventtime";
	$result=db_select($sql);
	$startdate=C2TH($start,1);
	
?>
<HTML>
<HEAD>
<TITLE>History</TITLE>
<LINK REL="STYLESHEET" HREF="theme/<?=$config['theme']?>/style/default.css" type="text/css">
<SCRIPT language="JavaScript" src="js/popup.js"></SCRIPT>

</HEAD>

<BODY>
<U><B><?=$lang['history']?></B></U><P>
<?=$lang['course']?> <B><?=$coursecode?>:<?=$coursename?></B> (<?=$startdate?>)<BR>
 <?=$lang['student']?><B><?=$user?></B>
<HR>

<?
	
	for($i=0;list($nickname,$time,$event,$userIP) = mysql_fetch_row($result);$i++) {
		if ($time) {
			$timestr=date($config['dateformat'],sql_to_unix_time($time))	;
		}
		$event=stripslashes($event);
		echo "<FONT  COLOR=#747474>$timestr</FONT>: $event<BR>";
	}

	if ($i==0) {
		
		echo '<BR><CENTER><B>* * * No Record * * *</B></CENTER>';
	}

?>
<BR><HR>
<CENTER><INPUT TYPE="submit" Value="Close Window" onclick="javascript:window.close();"></CENTER>
<?
}


/*- - - ���� certificate  - - -*/
function checkScore() {
		global $config,$lang;
		global $scheduleid;
		global $sendcer,$datecer,$s;

		$update=array($lang['study'],$lang['pass'],$lang['drop']);

		$course = db_getvar($config['tablescheduling'],"SchedulingID='$scheduleid'","CourseID");
		$instructor = db_getvar($config['tablescheduling'],"SchedulingID='$scheduleid'","Instructor");
		$coursename = db_getvar($config['tablecourse'],"CID='$course'","CourseName");
		$coursecode = db_getvar($config['tablecourse'],"CID='$course'","Code");
		$instructormail = db_getvar($config['tableuser'],"Nickname='$instructor'","Email");

		// find student information
		$sql = "SELECT u.ID,e.Nickname,u.Firstname,u.Lastname,u.Email,u.Phone,u.Shows, e.Status FROM $config[tableenroll] e, $config[tableuser] u WHERE e.Nickname=u.Nickname and e.SchedulingID='$scheduleid'";

		?>
		<TABLE WIDTH="98%" CELLSPACING=0 CELLPADDING=0>
		<TR>
		<TD>
		<IMG SRC="images/studentlist.jpg" BORDER=0><BR><BR>
		<B>Results:</B>
		<?
		echo "<HR>";
		$result=db_select($sql);

		for ($i=1; list($empn,$nickname,$firstname,$lastname,$email,$phone,$shows,$status) = mysql_fetch_row($result);$i++) {
			// update status
			$sql1 = "UPDATE $config[tableenroll] SET Status='$s[$i]' WHERE SchedulingID='$scheduleid' AND Nickname='$nickname' ";
			$result1=db_select($sql1);

			echo "<LI><B>$nickname</B> ($firstname $lastname)   -> ";
	
			if ($update[$s[$i]]==$lang['pass']) { 
					echo "<B>".$update[$s[$i]]."</B> <img src=images/complete.gif>";
					// Send mail to student who pass this course
					if ($sendcer) {
						// �����쨺��ѡ�ٵ�
						$subject = $lang['certificate_mail_subject']. "$coursecode:$coursename";
						$message= "<font face='ms sans serif' size=2><P>";
						$message.= $lang['certificate_mail_msg1']. $nickname . $lang['certificate_mail_msg2'] . $coursename .$lang['certificate_mail_msg3'];
						$message.= "<P><CENTER><IMG SRC=\"$config[homeurl]/certificate/$course-$scheduleid-$empn.jpg\"></CENTER><BR>";
						$message.= "<A HREF='$config[homeurl]/index.php?action=showcer&user=$nickname&scheduleid=$scheduleid'>Click here</A>";
						$ok = mailsock($instructormail,$email,null,$subject,$message);
						if ($ok)
							echo ".. send mail";
					}
			}
			else {
					echo " ".$update[$s[$i]]." ";
			}
		}

		echo "<HR><CENTER>&lt;&lt; <A HREF='javascript:history.go(-1)'>Go Back</A></CENTER>";
		?>
		</TD>
		</TR>
		</TABLE>
		<?
}

/*- - - �ʴ� certificate - - -*/
function showCertificate() {
	global $config;
	global $scheduleid,$user;

	$sql = "SELECT c.CID, c.Code, c.CourseName, s.SchedulingID, s.Start,sum(l.Length),s.Instructor,u.ID,u.Firstname,u.Lastname";
	$sql .= " FROM $config[tablecourse] c,$config[tablescheduling] s, $config[tablelesson] l, $config[tableenroll] e, $config[tableuser] u";
	$sql .= " WHERE c.CID=s.CourseID and l.CourseID=s.CourseID and e.SchedulingID=s.SchedulingID and u.Nickname=e.Nickname";
	$sql .= " and e.Nickname='$user' and e.Status='1' and s.SchedulingID='$scheduleid' ";
	$sql .= " Group BY s.CourseID,s.Start ORDER BY s.CourseID, s.Start";

	$result=db_select($sql);

	list($courseid,$coursecode, $coursename,$schdid,$start,$length,$instructor,$empn,$firstname,$lastname) = mysql_fetch_row($result);
	if ($courseid) {
		$cerno= $courseid."-".$scheduleid."-".$empn;  //  certificate reference name
		$filecer=$config['cerdir']."/".$cerno.".jpg";

		echo "<html>";
		echo "<head><title>Certificate No. $cerno : $coursename </title></head>";
		echo "<body><center>";
		if (file_exists($filecer)) {
			echo "<img src='$config[homeurl]/$filecer'>";
		}
		else {
			$date=thaiDateDuration($start,$length);
			createCertificate($courseid,$coursecode,$coursename,$instructor,$firstname,$lastname,$date,$cerno);
			echo "<img src='$config[homeurl]/$filecer'>";
		}

		echo '<BR><BR><CENTER><INPUT TYPE="submit" Value=" Print " onclick="javascript:window.print();"> <INPUT TYPE="submit" Value="Close" onclick="javascript:window.close();"></CENTER>';

	}
}


/*- - - ���ҧ .jpg � certificate - - -*/
function createCertificate($courseid,$coursecode,$coursename,$instructor,$firstname,$lastname,$datecer,$cerno) {
	global $config;
	
	$width=595;
	$height=835;
	$font=$config['font'];
	
	$fileopen=$config['cerdir']."/".$cerno.".jpg";
	$bg=$config['cerdir']."/".$config['instdir']."/".$instructor.".jpg";

	if ($d=getimagesize($bg)) {
			$src_bg = imagecreatefromjpeg($bg);
			$dst = @imagecreatetruecolor($width, $height)  or die("Cannot Initialize new GD image stream");

//			$dst = imagecreate($width, $height);
			$white = imagecolorallocate($dst,255,255,255);
			$black = imagecolorallocate($dst,0,0,0);
			$blue = imagecolorallocate($dst,0,0,255);
			imagefill($dst,0,0,$white);

			imagecopyresized($dst,$src_bg,0,0,0,0,$d[0],$d[1],$d[0],$d[1]);

			if (eregi("[A-Z][a-z]",$firstname)) {
				$firstname=strtoupper($firstname);
				$lastname=strtoupper($lastname);
				$student= $firstname ." " . $lastname;
			}
			else {
				$student= $firstname ." ". $lastname;
			}

			
			$begin=253;
			$refno="Certificate No. ".$cerno;
			ImageTTFText ($dst, 18, 0,$begin, 365, $black, $font,th2uni($coursecode));
			ImageTTFText ($dst, 18, 0, $begin, 410, $black, $font,th2uni($coursename));
			ImageTTFText ($dst, 16, 0, $begin, 455, $black, $font,th2uni($student));
			ImageTTFText ($dst, 16, 0, $begin, 500, $black, $font,th2uni($datecer));
			ImageTTFText ($dst, 10, 0, 20, 800, $black, $font,th2uni($refno));

			imagejpeg($dst,$fileopen);
			imagedestroy($dst);
			imagedestroy($src_bg);	
	}
}

/*- - - �� center �ͧ text string - - -*/
function centerx($str,$size) {
	$width=595;

	$len=strlen($str);

	return ($width/2) - (($len/2)*$size);
}


/*- - - ����������Ѻ GD LIB - - -*/
function th2uni($sti) {

$th2unimap = array( 
'�' => "&#3585;", '�' => "&#3586;", '�' => "&#3587;", '�' => "&#3588;", '�' => "&#3589;", '�' => "&#3590;", '�' => "&#3591;",
'�' => "&#3592;", '�' => "&#3593;", '�' => "&#3594;", '�' => "&#3595;", '�' => "&#3596;", '�' => "&#3597;", '�' => "&#3598;",
'�' => "&#3599;", '�' => "&#3600;", '�' => "&#3601;", '�' => "&#3602;", '�' => "&#3603;", '�' => "&#3604;", '�' => "&#3605;",
'�' => "&#3606;", '�' => "&#3607;", '�' => "&#3608;", '�' => "&#3609;", '�' => "&#3610;", '�' => "&#3611;", '�' => "&#3612;",
'�' => "&#3613;", '�' => "&#3614;", '�' => "&#3615;", '�' => "&#3616;", '�' => "&#3617;", '�' => "&#3618;", '�' => "&#3619;",
'�' => "&#3620;", '�' => "&#3621;", '�' => "&#3622;", '�' => "&#3623;", '�' => "&#3624;", '�' => "&#3625;", '�' => "&#3626;",
'�' => "&#3627;", '�' => "&#3628;", '�' => "&#3629;", '�' => "&#3630;", '�' => "&#3631;", '�' => "&#3632;", '�' => "&#3633;",
'�' => "&#3634;", '�' => "&#3635;", '�' => "&#3636;", '�' => "&#3637;", '�' => "&#3638;", '�' => "&#3639;", '�' => "&#3640;",
'�' => "&#3641;", '�' => "&#3642;", '�' => "&#3647;", '�' => "&#3648;", '�' => "&#3649;", '�' => "&#3650;", '�' => "&#3651;",
'�' => "&#3652;", '�' => "&#3653;", '�' => "&#3654;", '�' => "&#3655;", '�' => "&#3656;", '�' => "&#3657;", '�' => "&#3658;",
'�' => "&#3659;", '�' => "&#3660;", '�' => "&#3661;", '�' => "&#3662;", '�' => "&#3663;", '�' => "&#3664;", '�' => "&#3665;",
'�' => "&#3666;", '�' => "&#3667;", '�' => "&#3668;", '�' => "&#3669;", '�' => "&#3670;", '�' => "&#3671;", '�' => "&#3672;",
'�' => "&#3673;", '�' => "&#3674;", '�' => "&#3675;");

    $sto = '';
    $len = strlen($sti);
    for ($i = 0; $i < $len; $i++) {
        if ($th2unimap[$sti{$i}])

            $sto .= $th2unimap[$sti{$i}];
        else
            $sto .= $sti{$i};
    }
    return $sto;
}
?>
<?php	
	 require ("../include/global_login.php");	 
	 include("../include/function.inc.php");
?>
<? 
if ($person["id"]!=""){ 
		//Courses_id
	$courseid=mysql_query("SELECT courses FROM wp WHERE modules=".$id.";");
	$courses=mysql_result($courseid,0,"courses");
	$sql=mysql_query("SELECT timeLimited,endview,view,randomize,matching,qLIMIT  FROM q_module_prefs  WHERE module_id=$id");
	$time=mysql_result($sql,0,'timeLimited');
	$endview=mysql_result($sql,0,'endview');
	$view=mysql_result($sql,0,'view');
	$randomized=mysql_result($sql,0,'randomize');
	$matching=mysql_result($sql,0,'matching');
	$qlimit=mysql_result($sql,0,'qLIMIT');
	if($occ == ""){
		//***********insert modules_history***************
		$action="Start";
		Imodules_h($id,$action,$person["id"],$courses);

		$d1=date('Y-m-d h:i:s');
		$in=mysql_query("INSERT INTO q_occasions (user_id,module_id,started_datetime) VALUES(".$person["id"].",".$id.",'".$d1."');");
		$occ=mysql_insert_id();
		$_q="yes";
		if($randomized==0)    //no random
		{
						//check user_mcit
						if($matching==0)		// no user matching
							{
									//get  q_id;
								 $quiz=mysql_query("SELECT question_id FROM q_modules_questions WHERE module_id=$id ORDER BY question_id ASC  limit $qlimit");
								$num_limit=mysql_num_rows($quiz);
										while($row=mysql_fetch_array($quiz)){
											$q_id[]=$row['question_id']; 
										}			
						}else{
								/*
								$sel=mysql_query("SELECT q.question_id FROM q_modules_questions m,q_questions q WHERE m.module_id=$id AND q.active=1 AND q.question_type='mcit' AND q.question_id=m.question_id  ORDER BY q.question_id ASC");
								$row_sel=mysql_fetch_array($sel);
								$limit=$qlimit-1;
								$quiz=mysql_query("SELECT  q.question_id FROM q_modules_questions m,q_questions q WHERE m.module_id=$id AND  q.question_type !='mcit' AND q.question_id=m.question_id ORDER BY q.question_id ASC  limit $limit ");
								$num_limit=$qlimit;
								$num_quiz=mysql_num_rows($quiz);
									while($row=mysql_fetch_array($quiz))
										{
											$q_id[]=$row['question_id'];
										}
								$q_id[$limit]=$row_sel['question_id'];
								*/
								$quiz=mysql_query("SELECT question_id FROM q_modules_questions WHERE module_id=$id ORDER BY question_id ASC  limit $qlimit");
								$num_limit=mysql_num_rows($quiz);
										while($row=mysql_fetch_array($quiz)){
											$q_id[]=$row['question_id']; 
										}
						}
		}else{   // random
						//check user_mcit
					if($matching==0)		// no user matching
						{
							//get  q_id;
							 $quiz=mysql_query("SELECT question_id FROM q_modules_questions WHERE module_id=$id ORDER BY rand()  limit $qlimit");
							$num_limit=mysql_num_rows($quiz);
									while($row=mysql_fetch_array($quiz)){
										$q_id[]=$row['question_id']; 
									}			
					}else{
						/*
						$sel=mysql_query("SELECT q.question_id FROM q_modules_questions m,q_questions q WHERE m.module_id=$id AND q.active=1 AND q.question_type='mcit' AND q.question_id=m.question_id  ORDER BY rand() limit 1");
						$row_sel=mysql_fetch_array($sel);
						$limit=$qlimit-1;
						$quiz=mysql_query("SELECT q.question_id FROM q_modules_questions m,q_questions q WHERE m.module_id=$id AND q.question_type !='mcit'  AND q.question_id=m.question_id ORDER BY rand()  DESC  limit $limit");
						$num_limit=$qlimit;
						 $num_quiz=mysql_num_rows($quiz);
								while($row=mysql_fetch_array($quiz))
									{
										 $q_id[]=$row['question_id'];
									}
						$q_id[$limit]=$row_sel['question_id'];
						*/
						//get  q_id;
						 $quiz=mysql_query("SELECT question_id FROM q_modules_questions WHERE module_id=$id ORDER BY rand()  limit $qlimit");
						$num_limit=mysql_num_rows($quiz);
								while($row=mysql_fetch_array($quiz)){
									$q_id[]=$row['question_id']; 
								}			
				}
		}
		//Create Ans
		for($a=0;$a<$num_limit;$a++)
		{
			$create_ans=mysql_query("INSERT INTO q_user_questions (question_id,occasion_id) VALUES (".$q_id[$a].",".$occ." );");
			//score question=mcit
			$q_mcit = mysql_query("SELECT question_id,score  FROM q_questions   WHERE question_id=".$q_id[$a]." AND question_type = 'mcit' ");
			if(mysql_num_rows($q_mcit) !=0){
				$q_mcit_id=mysql_result($q_mcit,0,'question_id');
				$q_mcit_score=mysql_result($q_mcit,0,'score');
				$num_mcit=mysql_num_rows(mysql_query("SELECT mcit_id FROM q_question_mcit  WHERE question_id=$q_mcit_id"));
					 $mcit_score[$a]=$q_mcit_score*$num_mcit;
			}
			$Cscore = mysql_query("SELECT sum(score) AS TotalScore FROM q_questions  WHERE question_id=".$q_id[$a]." AND question_type != 'mcit' ");

				if(mysql_num_rows($Cscore) !=0){
					$T_score[$a]=mysql_result($Cscore,0,'TotalScore');
					$Score =$Score+ $T_score[$a]+$mcit_score[$a];
			}
		}	//end for	
			//insert into q_occasions total_score
		 $num=mysql_num_rows(mysql_query("SELECT occasion_id  FROM q_occasions WHERE occasion_id=$occ AND total_score !=0 "));
			if($num==0)
				mysql_query("UPDATE q_occasions SET total_score=$Score WHERE occasion_id=$occ  ");
	}else{
			$occ=$occ;
			$_q="yes";
				if($submit=="submit"){
					$time=0;
					//***********insert modules_history***************
					$action="Submit";
					Imodules_h($id,$action,$person["id"],$courses);					
				}
		}
?>
<HTML><HEAD><TITLE>Vocational Education Commission e-Learning :: <?echo $person["title"].$person["firstname"]."  
".$person["surname"];?></TITLE>
<META content="text/html; charset=windows-874" http-equiv=Content-Type>
<META content="Maxlearn,course,VirtualClassroom,webcourse,การเรียนการสอน" 
name=Keywords>
<META content="Course on Web  , Virtual Classroom for supporting all course @ Faculty of Engineering , Kasetsart University "
name=Description>
</HEAD>
<FRAMESET border=0 cols=100% frameBorder=0 frameSpacing=0 rows=50,*>
	<FRAME frameBorder=0 marginHeight=1 marginWidth=1 name=main_time scrolling=no src="?a=timer&m=users&time=<? echo $time?>&id=<? echo $id ?>&occ=<? echo $occ?>&multiple=<? echo $multiple?>">
	<FRAME frameBorder=No marginHeight=1 marginWidth=1 name=main_main scrolling=auto src="?a=index_v&m=users&id=<? echo $id ?>&occ=<? echo $occ?>&submit=<? echo $submit ?>&multiple=<? echo $multiple?>&h_qid=<? echo $_q ?>&endview=<? echo $endview?>&view=<? echo $view?>&check=<? echo $check_ans ?>">
</FRAMESET>
</frameset><noframes></noframes></HTML>
<?
}else{
//		print($slogin."hey");
        header("Status: 302 Moved Temporarily");
        header("Location: login/ilogins.php");
}
?>

 <?
require("../include/global_login.php");
require("header.php");

 //=================QUERY=================
 if ($id!=""){
	$modules = $id;
}

//if($submit=="submit")
//	redirect("stat.php?modules=".$modules."&multiple=".$multiple."&occ=".$occ."&check=".$check);

function NewOcc($m){
	global $person;
    $d1=date('Y-m-d h:i:s');
    $in=mysql_query("INSERT INTO q_occasions (user_id,module_id,started_datetime) VALUES(".$person["id"].",".$m.",'".$d1."');");
	return mysql_insert_id();
}

//---------------getquiz_name
$getname = mysql_query("SELECT qp.info, m.name FROM q_module_prefs qp, modules m WHERE qp.module_id=$modules AND m.id=$modules;");
		$name = mysql_result($getname,0,"name");
		$info = str_replace("\n","<br>",mysql_result($getname,0,"info"));

//************************************************************************
//* Check if it's possible to take this quiz many times,if it should
//* be randomized and get the bgcolor
//************************************************************************
$CheckIfMany = mysql_query("SELECT multiple,bgcolor,randomize,quiztype,qlimit,matching,view,endview FROM q_module_prefs WHERE module_id=".$modules.";");
$row=mysql_fetch_array($CheckIfMany);
$multiple = $row["multiple"]; //0=false
$bgcolor = $row["bgcolor"];
$randomized = $row["randomize"];//0=false
$quiztype=$row["quiztype"];
$qlimit=$row["qlimit"];
$matching=$row["matching"];
$view=$row["view"];
$endview=$row["endview"];
	//Check if the background colour is set in the Db
if ($bgcolor==""){
	$bgcolor="white";
}
// Check if user had already finished quiz.
if($h_qid == "yes"){  // if occasions !=""
	if($ans==""){  // if  Answer==""
		$check_finished=mysql_query("SELECT * FROM q_occasions WHERE module_id=$modules AND finished =0 AND user_id=".$person['id']."");  //No Update
		if(mysql_num_rows($check_finished)!=0){
			$sel_ans=mysql_query("SELECT question_id,user_question_id  FROM q_user_questions WHERE occasion_id =$occ;");
			$num_limit=mysql_num_rows($sel_ans);
			while($row=mysql_fetch_array($sel_ans)){
				$q_id[]=$row['question_id'];
				$user_qid[]=$row['user_question_id'];
			}
		}else{
		//	redirect("stat.php?modules=".$modules."&multiple".$multiple);
		//	exit;
		}
	}else{   //if Answer !==""
		$sql=mysql_query("SELECT score,question_type  FROM q_questions WHERE question_id  = $quiz_id");
			$q_score=mysql_result($sql,0,"score");
			$question_type=mysql_result($sql,0,"question_type");
		$sel_ans=mysql_query("SELECT question_id  FROM q_user_questions WHERE occasion_id =$occ;");
		$num_limit=mysql_num_rows($sel_ans);
			while($row=mysql_fetch_array($sel_ans)){
				$q_id[]=$row['question_id'];
			}	

		$sel_ques_id=mysql_query("SELECT user_question_id FROM q_user_questions WHERE question_id=$quiz_id AND occasion_id =$occ");
		 $user_qid=mysql_result($sel_ques_id,0,"user_question_id");

		if($question_type=="mltc" || $question_type=="tnf" ){
				if($view_ans=="yes"){
					$sql_sel=mysql_query("SELECT a.user_answer FROM q_user_answer a,q_user_questions q WHERE  q.occasion_id=$occ  AND q.question_id=$quiz_id AND a.user_question_id=q.user_question_id ");
					$check_num_ans=mysql_num_rows($sql_sel);
					//INSERT Answer
					if($check_num_ans ==""){
						for($i=0;$i<$count;$i++){
							if($alt_id[$i] != "")
								$insert_ans=mysql_query("INSERT INTO  q_user_answer (user_question_id,user_answer) VALUES ($user_qid,$alt_id[$i])");
						}
					}
				}else{
					//DELETE Answer
					for($i=0;$i<$count;$i++){
						$del_ans=mysql_query("DELETE FROM q_user_answer WHERE user_question_id=$user_qid");
					}
					//INSERT Answer
					for($i=0;$i<$count;$i++){
						if($alt_id[$i] != "")
							$insert_ans=mysql_query("INSERT INTO  q_user_answer (user_question_id,user_answer) VALUES ($user_qid,$alt_id[$i])");
					}
				}
		}//end if question_type =mltc and tnf 
		else if($question_type=="fib"){
				if($view_ans=="yes"){
					$sql_sel=mysql_query("SELECT a.user_answer FROM q_user_answer a,q_user_questions q WHERE  q.occasion_id=$occ  AND q.question_id=$quiz_id AND a.user_question_id=q.user_question_id ");		
					if(mysql_num_rows($sql_sel) ==""){
						//Insert into tb q_user_answer
						$insert_ans=mysql_query("INSERT INTO  q_user_answer (user_question_id,user_answer) VALUES($user_qid,'".$answer."')"); 
					}
				}else{
					$sql=mysql_query("SELECT user_answer_id FROM q_user_answer WHERE user_question_id=$user_qid ");
					if(mysql_num_rows($sql) ==""){
							//Insert into tb q_user_answer
							$insert_ans=mysql_query("INSERT INTO  q_user_answer (user_question_id,user_answer) VALUES($user_qid,'".$answer."')"); 
					}else{
							//Update tb q_user_answer
							$update_ans=mysql_query("UPDATE q_user_answer SET user_answer='$answer'  WHERE user_question_id=$user_qid ");
					}				
				}
		}//end if question_type =fib
		else if($question_type=="mcit"){
				if($view_ans=="yes"){
					$sql_sel=mysql_query("SELECT a.user_answer FROM q_user_answer a,q_user_questions q WHERE  q.occasion_id=$occ  AND q.question_id=$quiz_id AND a.user_question_id=q.user_question_id ORDER BY a.mcit_id ASC");	
				//	echo "SELECT a.user_answer FROM q_user_answer a,q_user_questions q WHERE  q.occasion_id=$occ  AND q.question_id=$quiz_id AND a.user_question_id=q.user_question_id ORDER BY a.mcit_id ASC";
					if(mysql_num_rows($sql_sel) ==""){	
						//INSERT Answer
						for($i=0;$i<$count;$i++){
							if($text[$i] != "")
								$insert_ans=mysql_query("INSERT INTO  q_user_answer (user_question_id,user_answer,mcit_id) VALUES ($user_qid,'".$text[$i]."',$hid[$i] )");
						}
					}
				}else{
					//DELETE Answer
					for($i=0;$i<$count;$i++){
						$del_ans=mysql_query("DELETE FROM q_user_answer WHERE mcit_id=$hid[$i] AND user_question_id=$user_qid ");
					}
					//INSERT Answer
					for($i=0;$i<$count;$i++){
						if($text[$i] != "")
							$insert_ans=mysql_query("INSERT INTO  q_user_answer (user_question_id,user_answer,mcit_id) VALUES ($user_qid,'".$text[$i]."',$hid[$i] )");
					}					
				}
		}//end if question_type =mcit

		if($view_ans=="yes"){
			$sql1=mysql_query("SELECT a.user_answer FROM q_user_answer a,q_user_questions q WHERE  q.occasion_id=$occ  AND q.question_id=$quiz_id AND a.user_question_id=q.user_question_id ");
			$sql2=mysql_query("SELECT answer_id,answer_des FROM q_answers WHERE question_id=$quiz_id AND correct=1");	
			if($question_type== mltc || $question_type == tnf  ){
							$num_sql1=mysql_num_rows($sql1);
								while($row1=mysql_fetch_array($sql1)){
									 $user_ans[]=$row1['user_answer'];
								 }
							$num_sql2=mysql_num_rows($sql2);
								while($row2=mysql_fetch_array($sql2)){
									 $ans_cor[]=$row2['answer_id'];
								}
							$n=0;
							if($num_sql1==$num_sql2){
								for($ii=0;$ii<$num_sql1;$ii++){
									for($iii=0;$iii<$num_sql2;$iii++){
										if($user_ans[$ii]== $ans_cor[$iii]){
										  $n=$n+1;
										}
									}
								}
								if($n==$num_sql2){
									 $score=$q_score;
								}else{
									 $score=0.00;
								}
							} //end if
							else{
								$score=0.00;
							}
					$sql_sel=mysql_query("SELECT user_score_id FROM  q_user_scores WHERE question_id=$quiz_id AND occasion_id=$occ");
					$check_num_score=mysql_num_rows($sql_sel);
					if($check_num_score ==""){
						//Insert tb q_user_scores
						$sql_score=mysql_query("INSERT INTO q_user_scores (question_id,occasion_id,user_score,question_score) VALUES ($quiz_id,$occ,$score,$q_score)");
						$score_id=mysql_insert_id();

						$sql=mysql_query("SELECT user_score FROM q_user_scores WHERE user_score_id=$score_id ");
						$score=mysql_result($sql,0,"user_score");
					}
				}/* end if mltc and fnf */ else if($question_type== fib){
					$user_ans=mysql_result($sql1,0,"user_answer");
					$ans_cor=mysql_result($sql2,0,"answer_des");
						if($user_ans==$ans_cor)
							 $score=$q_score;
						else
							$score=0.00;
					$sql_sel=mysql_query("SELECT user_score_id FROM  q_user_scores WHERE question_id=$quiz_id AND occasion_id=$occ");
					$check_num_score=mysql_num_rows($sql_sel);
					if($check_num_score ==""){
						//Insert tb q_user_scores
						$sql_score=mysql_query("INSERT INTO q_user_scores (question_id,occasion_id,user_score,question_score) VALUES ($quiz_id,$occ,$score,$q_score)");	
						$score_id=mysql_insert_id();

						$sql=mysql_query("SELECT user_score FROM q_user_scores WHERE user_score_id=$score_id ");
						$score=mysql_result($sql,0,"user_score");
					}
			}/* end if fib */else if($question_type == mcit){
				/*
				$score=0;
				$Tscore=0;
					$sql=mysql_query("SELECT mcit_id,correct FROM q_question_mcit WHERE question_id=$quiz_id ORDER BY mcit_id ASC ");
					 $num=mysql_num_rows($sql);
					while($row=mysql_fetch_array($sql)){
						$mcit_id[]=$row['mcit_id'];
						$correct[]=$row['correct'];
					}
					$sql_check=mysql_query("SELECT a.user_answer,a.mcit_id FROM q_user_answer a,q_user_questions q WHERE  q.occasion_id=$occ  AND q.question_id=$quiz_id AND a.user_question_id=q.user_question_id ORDER BY a.mcit_id ASC ");
					while($row_check=mysql_fetch_array($sql_check)){
						$mcit_ans_id[]=$row_check['mcit_id'];
						$answer[]=$row_check['user_answer'];
					}
					$Correct=0;
					$Wrong=0;
					for($ii=0;$ii<$num;$ii++){
						if($mcit_id[$ii]==$mcit_ans_id[$ii]){
							if($correct[$ii]==$answer[$ii]){
								$score=$q_score;
								$Correct=$Correct+1;
							}else{
								$score=0.00;
								$Wrong=$Wrong+1;
							}
						 $Tscore=$Tscore+$score;
						}
					}
					$Tscore_cor=$q_score * $num ;
					$sql_sel=mysql_query("SELECT user_score_id FROM  q_user_scores WHERE question_id=$quiz_id AND occasion_id=$occ");
					$check_num_score=mysql_num_rows($sql_sel);
					if($check_num_score ==""){
						$sql_score=mysql_query("INSERT INTO q_user_scores (question_id,occasion_id,user_score,question_score) VALUES ($quiz_id,$occ,$Tscore,$Tscore_cor)");	
						$score_id=mysql_insert_id();
					//	$sql=mysql_query("SELECT user_score FROM q_user_scores WHERE user_score_id=$score_id ");
					//	$score=mysql_result($sql,0,"user_score");
					}
				*/
			}/* end if mcit */
			} /* end view_ans==yes */
			// View Solution
			if($view==1){
					$sql_sol=mysql_query("SELECT solution  FROM q_questions  WHERE question_id = $quiz_id ");
					$solution=mysql_result($sql_sol,0,"solution");
						if($solution=="")
							$solution="-";
						else
							$solution=$solution;
			}
			//View Answer Correct
			if($endview==2){
				if($question_type=="mltc" || $question_type=="tnf" ){
					 $sql_ans=mysql_query("SELECT answer_des as answers,answer_file FROM q_answers WHERE question_id=$quiz_id AND correct=1 AND active=1");
					 $num_ans=mysql_num_rows($sql_ans);
								while($answer_row=mysql_fetch_array($sql_ans)){
									 $cor_answer[]= $answer_row["answers"];
									 $file_ans[]= $answer_row["answer_file"];
								}
				}else if($question_type=="fib" ){
					$sql_ans=mysql_query("SELECT answer_des as answers FROM q_answers WHERE question_id=$quiz_id");
					$num_ans=mysql_num_rows($sql_ans);
						while($answer_row=mysql_fetch_array($sql_ans)){
							 $cor_answer[]= $answer_row["answers"];
						}
				}else if($question_type=="mcit"){
					$sql_ans=mysql_query("SELECT q.mcit_des,q.correct,q.attached_file as q_file,a.mcit_ans_des,a.attached_file as a_file FROM q_question_mcit q , q_answer_mcit a  WHERE q.question_id=$quiz_id AND q.question_id=a.question_id AND q.correct=a.mcit_ans_choice ORDER BY q.mcit_id ASC");
					$num_ans=mysql_num_rows($sql_ans);
						while($answer_row=mysql_fetch_array($sql_ans)){
							 $cor_answer[]= $answer_row["mcit_des"];
							 $correct[]= $answer_row["correct"];
							 $file_ans[]= $answer_row["q_file"];
							 $mcit_ans_des[]= $answer_row["mcit_ans_des"];
							 $mcit_ans_file[]= $answer_row["a_file"];
						}
				}
			}	
	} // end Answer !=""
}

//Check questions==answer ?
$sql="SELECT DISTINCT a.user_question_id FROM q_user_answer a,q_user_questions q WHERE q.occasion_id=$occ   AND a.user_question_id=q.user_question_id";
 $num_ans1=mysql_num_rows(mysql_query($sql));
//

if($quiz_id !=""){
	$GetQ=mysql_query("SELECT question, question_type, matching_grp_no,attached_file,comment  FROM q_questions WHERE question_id=$quiz_id;");
	$question=mysql_result($GetQ,0,"question");
	$comment=mysql_result($GetQ,0,"comment");
	$question_type=mysql_result($GetQ,0,"question_type");
	//$grp_no=mysql_result($GetQ,0,"matching_grp_no");
	$attached_file=mysql_result($GetQ,0,"attached_file");
	$CheckDisplayType = mysql_query("SELECT oneOrMany,validation,quiztype,bgcolor FROM q_module_prefs WHERE module_id=$modules;");
	if($display_row=mysql_fetch_array($CheckDisplayType)){
		$oneOrMany=$display_row["oneOrMany"];
		$validation=$display_row["validation"];
		$quiztype=$display_row["quiztype"];
		$bgcolor=$display_row["bgcolor"];
		if($oneOrMany==1){
			$countCorrect = mysql_query("SELECT count(correct) AS corrCount FROM q_answers WHERE correct = 1 AND question_id=$quiz_id AND active=1;");
			if($corr_row=mysql_fetch_array($countCorrect)){
				if($corr_row["corrCount"] >1){
					$displaytype = "checkbox";
				}else{
					$displaytype = "radio";
				}
			}
		}else{
			$displaytype = "checkbox";
		}
	}else{
		$displaytype = "checkbox";
	}
//File Siz _Question
	if($attached_file !=""){
		list($twidth, $theight, $ttype, $tattr) = getimagesize("./files/$attached_file");
				if($theight >80){
						$twidth= $twidth * 300 / $theight;
						$theight= 300;
				}
		}		 
//mltc		
//check ����ա�õͺ���ѧ
	$sql=mysql_query("SELECT user_score_id  FROM q_user_scores WHERE question_id=$quiz_id AND occasion_id=$occ ");
	$num_rows=mysql_num_rows($sql);
	if ($question_type=="mltc" || $question_type=="tnf")    {

		   $alt = mysql_query("SELECT answer_id as id,answer_des as answers,answer_file as files FROM q_answers WHERE question_id=$quiz_id AND active=1;");
		   $num_alt= mysql_num_rows($alt);
		   while($alt_row=mysql_fetch_array($alt)){
				$ans_id[]=$alt_row["id"];
				$ans_name[]=$alt_row["answers"];
				$ans_file[]=$alt_row["files"];
		   }
		 $check_answer=mysql_query("SELECT a.user_answer FROM q_user_answer a,q_user_questions q WHERE q.question_id=$quiz_id AND q.user_question_id=a.user_question_id AND q.occasion_id=$occ");
		$num_ans2=mysql_num_rows($check_answer);
		 while($row=mysql_fetch_array($check_answer)){
			  $ans_id_c[]=$row['user_answer'];
		 }
		$check=array();
		 for($i=0;$i<$num_alt;$i++){
			for($ii=0;$ii<$num_ans2;$ii++){
				if($ans_id[$i]==$ans_id_c[$ii]){
					$check[$i]=1;
				}
			}
		 }
	}// end if question_type=mltc and tnf
		else if($question_type=="fib"){
			$check_answer = mysql_query("SELECT a.user_answer FROM q_user_answer a,q_user_questions q WHERE q.question_id=$quiz_id AND q.user_question_id=a.user_question_id AND q.occasion_id=$occ");
			if(mysql_num_rows($check_answer) != "")
				$ans_name=mysql_result($check_answer,0,"user_answer");
		}// end if question_type=fib
		else if($question_type=="mcit"){
			$sel_q=mysql_query("SELECT * FROM q_question_mcit  WHERE question_id=$quiz_id ORDER BY `mcit_id` ASC ");
			$num_q=mysql_num_rows($sel_q);
			while($row_q=mysql_fetch_array($sel_q)){
				$mcit_id[]=$row_q["mcit_id"];
				$mcit_des[]=$row_q["mcit_des"];
				$correct[]=$row_q["correct"];
				$mcit_file[]=$row_q["attached_file"];
				$sql_ans=mysql_query("SELECT a.user_answer FROM q_user_answer a,q_user_questions q WHERE a.mcit_id=".$row_q["mcit_id"] ." AND  q.user_question_id=a.user_question_id AND q.occasion_id=$occ   ");
						$row_ans=mysql_fetch_array($sql_ans);
						$mcit_ans[]=$row_ans['user_answer'];
			}
			$sel_a=mysql_query("SELECT * FROM q_answer_mcit WHERE question_id=$quiz_id  ORDER BY mcit_ans_id ASC");
			$num_a=mysql_num_rows($sel_a);
			while($row_a=mysql_fetch_array($sel_a)){
				$mcit_ans_id[]=$row_a["mcit_ans_id"];
				$mcit_ans_des[]=$row_a["mcit_ans_des"];
				$mcit_ans_choice[]=$row_a["mcit_ans_choice"];
				$mcit_ans_file[]=$row_a["attached_file"];
			}
		}// end if question_type=mcit
}

mysql_close($conn);
 //=========================================
 //==============TEMPLATE=================
 $template= new Template(C_SKIN);	
$template->set_filenames(array('body' => 'main_menu_s.html',
																'main' =>'text_detail.html',
																));
$template->assign_vars(array('TEXT' =>"Welcome to Online Quiz" ,
															'SEND'=>"<input type=submit name=send value=".$strQuiz_LabSubmitAll." class=button>",
																	'QUESTION'=>$question,
																	'MULTI'=>$multiple,
																	'PIC_QUE'=>"<img src=./files/$attached_file width=$twidth height=$theight border=0>" ,
																	 'Q_INFO'=>$info,
																	 'Q_NAME'=>$name,
																	 'MODULE'=>$modules,
																	 'OCC'=>$occ,
																	 'BG' =>$bgcolor ,
																	 'Q_TYPE'=>$question_type,
																	'Q_VALI'=>$validation,
																	'Q_ID'=>$quiz_id,
																	'Q_LIMIT'=>$num_limit,
																	'NUM_ANS'=>$num_ans1,
																	'COMMENT'=>$comment,
																	'TSCORE'=>$T_score,
																	'H_QID'=>$h_qid,
																	'PATH'=>"index_v",
																	'CHECK'=>($endview==2)?"&view_ans=yes":"&view_ans=no",
																	'JAVA'=>($num_rows == "")?"onSubmit=\"return verify('$question_type',this,'$validation');\"":"",
																	'SUBMIT'=>$strQuiz_LabSubmitAns,
																	'Quiz'=>$strQuiz_LabQuiz,
																	'Answer'=>$strQuiz_LabAnswer,
																	'AnswerCorrect'=>$strQuiz_LabAnsCorrect,
																	'Question'=>$Eval_Num,
																	'Num'=>$Eval_Num.$cnt,
																	));
if($endview==2){
	$template->assign_vars(array('IS_DISABLED'=>($num_rows != "")?'disabled':"",
																	'VIEW_PRO'=>($num_rows != "")?"<input type=submit name=view value=\"View Problem\" class=button>":"", 
																));
}
for ($i=0;$i<$num_limit;$i++){	
	$num=$i+1;
	$template->assign_block_vars('quizlist', array(
																	'Q_LIST'	=>$Eval_Num."  $num",
																	'Q_ID'=>$q_id[$i],
																	'NUM'=>$num,
																));
}
if($view_ans=="yes"){
			//if($endview==2){
				$template->set_filenames(array('main' => 'quiz_sol.html',));
					$template->assign_block_vars('ans_list', array());
					for($y=0;$y<$num_ans;$y++){
							if($file_ans[$y] !=""){
								list($twidth, $theight, $ttype, $tattr) = getimagesize("./files/$file_ans[$y]");
													if($theight >80){
															$twidth= $twidth * 85 / $theight;
															$theight= 75;
													}
								}	
							if($mcit_ans_file[$y] !=""){
								list($twidth, $theight, $ttype, $tattr) = getimagesize("./files/$mcit_ans_file[$y]");
													if($theight >80){
															$twidth= $twidth * 85 / $theight;
															$theight= 75;
													}
								}	
							$template->assign_block_vars('ans_list.ans', array(																
																		'COR_DES'=>$cor_answer[$y],
																		'COR_PIC'=>($file_ans[$y] !="")?"<img src=./files/$file_ans[$y] width=$twidth height=$theight border=0>":"" ,													
																		'MCIT_DES'=>$mcit_ans_des[$y],
																		'MCIT_COR'=>"$correct[$y].",
																		'MCIT_PIC'=>($mcit_ans_file[$y] !="")?"<img src=./files/$mcit_ans_file[$y] width=$twidth height=$theight border=0>":"" ,	
																	));
					}
		//	}
			if($question_type==mltc || $question_type==tnf || $question_type==fib){
				$template->assign_vars(array('MANG'=>($score==0)?"$strQuiz_LabQuizWrong":"$strQuiz_LabQuizCorrect",));
			}else{
				$template->assign_vars(array('MANG'=>"Your answer :  $Correct answer all  correct  ",));
			}
				$template->assign_vars(array(
																	'SOL'=>($view==1)?" <table width=98%  border=0 cellspacing=0 cellpadding=0 ><tr><td height=19 class=Tmenu><b>$strQuiz_LabSolution</b></td></tr></table><table width=98%  border=0 cellspacing=1 cellpadding=0 class=tdborder1> <tr><td><table width=100%  border=0 cellspacing=0 cellpadding=0 bgcolor= $bgcolor><tr><td width=7% height=17  align=center>&nbsp;</td><td width=88% >$solution</td><td width=7%  align=center>&nbsp;</td> </tr></table></td></tr></table>":"",
																));
$template->assign_var_from_handle('MAIN', 'main');
} if($view_ans=="no") {
	$template->set_filenames(array('main' => 'quiz_sol.html',));
	$template->assign_vars(array('MANG'=>"$strQuiz_LabQuestionSend",));
	$template->assign_var_from_handle('MAIN', 'main');
}else {
	if($question_type==mltc || $question_type==tnf){
			if($question_type==mltc)
				$template->set_filenames(array('main' => 'quiz_mltc.html',));
			else
				$template->set_filenames(array('main' =>'quiz_tnf.html',));
		$template->assign_vars(array(
																	'SEL'=>$displaytype ,
																	'NUM'=>$num_alt,
																	));
		for($i=0;$i<$num_alt;$i++){
			//File Siz _Answer
		if($ans_file[$i] !=""){
			list($twidth, $theight, $ttype, $tattr) = getimagesize("./files/$ans_file[$i]");
								if($theight >80){
										$twidth= $twidth * 150 / $theight;
										$theight= 150;
								}
						}	
			$template->assign_block_vars('anslist', array(
																		'PIC_ANS'=>($ans_file[$i] !="")?"<img src=./files/$ans_file[$i] width=$twidth height=$theight border=0>":"" ,
																		'ANS_ID'	=>$ans_id[$i],
																		'ANS_NAME'=>$ans_name[$i],
																		'NUM'=>$i+1,
																		'IS_CHECK'=>($check[$i]==1)?'checked' : '',
																	));
		}
		$template->assign_var_from_handle('MAIN', 'main');
}else if($question_type==fib){
		$template->set_filenames(array('main' => 'quiz_fib.html',));
		$template->assign_vars(array('ANS' =>$ans_name ,
			));
		$template->assign_var_from_handle('MAIN', 'main');
}else if($question_type==mcit){
		$template->set_filenames(array('main' => 'quiz_mcit.html',));
		$template->assign_vars(array(
																	'COUNT'=>$num_q ,
																	));
		//list question
		for($i=0;$i<$num_q;$i++){
			$num=$i+1;
				if($mcit_file[$i] !=""){
				list($twidth, $theight, $ttype, $tattr) = getimagesize("./files/$mcit_file[$i]");
								if($theight >80){
										$twidth= $twidth * 150 / $theight;
										$theight= 150;
								}
					}
			$template->assign_block_vars('queslist', array(
																		'PIC_QUES'=>($mcit_file[$i] !="")?"<img src=./files/$mcit_file[$i] width=$twidth height=$theight border=0>":"" ,
																		'MCIT_ID'	=>$mcit_id[$i],
																		'MCIT_DES'=>$mcit_des[$i],
																		'MCIT_ANS'=>$mcit_ans[$i],
																		'NUM'=>$num,
																		'BR'=>($mcit_file[$i] !="")?"&nbsp;":"",
																		'COUNT'=>$i,
																	));				
		}

		//list answer
		for($ii=0;$ii<$num_a;$ii++){
			$num=$ii+1;
				if($mcit_ans_file[$ii] !=""){
				list($twidth, $theight, $ttype, $tattr) = getimagesize("./files/$mcit_ans_file[$ii]");
								if($theight >80){
										$twidth= $twidth * 150 / $theight;
										$theight= 150;
								}
					}
			$template->assign_block_vars('anslist', array(
																		'PIC_ANS'=>($mcit_ans_file[$ii] !="")?"<img src=./files/$mcit_ans_file[$ii] width=$twidth height=$theight border=0><br>":"" ,
																		'MCIT_ANS_ID'	=>$mcit_ans_id[$ii],
																		'MCIT_ANS_DES'=>$mcit_ans_des[$ii],
																		'MCIT_ANS_CHOICE'=>$mcit_ans_choice[$ii],
																		'NUM'=>$num,
																		'BR'=>($mcit_ans_file[$ii] !="")?"&nbsp;":"",
																	));				
		}
		
		$template->assign_var_from_handle('MAIN', 'main');
}
}
$template->assign_var_from_handle('MAIN', 'main');
//$template->assign_var_from_handle('MENU', 'meun');
$template->pparse('body');
 //=========================================
 ?>
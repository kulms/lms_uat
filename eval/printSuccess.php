<? 
		require("../include/global_login.php");
		include("./include/var.inc.php");
		include('include/config.inc.php');
		require("include/eval.class.php");
//-----------------------------------------Template--------------------------------------------------------------------
 $template= new Template(C_SKIN);
 if($survey==1){   
 	$template->set_filenames(array('body' =>'sentSurvey.html',      
										)); 
	$template->assign_vars(array('HEADER'=>"Congratulation",
														  'BODY'=>"�к�����Ẻ���Ǩ�ͧ�س��ѧ�Ҩ�����Ш��Ԫ����º��������",
														  'BACK'=>"<input type=\"button\" name=\"back\" value=\"$strBack\" class=\"button\" onClick=\"javascript: window.location='s_index2.php?m_id=$m_id';\">",
														  'THEME_NAME'=>$theme,
												));
												
 }else if($msg==1){   //  sent Msg success   FOR  Teacher
  	$template->set_filenames(array('body' =>'sentSurvey.html',      
										)); 
	$template->assign_vars(array('HEADER'=>"Sent Completed",
														  'BODY'=>"�к����觢�ͤ������º��������",
														  'BACK'=>"<input type=\"button\" name=\"back\" value=\"$strBack\" class=\"button\" onClick=\"javascript: window.location='t_index2.php';\">",
														  'THEME_NAME'=>$theme,
												));

}else {
$template->set_filenames(array('body' =>'sentSurvey.html',      
										)); 
				$template->assign_vars(array('HEADER'=>"Congratulation",
																	  'BODY'=>"�к����觼š�û����Թ�ͧ�س��ѧ�Ҩ�����Ш��Ԫ����º��������",
																	  'BACK'=>"<input type=\"button\" name=\"back\" value=\"$strBack\" class=\"button\" onClick=\"javascript: window.location='s_index.php';\">",
																	  'THEME_NAME'=>$theme,
																	//  'MID'=>$m_id,
															));
}
										
$template->pparse('body');							

?>
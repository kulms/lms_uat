<? 
session_start();
		require("../include/global_login.php");
		include("./include/var.inc.php");
		include('include/config.inc.php');
		require("include/eval.class.php");

//-----------------------------------------Template--------------------------------------------------------------------
 $template= new Template(C_SKIN);
$template->set_filenames(array('body' =>'deadline.html',
										));   
//echo $eval_type; break;
				$template->assign_vars(array('THEME_NAME'=>$theme,
																		'COS'=>$course,
																		'HEAD'=>"Sorry!!!",
																		'DETAIL'=>($eval_type==1)?"��й����Դ�Ѻ��÷�Ẻ�ͺ�������":"��й����Դ�Ѻ��÷�Ẻ���Ǩ������¹���  (Perceptual Learning Style Preference Survey ) �ͧ���Ե����",
									     ));

$template->pparse('body');							
?>

<?php
/* $Id: thai.inc.php,v 1.146 2002/06/19 00:18:17 lem9 Exp $ */


/**
 * Translated on 2002/04/29 by: Arthit Suriyawongkul & Warit Wanasathian
 * Revised on 2002/06/18 by: Arthit Suriyawongkul
 */

// note: Thai has 2 standard encodings (tis-620, iso-8859-11)
// tis-620 is the only Thai encoding that registered with IANA,
// it used in MIME text/* media type.
$charset = 'tis-620';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('亵�', '����亵�', '�����亵�', '�ԡ�亵�');

$day_of_week = array('�ҷԵ��', '�ѹ���', '�ѧ���', '�ظ', '����ʺ��', '�ء��', '�����');
$month = array('�.�.', '�.�.', '��.�.', '��.�.', '�.�.', '��.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y  %R �.';
//------------------    For Common Feather -----------------------------------

$strAdd="����";
$strBack="��͹��Ѻ";
$strEdit="���";
$strDelete="ź";
$strDeletePic="ź�Ҿ��Сͺ";
$strNext="�Ѵ�";
$strPrevious="��͹˹��";
$strBack="��͹��Ѻ";
$strSubmit="�׹�ѹ";
$strCreate="���ҧ";
$strReset="��駤������";
$strCancel="¡��ԡ";
$strUpdate="��Ѻ��ا";
$strShow="�ʴ�";
$strSave="�ѹ�֡";
$strSearch="����";
$strView="��";
$strResult="�š�÷ӧҹ";
$strLink="������§";
$strSend="��";
$strClose="�Դ";
$strActive = "��ҹ";
$strDisable = "�Դ�����ҹ";
$strClick = "����";
$strSet = "��駤��";
$strYes = "��";
$strNo = "���";
$strRemove = "���͡";
$strAction = "��кǹ���";
$strPage = "˹�ҷ��";

//-----------------------------------------------------------------------------------------

//-------------------------  For Each Modules ------------------------------------

//-------------------------  Top Frame ---------------------------------------------
$strTop_MenuStart = "˹���á";
$strTop_MenuPersonal = "�����źؤ��";
$strTop_MenuCourses = "����������Ԫ�";
$strTop_MenuSystem = "�������к�";
$strTop_LabUser = "����颳й�� : ";
$strTop_LabLogout = "�͡�ҡ�к�";

//-------------------------  Start Page ---------------------------------------------
$strStart_MenuECourse = "�ع��������觤�������ҧ";
$strStart_MenuStat = "ʶԵԡ����ҹ����Ԫ�";
$strStart_Header = "˹���á";
$strStart_LabManual = "�����͡����ҹ";
$strStart_LabForum = "��дҹ��Ի���";
$strStart_LabHomework = "�к��觡�ú�ҹ";
$strStart_LabQuiz = "Ẻ���ͺ���Ẻ���Ǩ";
$strStart_LabResources = "���觢�����";
$strStart_LabSyllabus = "Ἱ������¹";
$strStart_LabWebboard = "��дҹ����";
$strStart_LabAll = "�����ͷ�����";
$strStart_LabMaxWebboard = "��дҹ���� M@xLearn";
$strStart_LabRecommend = "Webboard ����Ѻ�����§ҹ��ͼԴ��Ҵ ����йӢ�͡����ҹ�к�ʹѺʹع������¹����͹��ҹ���";

//-------------------------  Personal ---------------------------------------------
$strPersonal_MenuCalendar = "��ԷԹ��ǹ�ؤ��";
$strPersonal_BtnEditPersonal = $strEdit." ��������ǹ�ؤ��";
$strPersonal_Header = "��������ǹ�ؤ��";
$strPersonal_LabUserHeader = "��������ǹ�ؤ��";
$strPersonal_LabTitleTh = "�ӹ�˹�Ҫ��� (��)";
$strPersonal_LabTitleEng = "�ӹ�˹�Ҫ��� (�ѧ���)";
$strPersonal_LabNameTh = "���� (��)";
$strPersonal_LabNameEng = "���� (�ѧ���)";
$strPersonal_LabSurNameTh = "���ʡ�� (��)";
$strPersonal_LabSurNameEng = "���ʡ�� (�ѧ���)";
$strPersonal_LabNameSurNameTh = "����-���ʡ�� (��)";
$strPersonal_LabNameSurNameEng = "����-���ʡ�� (�ѧ���)";
$strPersonal_LabTeacherCode = "�����Ҩ����";
$strPersonal_LabUserName = "���ʼ����";
$strPersonal_LabChangePassword = "����¹���ʼ�ҹ";
$strPersonal_LabPassword = "���ʼ�ҹ";
$strPersonal_LabFac = "���";
$strPersonal_LabDep = "�Ҥ�Ԫ�";
$strPersonal_LabEmail = "�������";
$strPersonal_LabOtherEmail = "���������� �";
$strPersonal_LabHomepage = "���ྨ";
$strPersonal_LabPicture = "�ٻ�Ҿ";
$strPersonal_LabIcq = "�ͫդ��";
$strPersonal_LabSkill = "������Ѵ / ����ʹ� ";
$strPersonal_LabOfficeHeader = "ʶҹ���Դ��ͷ��ӧҹ";
$strPersonal_LabOfficeOutHeader = "ʶҹ���Դ��͹͡���ӧҹ";
$strPersonal_LabHomeHeader = "ʶҹ���Դ��ͷ��ѡ";
$strPersonal_LabBuilding = "�֡";
$strPersonal_LabRoom = "��ͧ";
$strPersonal_LabIntPhone = "��������";
$strPersonal_LabAddress = "�������";
$strPersonal_LabTelephone = "����Դ���";
$strPersonal_LabMobile = "��Ͷ��";
$strPersonal_LabLanguage = "����";
$strPersonal_LabPostalAddress = "�������";
$strPersonal_LabIDCode = "���ʻ�Шӵ��";
$strPersonal_LabIDCodeError = "��͡���ʻ�Шӵ�� �繵���Ţ��ҹ��";
$strPersonal_LabLastLogin = "��ҹ�����ش����";
$strPersonal_LabNeverLogin = "�ѧ������������к�";

//-------------------------------  Calendar  -------------------------------------------
  //$strCaledarAbc="���á�����";
$strCalendar_LabShare="��ԷԹ����";
$strCalendar_LabThisMonth="��ԷԹ��͹���";
$strCalendar_LabSelectYear="���͡��";
$strCalendar_LabSelectMonth="���͡��͹";
$strCalendar_LabSelectUser="���͡�����";
$strCalendar_LabViewFrom="���͡��ԷԹ�ҡ";
$strCalendar_LabViewFromAll="������";
$strCalendar_LabViewFromPersonal="��ǹ�ؤ��";
$strCalendar_LabMonthAsList="����¡������͹";
$strCalendar_LabApp="��¡�ùѴ����";
$strCalendar_LabAddNewApp="������¡�ùѴ��������";
$strCalendar_LabShowDetailApp="�ʴ���������´��¡�ùѴ����";
 $strCalendar_LabAddNewAppTo="������¡�ùѴ����������ѧ"; 
 $strCalendar_LabPerCal="��ԷԹ��ǹ�ؤ��";
 $strCalendar_LabStart="�����������";
$strCalendar_LabLength="������";
$strCalendar_LabTitle="��Ǣ��";
$strCalendar_LabDesc="��������´";
$strCalendar_LabAppDel="��¡�ùѴ���¶١ź����";
$strCalendar_LabDate="�ѹ���";
$strCalendar_LabTime="����";
$strCalendar_LabCourse="����Ԫ�";
$strCalendar_LabNewDate="�ѹ�������";
$strCalendar_LabMonthView="����ͧ��͹";
$strCalendar_LabThisWeek="�ѻ������";
$strCalendar_LabWeek="�ѻ����";

  
//-------------------------------  Course Member -------------------------------------------
//-------------------------------  Courses  -------------------------------------------
$strCourses_Header = "��ǹ�����ҹ����Ԫ�";
$strCourses_MenuMainCourses = "����Ԫ�";
$strCourses_MenuActiveCourses = "����Ԫҷ����ҹ";
$strCourses_MenuCreateCourses = "���ҧ����Ԫ�";
$strCourses_MenuDelCourses = "ź����Ԫ�";
$strCourses_MenuInActiveCourses = "����Ԫҷ�������ҹ";

$strCourses_LabStdListApply = "��ª��ͼ���� [��Ѥ�������¹]";
$strCourses_LabStdListWithdraw = "��ª��ͼ���� [�͹����Ԫ�]";
$strCourses_LabCourseId = "�����Ԫ�";
$strCourses_LabCourseName = "��������Ԫ�";
$strCourses_LabStdNo = "�ӴѺ���";
$strCourses_LabStdName = "����-���ʡ��";
$strCourses_LabStdEmail = "�������";
$strCourses_LabStdApply = "��Ѥ��Ԫ�";
$strCourses_LabStdGrant = "͹حҵ";
$strCourses_LabStdWithdraw = "�͹����Ԫ�";
$strCourses_LabStdRefuse = "����ʸ";

//----------- Course News-------------------

$strCourses_LabCourseNews = "���ǻ�С������Ԫ�";
$strCourses_LabCourseSection = "����";
$strCourses_LabCourseSemester = "�Ҥ���¹";
$strCourses_LabCourseYear = "�ա���֡��";
$strCourses_LabCourseNewsDetail = "�����Ң���";
$strCourses_NewsNo = "�ӴѺ";
$strCourses_NewsPicture = "�Ҿ";
$strCourses_NewsSubject = "��Ǣ�͢���";
$strCourses_NewsLimit = "�������һ�С��";
$strCourses_NewsHeaderadd = "������������Ԫ�";
$strCourses_NewsHeaderedit = "��䢢�������Ԫ�";
$strCourses_NewsHeaderview = "�٢�������Ԫ�";
$strCourses_NewsHeaderinfo = "��ǹ��Ǣ�͢���";
$strCourses_NewsFile= "�ٻ�Ҿ";
$strCourses_NewsThumbpic= "�Ҿ��Сͺ";
$strCourses_NewsPreview= "�ʴ��Ҿ";
$strCourses_NewsPictype= "��� ��Դ .gif, .jpg , .jpeg ";
$strCourses_NewsEnter = "�� Shift+Enter ���͢�鹺�÷Ѵ����";
$strCourses_NewsMsg	="***�ҡ����˹��ѹ����ش��û�С�Ȣ��ǹ�鹨������� 7 �ѹ ***";

$strCourses_NewsContent = "�����Ң���";
$strCourses_NewsExpire = "���������ʴ�";
$strCourses_NewsLastupdate = "�������ش�����";
$strCourses_NewsExpiredate= "�ѹ����ش��С��";
$strCourses_NewsDisplay= "�ٻẺ��С��";
$strCourses_NewsDisplayFirstpage= "��С�����˹���á�ͧ�к����� ";
$strCourses_NewsDisplayCourses= "��С��੾�������Ԫҹ��";
$strCourses_NewsTitle = "��������´����";
$strCourses_NewsDelpic = "ź�ٻ�Ҿ";
$strCourses_NewsTotal = "�ӹǹ����: ";
$strCourses_NewsNotfound = "��辺��������Ԫ�";

//-----------------------------------------------

$strCourses_DetailCreateCourses = "<p> <b>����Ѻ�Ҩ���������������ҧ����Ԫ�Ẻ����ٻẺ��������ԡ�áѺ���Ե ����ª������</b></p>
																		<ul>
																		  <li><b>Ἱ������¹</b> Ẻ��͡������ŧẺ���������˹� ������дǡ���ä��� ��й�������ª����</li>
																		  <li><b>���ҧ�͹ </b>��ٻẺ��ԷԹ������¹�͹�ѵ��ѵԹѡ���¹���ŧ����¹��繵��ҧ���¹���ء��</li>
																		  <li>����ͧ������͡��û�Сͺ����͹���ҧ��������ҧ�͹�ѵ��ѵ�</li>
																		  <li>���Ե������¹ŧ����¹�Ѻ�ҧ����Է������������Ҫԡ�Ԫ� �����աԨ��������͹�������ѹ��</li>
																		  <li>������ͧ������ � �� <b>Webboard Chatroom Ẻ���ҧ ����ͺ Online ����ա�ҡ��� </b>
																		  </li>
																		</ul>";

$strCourses_DetailApplyCourses = "<p><b><u>��鹵͹</u></b></p>
																		<ol>
																		  <li>�����Ԫҷ���ŧ���¹</li>
																		  <li>�������� <b>apply </b>
																			<ol type=\"a\">
																			  <li>�Ԫҷ���к���� <b>open</b> �������ѹ��</li>
																			  <li>�Ԫҷ���к���� <b>Approve</b> �������Ѥ����Ǩе�ͧ�͡��͹حҵ�ҡ�Ҩ�����Ш��Ԫ�</li>
																			</ol>
																		  </li>
																		</ol>";

$strCourses_DetailWithdrawCourses = "<p><u><b>��鹵͹</b></u></p>
																				<ol>
																				  <li>�������� <b>Withdraw</b>
																					<ol type=\"a\">
																					  <li>�Ԫҷ���к���� <b>open</b> �ж͹�͡��ѹ��</li>
																					  <li>�Ԫҷ���к���� <b>Approve</b> �������ͧ�͡�ö͹���Ǩе�ͧ�͡��͹حҵ�ҡ�Ҩ�����Ш��Ԫ� 
																					  </li>
																					</ol>
																				  </li>
																				</ol>";
																				
$strCourses_LabCourseApply = "��Ѥ����¹����Ԫ�";
$strCourses_LabCourseApplyList = "��¡������Ԫ�";

$strCourses_LabSearchCourse = "������ª����Ԫ�";
$strCourses_LabSelectByCourse = "���͡�������������Ԫ�";
$strCourses_LabSelectByInstructor = "���͡��������ż���͹";
$strCourses_LabInsName = "���ͼ���͹";
$strCourses_LabInsSurname = "���ʡ�ż���͹";
$strCourses_LabInsFac = "���";
$strCourses_LabShowAll= "�ʴ�����Ԫҷ�����";
$strCourses_LabStatus= "ʶҹ�";
$strCourses_LabProcess= "����¡��";
$strCourses_LabClose= "�Դ";
$strCourses_LabApplied= "��Ѥ������";
$strCourses_LabApply= "��Ѥ�";
$strCourses_LabOpen= "�Դ";
$strCourses_LabApprove= "��Ǩ�ͺ";
$strCourses_LabWithdraw= "�͹";
$strCourses_LabWait= "��";
$strCourses_LabTotalCourse = "����Ԫҷ�����";
$strCourses_LabNotFound = "��辺����Ԫҵ�����͹䢷���к�";

$strCourses_BtnShowCourseId = $strShow."��������Ԫ�";
$strCourses_BtnShowCourseName = $strShow."��������Ԫ�";
$strCourses_BtnShowName = $strShow."������ͼ���͹";
$strCourses_BtnShowSurName = $strShow."������ʡ�ż���͹";
$strCourses_BtnShowFac = $strShow."������";
$strCourses_BtnShowAll = $strShow."������";

$strCourses_LabCourseWithdraw = "�͹����Ԫ�";
$strCourses_LabCourseWaitWithdraw = "����Ԫҷ����ѧ�ͼš�ö͹�ҡ����͹";

$strCourses_LabMenuInstructor = "��������Ѻ����͹";
$strCourses_LabCourseSyllabus = "Ἱ����͹";
$strCourses_LabCourseCalendar = "��ԷԹ����Ԫ�";
$strCourses_LabCoursePreference = "��������´����Ԫ�";
$strCourses_LabCourseMember = "��Ҫԡ����Ԫ�";
$strCourses_LabCourseActivity = "�Ԩ��������Ԫ�";
$strCourses_LabCourseResource = "���ͷ������Ԫ�";
$strCourses_LabCourseAnnouncement = "���ǻ�С������Ԫ�";
$strCourses_LabCourseTools = "����ͧ�������Ԫ�";

$strCourses_LabShowAllInfo = $strShow."�����ŷ�����";
$strCourses_LabMailToAll = "������������ء��";
$strCourses_LabEditGroup = $strEdit."��Ҫԡ㹡����";
$strCourses_LabEditCourseMembers = $strEdit.$strCourses_LabCourseMember ;

$strCourses_LabSearch = $strSearch."���";
$strCourses_LabSearchText = $strSearch." �����";

$strCourses_LabOtherCourseMember = $strCourses_LabCourseMember."��� �";
//-------------------------------  Group -------------------------------------------
//-------------------------------  Homework -------------------------------------------
$strHome_LabInfo = "��ú�ҹ";
$strHome_LabDetail = "��������´";
$strHome_LabDes = "�Ӫ��ᨧ";
$strHome_LabDate = "�ѹ����ش�����";
$strHome_LabNo = "���";
$strHome_LabQuestion = "�Ӷ��";
$strHome_LabAttach = "�͡���Ṻ / ������§";
$strHome_LabAction = "��з�";
$strHome_LabScore = "��ṹ";
$strHome_LabNoScore = "�ѧ�����".$strHome_LabScore;
$strHome_LabAnswer = "�ӵͺ";
$strHome_LabSolution = "�Ըշ�";
$strHome_LabHomeClose = "�Դ�Ѻ����觡�ú�ҹ";
$strHome_LabResultForAll = "�š���觡�ú�ҹ�";
$strHome_LabPartType = "��Դ�ͧ�ӵͺ";
$strHome_LabNoSender = "�ӹǹ����觢�й��";
$strHome_LabGraph = "Ἱ����";
$strHome_LabIndex = "˹����ѡ";
$strHome_BtnNewQuestion = "�����Ӷ������";

$strHome_LabShowAll = $strShow.$strHome_LabQuestion;
$strHome_LabShowAllText = $strShow."��ͤ���";
$strHome_LabZip = "�պ�Ѵ�ӵͺ";
$strHome_LabDateTime = "�ѹ - ����";
$strHome_LabText = "��ͤ���";
$strHome_LabUrl = "���䫴�";
$strHome_LabFile = "�͡���";

$strHome_LabMaxScores = "��ṹ���";
$strHome_LabEditQues="��� �Ӷ��";
$strHome_LabAssignment="�Ӷ��";
$strHome_LabQuestionType="��Դ�ͧ�Ӷ��";

//-------------------------------  Quiz and Survey  -------------------------------------------
$strQuiz_LabText="�Թ�յ�͹�Ѻ��� ��èѴ���Ẻ���ͺ�͹�Ź�";
$strQuiz_LabOther = "����";
$strQuiz_LabMQ="��èѴ��� Ẻ���ͺ";
$strQuiz_LabCategory = "��Ǵ�Ӷ��";
$strQuiz_LabQuizNo = "�ӴѺ���";
$strQuiz_LabQuestion = "�Ӷ��";
$strQuiz_LabType = "��Դ�Ӷ��";
$strQuiz_LabFile = "������Ṻ";
$strQuiz_LabFileOld = "������Ṻ���";
$strQuiz_LabScore = "��ṹ";
$strQuiz_LabMaxScore = "��ṹ���";
$strQuiz_LabAlternate = "������͡";
$strQuiz_LabCorrectAns = "���͡��ͷ��١";
$strQuiz_LabSolution = "�Ըշ�";
$strQuiz_LabComment = "�����˵�";
$strQuiz_LabAnswer = "�ӵͺ";
$strQuiz_LabDesc = "��͸Ժ��";
$strQuiz_LabActive = "��ҹ";
$strQuiz_LabInActive = "�����ҹ";
$strQuiz_LabCorrectAnswer = "���";
$strQuiz_LabAnswerTrue = "�١��ͧ";
$strQuiz_LabAnswerFalse = "���١��ͧ";
$strQuiz_LabUse = "����";
$strQuiz_LabUseSelect="�ӤӶ�����ҹ";
$strQuiz_LabAverage="��������";
$strQuiz_LabTopScore="��ṹ�٧�ش";

$strQuiz_LabTotalQuestion = "�ӹǹ�Ӷ��";
$strQuiz_LabTotalAnswer = "�ӹǹ�ӵͺ";
$strQuiz_LabTotalScore= "��ṹ ������";
$strQuiz_LabFor= "�ͧ ";
$strQuiz_LabNoError= "����բ�ͼԴ";
$strQuiz_LabAnswerCorrect= "�Ӷ�����س�ӼԴ � ";
$strQuiz_LabAnswerCorrectAll= "�Ӷ�������� � ";

$strQuiz_MenuEditPreference = "��˹��ٻẺ����ͺ";
$strQuiz_MenuAddQuestion = "���ҧ����ͺ";
$strQuiz_MenuAddMultipleChoice = "����ͺ������͡";
$strQuiz_MenuAddMatching = "����ͺ�Ѻ���";
$strQuiz_MenuAddFilling = "����ͺ�����";
$strQuiz_MenuAddTrueFalse = "����ͺ�١�Դ";
$strQuiz_MenuSetActive = "��˹������ҹ";
$strQuiz_MenuViewAdd = "�ʴ������Ţ���ͺ";
$strQuiz_MenuSearchQuestion = "���Ң����Ţ���ͺ";
$strQuiz_MenuDeleteQuiz = "ź����ͺ";
$strQuiz_MenuResult = "��§ҹ��û����Թ";
$strQuiz_MenuResultByUser = "�������ͺ";
$strQuiz_MenuResultByQuestion = "����Ӷ��";

$strQuiz_LabAddCategorySuccess = "��ӡ��������Ǵ�Ӷ�����º��������";
$strQuiz_LabAddQuestionSuccess = "��ӡ�������Ӷ�����º��������!";
$strQuiz_LabSolutionDisplay = "�ԸշӨ��ʴ� �óշ��ͺ�Դ";
$strQuiz_LabForSearch = "������Ѻ���Ҩҡ˹�Ҥ���";
$strQuiz_LabRecieveScore = "��ṹ����Ѻ�ӵͺ���١��ͧ";
$strQuiz_LabScoreByQuiz = "��ṹ���ФӶ��";
$strQuiz_LabNumericOnly = "����Ţ��ҹ��";
$strQuiz_LabOutofTime = "������ҷӢ���ͺ";
$strQuiz_LabNoNumQuiz = "����к� �ӹǹ����ͺ";
$strQuiz_LabNumQuizEqual = "�ӹǹ����ͺ �ѧ���ú�ӹǹ";
$strQuiz_LabNoNumMcit= "����ͺ�ش��� �ա�������ͺẺ�Ѻ��� �����ͧ�ҡ����͹�ѧ�����ӡ�����ҧ����ͺ �֧����駼���͹";    //(29/03/05)
$strQuiz_LabDonotCopy= "���ͧ�ҡ����ͺ ��͹�����ռ�����¹ ��ӡ�÷��ͺ���� �֧�������ö�ӡ�� ��Ѻ��ا��";    //(29/03/05)
$strQuiz_LabDonotCopy1= "���ͧ�ҡ����ͺ ��͹�����բ���ͺ�ش��蹷ӡ�����¡������ �֧�������ö�ӡ�� ��Ѻ��ا��";    //(29/03/05)
$strQuiz_LabNoRecord = "����բ����š�÷Ӣ���ͺ � ��й��";
$strQuiz_LabResultAll = "�š�÷Ӣ���ͺ�ͧ����ͺ������� ";
$strQuiz_LabResultSurveyAll = "�š�÷�Ẻ���ͺ�ͧ����ͺ������� ";
$strQuiz_LabUniPart = "�ӹǹ�������ͺ";
$strQuiz_LabNrRun = "�ӹǹ���駷��Ӣ���ͺ";
$strQuiz_LabNrSend="�ӹǹ���駷���ա���觤ӵͺ";
$strQuiz_LabPart = "����ͺ";
$strQuiz_LabOccasion = "�ѹ-����";
$strQuiz_LabPercent = "������";
$strQuiz_LabQuestionUpdate = "�Ӷ���١���";
$strQuiz_LabSorry = "������ ...";
$strQuiz_LabCanNotDel = "�������öź�Ӷ����������ͧ�ա����ҹ�Ѻ����ͺ�ش�������...";
$strQuiz_LabQuestionDel = "�Ӷ���١ź...";
$strQuiz_LabQuestionSend= "�觤ӵͺ...";
$strQuiz_LabQuestionRemove = "�Ӷ���١���͡...";
$strQuiz_LabTimer = "����㹡�÷Ӣ���ͺ";
$strQuiz_LabSearch = "����� % ���ͤ��ҤӶ��������";
$strQuiz_LabSearchIn = "�����";
$strQuiz_LabSubmitAll = "�觤ӵͺ������";
$strQuiz_LabSubmitAns = "�觤ӵͺ��͹��";
$strQuiz_LabDoStart = "������� ";
$strQuiz_LabDoContinue = "�ӵ�� ";
$strQuiz_LabSeveralComment = "�س�������ö�Ӣ���ͺ���ա����<br>";
$strQuiz_LabAgainComment = "<p>�س��ͧ��÷Ӣ���ͺ�ա�����������<br>";


$strQuiz_LabAddQuestionMutipleChoice = "���ҧ����ͺẺ������͡";
$strQuiz_LabAddQuestionTrueFalse = "���ҧ����ͺẺ�١�Դ";
$strQuiz_LabAddQuestionMatching = "���ҧ����ͺẺ�Ѻ���";
$strQuiz_LabAddQuestionFilling = "���ҧ����ͺẺ�����";

$strQuiz_LabQuizWrong="�ӵͺ�ͧ�س �Դ";
$strQuiz_LabQuizCorrect="�ӵͺ�ͧ�س �١";
$strQuiz_LabAnsCorrect="�ӵͺ���١��ͧ";

$strQuiz_LabName = "����";
$strQuiz_LabMaxName = "�٧�ش 15 ����ѡ��";
$strQuiz_LabQuizOrSurvey = "Ẻ���ͺ ����  Ẻ�����Թ";
$strQuiz_LabQuiz = "Ẻ���ͺ";
$strQuiz_LabSurvey = "Ẻ�����Թ";
$strQuiz_LabLastDate = "�ѹ�ش����㹡�÷Ӣ���ͺ";
$strQuiz_LabValidate = "��ͤ�����͹��͹�觤ӵͺ";
$strQuiz_LabMultipleSelect = "��ͧ�ӵͺ�ù��";
$strQuiz_LabDependOn = "�������Ѻ�ӹǹ�ӵͺ";
$strQuiz_LabMultiChoose = "���͡�ͺ�����¢��";
$strQuiz_LabRandom = "�����Ӷ��";
$strQuiz_LabViewAns = "�٤ӵͺ";
$strQuiz_LabViewOnebyOne = "�٤ӵͺ��͵�͢��";
$strQuiz_LabViewAllQuiz = "�������駪ش��͹";
$strQuiz_LabViewAnsNo = "���͹حҵ���٤ӵͺ";
$strQuiz_LabViewSol = "���Ըշ�";
$strQuiz_LabTimesQuiz = "�ӹǹ����㹡�÷Ӣ���ͺ";
$strQuiz_LabSeveral = "���ӡѴ ";
$strQuiz_LabOnce = "��������";
$strQuiz_LabSelectMatching = "���͡�����ͺẺ�Ѻ���";
$strQuiz_LabSelectTimer = "��ͧ��èѺ����㹡�÷��ͺ";
$strQuiz_LabHour = "�������";
$strQuiz_LabMinute = "�ҷ�";
$strQuiz_LabSelectColor = "�շ���ͧ����ʴ�";
$strQuiz_LabWhite = "���";
$strQuiz_LabAntiqueWhite = "������͹";
$strQuiz_LabMintCream = "��Ǥ���";
$strQuiz_LabLearnLoopBlue = "��ǧ��͹";
$strQuiz_LabCoral = "���";
$strQuiz_LabTan = "��ӵ��";
$strQuiz_LabRoyalBlue = "����Թ";
$strQuiz_LabGainsboro = "���";
$strQuiz_LabOtherColor = "������";
$strQuiz_LabStartPage = "�Ӫ��ᨧ";
$strQuiz_LabRequireField = "�к�ࢵ�����ŷ���ͧ���";
$strQuiz_LabExplanationCopy = "This question is also included in the following modules";
$strQuiz_LabCoursesName="Courses Name";
$strQuiz_LabModules="Module Name";
$strQuiz_LabCreated="Created by";
$strQuiz_LabResultSearch="�Ũҡ��ä��Ңͧ�����";
$strQuiz_LabTotal="������";
$strQuiz_LabNewSearch="��������";
$strQuiz_LabTaken="�س��Ӣ���ͺ������㹪ش�Ӷ���������";
$strQuiz_LabStart = "
<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\" class=\"tdborder\">
                <tr class=Tmenu> 
                  <td bgcolor=\"#FFFFFF\"><p><strong>��á�˹��ٻẺ����ͺ</strong><br>
                      <br>
                      ��˹�����������ͺ����繢���ͺ����Ẻ�����Թ ����֧��͡�˹���ҧ 
                      � </p>
                    <ul>
                      <li>�վ�鹢ͧ ����ͺ����Ẻ�����Թ </li>
                      <li>����ʴ���ͤ����׹�ѹ��ѧ�ҡ�����Ե���͡�ӵͺ ����Т�� 
                      </li>
                      <li>��á�˹�����繡���ͺẺ�������ͪش </li>
                      <li>����ʴ���¤ӵͺ </li>
                      <li>��á�˹���ô٤ӵͺ</li>
                      <li>��á�˹���������ͺẺ�Ѻ���</li>
                      <li>��á�˹��������㹡�÷��ͺ</li>
                    </ul></td>
                </tr>
                <tr  class=Tmenu> 
                  <td><p><strong>������ҧ�ش�����Ţ���ͺ����Ẻ�����Թ��Фӵͺ<br>
                      </strong><br>
                      ���͡�ٻẺ���ͻ���������ͺ����ͧ������ҧ ����մ��¡ѹ������ 
                      4 �ٻẺ���</p>
                    <ul>
                      <li> ���͡ Multiple Choice �óյ�ͧ������ҧ����ͺẺ������͡</li>
                      <li>���͡ True/False �óյ�ͧ������ҧ����ͺẺ�١�Դ</li>
                      <li>���͡ Matching Item �óյ�ͧ������ҧ����ͺẺ�Ѻ���</li>
                      <li>���͡ Fill-in-Blank �óյ�ͧ������ҧ����ͺẺ�����<br>
                      </li>
                    </ul></td>
                </tr>
                <tr  class=Tmenu> 
                  <td bgcolor=\"#FFFFFF\"> <p><strong>��ä��Ң����Ţ���ͺ����Ẻ�����Թ</strong><br>
                      <br>
                      �¾������Ӥѭ����ͧ��ä��� ��觶�Ҿ��к����ʴ� List�����ŷ�辺�������������� 
                      ������ö���зӡ�� Remove ����ͺ���Т���͡�ҡ�ش��<br>
                    </p></td>
                </tr>
                <tr  class=Tmenu> 
                  <td><p><strong>����ʴ������Ţ���ͺ��С�ô��ٻẺ����ͺ</strong><br>
                      <br>
                      �к��зӡ���ʴ������Ţ���ͺ�������������㹪ش����ͺ��鹢������� 
                      �������ö��� �зӡ����� �����Ţ���ͺ���Т���� �¡�ä�ԡ���������¢��������������´⨷��<br>
                  </td>
                </tr>
                <tr  class=Tmenu> 
                  <td bgcolor=\"#FFFFFF\"><strong>����͡��§ҹ��û����Թ</strong><br> 
                    <br> <strong>����ʴ���§ҹ�����Թ�ŵ������ͺ</strong><br> 
                    <br>
                    ��˹�Ҩ��ʴ���û����Թ�Ţͧ���Ե �¨��ʴ��ӹǹ���Ե���ӡ���ͺ������ 
                    ����֧�ӹǳ����ʴ���ṹ�٧�ش�����, ��ṹ����¢ͧ���Ե�ء�� 
                    �������ૹ���ṹ����� �·������ö�٤ӵͺ�ͧ���Ե�����<br> 
                    <br> <strong>����ʴ���§ҹ�����Թ�ŵ���Ӷ��</strong><br> <br>
                    ��˹�Ҩ��ʴ���û����Թ�š�õͺ�Ӷ���ͧ����ͺ����Т�� �¨��ʴ� 
                    �Ӷ����Фӵͺ������ ����֧�ӹǹ������͡�ͺ�ͧ����ͺ����Т�ͤӵͺ<br> 
                  </td>
                </tr>
              </table>";

//-------------------------------  Resource -------------------------------------------
$strResource_LabFileName = "�������������: ";
$strResource_LabFileSize = "��Ҵ���������: ";
$strResource_LabUrlName = "�����ԧ��: ";
$strResource_LabFolderName = "���͡��ͧ: ";
$strResource_LabFileUpload = "��������Ź����: ";
$strResource_LabShowType = "�ʴ���Դ: ";
$strResource_LabMove = "������ѧ���ͧ: ";
$strResource_LabDelete = "ź: ";
$strResource_LabDiskUsage = "���ͷ����ҹ: ";
$strResource_LabUrl = "�ԧ��: ";
$strResource_LabGetFilePer = "����Ң����Ũҡ�����źؤ��: ";
$strResource_LabGetFileCenter = "����Ң����Ũҡ Resources Center";

$strResource_BtnAddFolder = $strAdd." ���ͧ"; 
$strResource_BtnAddUrl = $strAdd." �ԧ��";
$strResource_BtnUploadFile = $strAdd."��������Ź����";
$strResource_BtnEditFolder = $strEdit." ���͡��ͧ";
$strResource_BtnEditFile = $strEdit." �������������";
$strResource_BtnEditUrl = $strEdit." �����ԧ��";
$strResource_BtnEditZip = $strEdit." ��������պ�Ѵ������";
$strResource_BtnFile = "���������";
$strResource_BtnMove = "����";
$strResource_BtnDelete = "ź";
$strResource_BtnGetFiles = "�����";

$strResource_LabMang="��èѴ��������� ��Ԫ�";
$strResource_LabResourceName="����������";
$strResource_LabFileDetail="��������´�ͧ���������";
$strResource_LabEachResour="��������� : ";
$strResource_LabAllResour="��������ҷ����� : ";
$strResource_LabStorage="����������´��鹷�� ";
$strResource_LabUsedSpace="��鹷�� ��������� : ";
$strResource_LabFreeSpace="��鹷�� �������� : ";
$strResource_LabQuota="��ǹ����˹� : ";
//-------------------------------  Research  -------------------------------------------
//-------------------------------  Score Card  -------------------------------------------
//------------------------------- Syllabus-------------------------------------------
$strSyllabus_Header = "Ἱ����͹";

$strSyllabus_LabSelectType = "���͡��Դ�����ҹἹ����͹";
$strSyllabus_LabBasic = "Ἱ������¹��鹰ҹ";
$strSyllabus_LabAdvance = "Ἱ������¹����٧";
$strSyllabus_LabEditFile = $strEdit."Ἱ����͹";
$strSyllabus_LabDelFile = $strDelete."Ἱ����͹";
$strSyllabus_LabEditAdvance = $strEdit."Ἱ����͹";
$strSyllabus_LabFileName = "�������������";
$strSyllabus_LabFileType = "��Դ���������";
$strSyllabus_LabFileSize = "��Ҵ���������";
$strSyllabus_LabNo = "���駷��";
$strSyllabus_LabDate = "�ѹ����͹";
$strSyllabus_LabTime = "���ҷ���͹";
$strSyllabus_LabTopic = "��Ǣ�ͷ���͹";
$strSyllabus_LabWay = "�Ըա���͹";

//------------------------------- System-------------------------------------------
$strSystem_Header = "��èѴ����к� M@xLearn";
$strSystem_LeftMenu = "�к���÷ӧҹ";

$strSystem_LabUser = "��èѴ��ü����";
$strSystem_LabSystem = "��èѴ����к�";
$strSystem_LabMaster = "��èѴ��â��������ͧ��";
$strSystem_LabCourses = "��èѴ�������Ԫ�";
$strSystem_LabReport = "��èѴ�����§ҹ";         //****** 

$strSystem_MenuHome = "˹����ѡ";
$strSystem_MenuUser = "�����";
$strSystem_MenuSystem = "�к�";
$strSystem_MenuMaster = "���������ͧ��";
$strSystem_MenuCourses = "����Ԫ�";
$strSystem_MenuReport = "��§ҹ";                                  //****** 

$strSystem_LabNewUser = "�������������";
$strSystem_LabActiveUser = "���������ҹ";
$strSystem_LabInactiveUser = "����������ҹ";
$strSystem_LabSortBy = "���§���";
$strSystem_LabUserType = "��Դ�����";
$strSystem_LabUserStatus = "ʶҹ�";
$strSystem_LabUserAdmin = "�繼�����";
$strSystem_LabAdminPer = "�Է�Լ�����";
$strSystem_LabUserPer = "�Է�Լ����";
$strSystem_LabAddEditPer = "���� / ����Է��";
$strSystem_LabLevel = "�дѺ";
$strSystem_LabGrant = "�����ҹ";
$strSystem_LabRequired = "��ͧ����ͧ��������";
$strSystem_LabCurrentPass = "���ʼ�ҹ�Ѩ�غѹ";
$strSystem_LabNewPass = "���ʼ�ҹ����";
$strSystem_LabRepeatPass = "�׹�ѹ���ʼ�ҹ����";
$strSystem_LabImpUser = "����Ҽ��������";                                  //****
$strSystem_LabImpFile="����������Ҫԡ";								 //****
$strSystem_LabImpChar="����ѡ�â�鹢�����";								 //****
$strSystem_LabImpEx="������ҧ���";											//****
$strSystem_LabImpAdd="������Ҫԡ�ҡ���������";					 //****
$strSystem_LabImpError="��ª�����Ҫԡ����������ö ������к���";			//****
$strSystem_LabImpEmpty="�����Ţͧ ����� ���ú";                                                           //****
$strSystem_LabImpAlre="���ͼ���� ����������к� ";               //****
$strSystem_LabChangePWUpdate="���ʼ�ҹ�١���...";
$strSystem_LabChangePWWrong="���ʼ�ҹ���١��ͧ";
$strSystem_LabChangePWValidNew="���ʼ�ҹ��ͧ�����¡��� 3 ����ѡ��";
$strSystem_LabChangePWNoMatch="���ʼ�ҹ�������ç�ѹ";
$strSystem_LabChangePWValidOld="���ʼ�ҹ�����ҧ";
$strSystem_LabChangePWValidNewEmpty="���ʼ�ҹ������ҧ";

$strSystem_LabModule = "��ǹ��÷ӧҹ�к�";
$strSystem_LabViewModule = $strView." ��ǹ��÷ӧҹ";
$strSystem_LabBackup = "���ͧ�к�";
$strSystem_LabBackupDb = "���ͧ�ҹ������";
$strSystem_LabDisplay = "����ʴ���";
$strSystem_LabDisplaySetup = "��駤�ҡ���ʴ���";
$strSystem_LabDisplayColorRed = "��ᴧ";
$strSystem_LabDisplayColorBlue = "�չ���Թ";
$strSystem_LabDisplayColorGreen ="������";
$strSystem_LabFirstpage = "˹���á";
$strSystem_LabControlFirstpage = "�Ǻ���˹���á";



$strSystem_LabSubModule = "��ǹ��÷ӧҹ";
$strSystem_LabModuleStatus = "ʶҹ�";
$strSystem_LabModuleUrl = "���˹�������§";
$strSystem_LabModuleUrlAdmin = "���˹�������§������";
$strSystem_LabModuleUrlSetup = "���˹�������§��õԴ���";
$strSystem_LabModuleInfo = "��������´";
$strSystem_LabModulePicture = "�ٻ�Ҿ";

$strSystem_LabAcademicData = "������ʶҺѹ";
$strSystem_LabAcademic = "��èѴ����ç���ҧʶҺѹ";

$strSystem_LabEvaluationData = "������Ẻ�����Թ";
$strSystem_LabEvaluation = "��èѴ��â�����Ẻ�����Թ";

$strSystem_LabCampus = "ʶҺѹ";
$strSystem_LabFaculty = "���";
$strSystem_LabDept = "�Ҥ�Ԫ�";
$strSystem_LabMajor = "�Ң��Ԫ�";

$strSystem_LabNo = "�ӴѺ";
$strSystem_LabCamId = "����ʶҺѹ";
$strSystem_LabCamNameTh = "����ʶҺѹ (��)";
$strSystem_LabCamNameEng = "����ʶҺѹ (�ѧ���)";
$strSystem_LabCamUrl = "���䫴�";

$strSystem_LabFacNameTh = "���ͤ�� (��)";
$strSystem_LabFacNameEng = "���ͤ�� (�ѧ���)";
$strSystem_LabFacUrl = "���䫴�";

$strSystem_LabDeptNameTh = "�����Ҥ�Ԫ� (��)";
$strSystem_LabDeptNameEng = "�����Ҥ�Ԫ� (�ѧ���)";
$strSystem_LabDeptUrl = "���䫴�";

$strSystem_LabMajorNameTh = "�����Ң��Ԫ� (��)";
$strSystem_LabMajorNameEng = "�����Ң��Ԫ� (�ѧ���)";
$strSystem_LabMajorUrl = "���䫴�";

$strSystem_LabClickDept = $strClick.$strSystem_LabFacNameTh." ���ʹ� ".$strSystem_LabDept;
$strSystem_LabClickMajor = $strClick.$strSystem_LabDeptNameTh."  ���ʹ� ".$strSystem_LabMajor;

$strSystem_BtnNewCam = "����ʶҺѹ";
$strSystem_BtnNewFac = "�������";
$strSystem_BtnNewDept = "�����Ҥ�Ԫ�";
$strSystem_BtnNewMajor = "�����Ң��Ԫ�";

$strSystem_LabActiveCourses = "����Ԫҷ����ҹ";
$strSystem_LabInactiveCourses = "����Ԫ������ҹ";

//-------------- System news-------------------------

$strSystem_LabNews = "�Ѵ��â���";
$strSystem_LabNewsAnnounce = "��С�Ȣ���";
$strSystem_LabNewsAdd = "�������Ǣͧ�к�";
$strSystem_LabNewsView = "�٢��Ǣͧ�к�";
$strSystem_LabNewsEdit = "��䢢��Ǣͧ�к�";
$strSystem_LabNewsViewperson = "��С��੾��";
$strSystem_LabNewsAnnounceSystem = "��С��੾�������к�";
$strSystem_LabNewsSelectUser= "--���͡�����--";
$strSystem_LabNewsUserAdmin= "�������к�";
$strSystem_LabNewsUserTeacher= "�Ҩ����";
$strSystem_LabNewsUserStudent = "�ѡ���¹";
$strSystem_LabNewsUserShowall = "�ʴ�������";
$strSystem_LabHeadNews = "������èҡ�к�";
$strSystem_LabNewsNotFound="��辺���Ǣͧ�к�";


//-------------------------Import/Export Data-------------------------------------
$strImport_LabImport="�����";
$strImport_LabExport="���͡";
$strImport_LabData="������";
$strImport_LabNo="�ӴѺ���";
$strImport_LabType="��Դ";
$strImport_LabSelectImport= "�������ŷ���ͧ��� �����";
$strImport_LabTypeQuiz="Ẻ���ͺ";
//********menu report********
$strSystem_RMenuHeader = "�ʴ����";
$strSystem_RMenuAll = "������";
$strSystem_RMenuCourse = "����Ԫ�";
$strSystem_RMenuModules = "�Ԩ��������Ԫ�";
$strSystem_RMenuLogin = "�������к�";
$strSystem_RMenuLogout= "�͡�ҡ�к�";

$strSystem_RHeader = "�ʴ�";
$strSystem_LabReportTime= "��˹���ǧ����";
$strSystem_LabReportTo= "�֧";

$strSystem_ListReportTime= "�ѹ / ����";
$strSystem_ListReportName= "���ͼ����ҹ�к�";
$strSystem_ListReportAction= "�Ԩ����";
$strSystem_ListReportModules= "Modules";
$strSystem_ListReportCourses= "����Ԫ�";

$strSystem_CReportCreate= "���ҧ����Ԫ�";
$strSystem_CReportUpdate= "��Ѻ��ا����Ԫ�";
$strSystem_CReportDelete= "ź����Ԫ�";
$strSystem_CReportApply= "��Ѥ����¹����Ԫ�";
$strSystem_CReportDrop= "�͹����Ԫ�";

$strSystem_MReportFolder= "Folder";
$strSystem_MReportGroup= "Groups";
$strSystem_MReportForum= "Forum";
$strSystem_MReportWebboard= "Webboard";
$strSystem_MReportResources= "Resourcess";
$strSystem_MReportQuiz= "Quiz";
$strSystem_MReportHW= "E-Homework";

$strSystem_LabUserTypeAll = "������";
$strSystem_LabUserTypeAdmin = "�������к�";
$strSystem_LabUserTypeInstructor = "�Ҩ����";
$strSystem_LabUserTypeStudent = "�ѡ�֡��";

$strSystem_LabUserPrint = "�������§ҹ";
$strSystem_LabUserPrintHeader= "��������§ҹ";
//------------------------------- Activity -------------------------------------------
$strActivity_SelectModule = "���͡��ǹ��÷ӧҹ";
$strActivity_LabModuleName = "������ǹ��÷ӧҹ";
$strActivity_LabStat = "ʶԵ�";
$strActivity_LabByUser = "�¡��������";
$strActivity_LabCurrentWeek = "�ѻ����Ѩ�غѹ ";
$strActivity_LabTotalLogin = "�ӹǹ��������ҹ������ ";
$strActivity_LabNrPost = "�ӹǹ������觢����� ";
$strActivity_LabTotalPost = "�ӹǹ����觢����ŷ�����";
$strActivity_LabWeek = "�ѻ����";
$strActivity_LabLogin = "�����ҹ ";
$strActivity_LabPost = "�觢����� ";


//----------------------------Webboard------------------------------
$strWebboard_LabSubject="��Ǣ�ͤӶ��";
$strWebboard_LabIcon="�ͤ͹��ͤ���";
$strWebboard_LabMessage="��ͤ���";
$strWebboard_LabSmilies="�������ҧ�";
$strWebboard_LabPicture="�Ҿ��Сͺ";
$strWebboard_LabTextSize="��Ҵ����Թ 50 KB";
$strWebboard_LabDeletePic="ź�Ҿ���";
$strWebboard_LabSearch="���ҡ�з�� �";
$strWebboard_LabHPre="Personal preferences for";
$strWebboard_LabHDatail="Show Subject & Detail:";
$strWebboard_LabSDatail="This option requires javascript";
$strWebboard_LabHThread="Show thread:";
$strWebboard_LabHDESC="Sort descending:";
$strWebboard_LabSDESC="Show the last subject first";
$strWebboard_LabHMail="Subscribe:";
$strWebboard_LabSMail="Receive a mail for every new contribution";
$strWebboard_LabHDate="Show the last:";
$strWebboard_LabDate="�ѹ";
$strWebboard_LabUpload="�Ҿ��Сͺ ��ͧ�� : ";

//-----------------------------------------------  Msg + Evaluate [Kae]---------------------------
$strPersonal_MenuMsg = "���ͧ��ͤ���";
$strPersonal_msg_inbox = "��ͤ������";
$strPersonal_msg_Sentbox =  "��ͤ���������";
$strPersonal_msg_Outbox = "��ͤ����͡";
$strPersonal_msg_Savebox= "��ͤ����ѹ�֡����";
$strPersonal_Pri_Priority= "�������ͧ�����";
$strPersonal_Pri_High= "��ǹ����ش";
$strPersonal_Pri_Normal= "��ǹ";
$strPersonal_Pri_Low= "����";
$strPersonal_msg_Subject= "����ͧ";
$strPersonal_msg_From= "�ҡ";
$strPersonal_msg_To= "�֧";
$strPersonal_msg_Message= "��ͤ���";
$strPersonal_msg_New= "��ͤ�������";
$strPersonal_msg_Date= "�ѹ���";
$strPersonal_msg_Search= "����...";
$strPersonal_msg_SentComplete ="�觢�ͤ������º��������";
$strPersonal_msg_SentEditTo = "��س���������㹪�ͧ ' �֧' ";
$strPersonal_msg_SentEditMsg ="��س���������㹪�ͧ ' ��ͤ���' ";
$strPersonal_msg_Non = "����к� ";
$strPersonal_msg_PleaseSelect ="��س����͡����������";
$strPersonal_msg_KeyWord = "���������㹡�ä���";
$strPersonal_msg_All = "���������������";
$strPersonal_msg_Admin = "�������к�";
$strPersonal_msg_Teacher = "�Ҩ����";
$strPersonal_msg_Student = "�ѡ�֡��";
$strPersonal_msg_NotFound = "��辺��ª��ͷ��س��ͧ��� ��سҤ��������ա����.";
$strPersonal_msg_NotHaveLoginName = "�������ª��ͼ����  ";
$strPersonal_msg_SelectName =" ���͡ ";
$strPersonal_msg_Answer =" �ͺ��Ѻ ";
$strPersonal_msg_AlreadySave =" �ѹ�֡��ͤ������º�������� ";
$strPersonal_msg_AlreadyDel=" ź��ͤ������º�������� ";
$strPersonal_msg_ChooseMsg= " ��س����͡��ͤ�������ͧ��úѹ�֡ ���� ź ";
$strPersonal_msg_ErrorNoMsg= " ����բ�ͤ���� ���ͧ��ͤ��� �ͧ�س ";
$strPersonal_msg_ErrorNoMsg= " ����բ�ͤ���� ���ͧ��ͤ��� �ͧ�س ";
$Calendar_appointment  ="��ùѴ���¢ͧ�ѹ���";
$Calendar_Noappointment  ="����ա�ùѴ���� ";
$INFO_HOMEWORK ="��ú�ҹ ";
$INFO_CAUSE_TITLE ="�Ԫ� ";
$INFO_DEADLINE_TITLE ="��˹���";
$INFO_NotHaveHomework =" ����ա�ú�ҹ ";
$INFO_Quiz =" Ẻ���ͺ ";
$INFO_NotHaveQz =" �����Ẻ���ͺ ";
$INFO_Webboard="��дҹ���� ";
$INFO_NotHaveWeb="����ա�дҹ���� ";


$INFO_EVAL_title ="Ẻ�����Թ";
$EVAL_NEW_NAME ="��������";
$EVAL_NOT = "�����Ẻ�����Թ";
$INFO_EVAL_dead="�ѹ�������ش";
$Eval_Num="��ͷ�� ";
$Eval_Question="�Ӷ��";
$Eval_Action ="��á�з� ";
$Eval_Score ="�дѺ��û����Թ (��ṹ)";
$Eval_StdQues ="�Ӷ���ҵ�Ұҹ";
$Eval_TeaQues ="�Ӷ���ҡ����͹";
$Eval_AddstdQues ="�����Ӷ���ҵðҹ";
$Eval_AddGroupQues= "������Ǣ��(��Ǵ)�ͧ�Ӷ��";
$FullCharacters=" ��͡�� 255 ����ѡ�� ";
$Eval_AddTeaQues ="�����Ӷ��";
$chooseQues="���͡�Ӷ���ҡ��ѧ ";
$AddChoice="�����Ӷ��Ẻ���͡�ͺ(Choice) �ӹǹ";
$AddFill="�����Ӷ��Ẻ����ӵͺ �ӹǹ";
$ChoiceQues="�Ӷ��Ẻ���͡�ͺ";
$FillQues="�Ӷ��Ẻ����ӵͺ";  //********not
$choice="������͡";
$AddAlt="����������͡";
$Eval_GroupName= "������Ǵ�Ӷ��";
$Eval_NOTStdQues ="����դӶ���ҵ�Ұҹ";
$Eval_NOTTeaQues ="����դӶ���ҡ����͹";
$unitPerStd="˹��� : ��";
$Eval_total="���";
$strEvalMaxScore="��ṹ���.";
$strEvalAverageScore="��ṹ�����";
$listSTD = "��ª��ͼ�����ѧ�������Թ����͹";
$Eval_StdNum="�ӴѺ���";
$Eval_SendMail="���͡�������";
$Eval_SendAll="�觷�����";
$Std_NAME="���� - ʡ��";
$Eval_descripe ="�Ӫ��ᨧ";
$Eval_year="�ա���֡��";
$Eval_semester ="�Ҥ����֡��";
$Eval_startDate ="������ѹ���";
$Eval_endDate ="�ѹ����ش";
$EVALDESCRIPT = "��������´Ẻ�����Թ";
$EVALRESULT ="�š�û����Թ";
$HOME_Link = "˹���á";
$RES_Everage="�š�û����Թ�ʴ���ṹ�����";
$RES_Person ="�š�û����Թ�ʴ��ӹǹ���ͺ";
$Check_no_Eval="��Ǩ�ͺ��ª��ͼ�����ѧ���������Թ";
$CHOICE_1 = "������͡��� 1";
$CHOICE_2 = "������͡��� 2";
$CHOICE_3 = "������͡��� 3";
$CHOICE_4 = "������͡��� 4";
$CHOICE_5 = "������͡��� 5";
$CHOOSE_Q="���͡�Ӷ��"; 
$EVE_standrd="��ṹ�����Ẻ�����Թ�ҵðҹ ";
$EVE_user="��ṹ�����Ẻ�����Թ�ҡ����͹ ";
$FROM_Std = " �ҡ�������Թ ";
$NUM_PER="��";
$POINTS ="�дѺ��ṹ";
$EXAMPLE ="������ҧ��á�͡������";
$EDIT_QC="��Ѻ��ا�Ӷ��Ẻ���͡�ͺ(Choice)";
$EDIT_QF = "��Ѻ��ا�Ӷ��Ẻ����ӵͺ";
$EDIT_GROUP="��Ѻ��ا��Ǣ�ͤӶ�� [��Ǵ]";
$ALTERNATIVE="������͡�ͧ�Ӷ��";
$NEW_GROUPNAME ="��Ǣ�ͤӶ������";
$NOTDO="Ẻ�����Թ���س�ѧ���������Թ";
$ALREADYDO="Ẻ�����Թ���س�����Թ����";
$EVAL_STATUS="ʶҹС�û����Թ";
$MUST_DO="��Ẻ�����Թ";
$LOOK_EVAL = "�ټš�û����Թ";
$COS_EVAL ="Ẻ�����Թ����͹ ����Ԫ� ";
$NO_DATA="�ѧ����բ�͢������Ẻ�����Թ";
$Create_TITLE="�к������Թ����͹�ͧ�Ҩ�����¹��Ե( Teaching  Evaluate System :TES )"; 
$SHOW_Finish ="�ʴ��Ż����Թ��������¹������������ش��ǧ�����Թ";
$EVAL_SHOW_STD = "�ʴ��š�û����Թ��������¹���";
$EVAL_SURVEY_RES = "�š�û����Թ";
//-----------------------------------------------  Msg [Kae]---------------------------


//--------------------- Grade ------------------------------

$strGrade_HeaderGrade = "�к��ӹǳ�š�����¹";
$strGrade_MenuGrade = "�ӹǳ�š�����¹";
$strGrade_LabShowGrade = "�ʴ��š�����¹";
$strGrade_LabPreference  = "��駤��"; 
$strGrade_LabExport          = "���͡�����";
$strGrade_Labhelp          = "���������";
$strGrade_LabProgress      = "Grade Step";
$strGrade_LabSetRatio      = "��˹��Ѵ��ǹ";
$strGrade_LabInputScore  = "��˹���ṹ";
$strGrade_LabSetLevelType   = "��˹���Դ�š�����¹";
$strGrade_LabSetScoreType   = "��˹��дѺ��ṹ�š�����¹";
$strGrade_LabReport          = "��§ҹ�š�����¹";
$strGrade_LabNo				   = "�ӴѺ";
$strGrade_LabScoreName  = "���ͤ�ṹ";
$strGrade_LabGroup            =  "�����";
$strGrade_LabGrade            = "�š�����¹";
$strGrade_LabScore				= "��ṹ";
$strGrade_LabComment      =  "�����Դ���";
$strGrade_LabTotal              = "���";
$strGrade_LabAdd                = "����";
$strGrade_LabType				= "������";     
$strGrade_LabGroupName  = "���͡����";

$strGrade_LabSelectGroup =  "���͡�����";
$strGrade_LabMaxScore     = "��ṹ���";
$strGrade_LabCreateGroup = "���ҧ���������"; 
$strGrade_LabShowGroup   = "�ʴ������������";
$strGrade_LabID					= "����";
$strGrade_LabNameLastname = "����-���ʡ��"; 
$strGrade_LabFrequency = "�������";
$strGrade_LabHeadSelectType = "��˹���Դ�š�����¹";
$strGrade_LabSelectType = "���͡�š�����¹";
$strGrade_LabCriteria = "�š�����¹���ࡳ��";
$strGrade_LabGroupGrading = "�š�����¹Ẻ�����";
$strGrade_LabVarGrading = "�š�����¹Ẻ�״����";
$strGrade_LabTscore = "�š�����¹Ẻ T-score";
$strGrade_LabLevel = "���";
$strGrade_LabSelectLevel  = "���͡�дѺ���";

$strGrade_LabStdscore = "��ṹ�ҵðҹ (Z)";
$strGrade_LabSelectStdscore = "- ���͡��ṹ�ҵðҹ -";
$strGrade_LabExcellent = " �������� ";
$strGrade_LabVeryGood = " ���ҡ ";
$strGrade_LabGood = " �� ";
$strGrade_LabFairlyGood = " �վ��� ";
$strGrade_LabFair = " ���� ";
$strGrade_LabPoor = " ��� ";
$strGrade_LabVeryPoor = " ����ҡ ";




$strGrade_LabGradeLevel = "�дѺ�š�����¹";
$strGrade_LabMinScore  = "��ṹ����ش";
$strGrade_LabMaxScore1  = "��ṹ�٧�ش";
$strGrade_LabCatetype   = "�������š�����¹";
$strGrade_LabLeveltype  = "�ӹǹ�дѺ";
$strGrade_LabActive         = "�Դ��ҹ";
$strGrade_LabInActive     = "�Դ�����ҹ";
$strGrade_LabAnalysis     = "�š����������";
$strGrade_LabStdDvt        = "������§ູ�ҵðҹ";
$strGrade_LabMean          = "��������";
$strGrade_LabMedian      = "��ҡ�ҧ";
$strGrade_LabMaxValue  = "����٧�ش";
$strGrade_LabMinValue  = "��ҵ���ش";
$strGrade_LabHeadSummary  = "��ػ�š�����¹";
$strGrade_LabSummary  = "��ػ��";

$strGrade_LabAmountSt = "�ӹǹ�ѡ���¹";
$strGrade_LabScoreLevel = "��ǧ��ṹ";
$strGrade_LabPercent = "������";
$strGrade_LabGraph    = "��ҿ�š�����¹";
$strGrade_LabGraphBar    = "��ҿ��";
$strGrade_LabGraphCircle   = "��ҿǧ���";
$strGrade_PrefRawscore   =  "�ʴ���ṹ�Ժ";
$strGrade_PrefviewAll   =  "�ʴ��š�����¹�ء��";
$strGrade_Prefactive    = "�Դ���ѡ���¹��Ҵ���";

$strGrade_SelectModule = "���͡";
$strGrade_HeadListModule = "��¡����ǹ��÷ӧҹ�����Ѵ�ô";
$strGrade_ModuleName = "������ǹ��÷ӧҹ";
$strGrade_ModuleTotalscore = "��ṹ���";

$strGrade_BtnCalgrade =  "�ӹǳ�š�����¹";
$strGrade_BtnNext        = "�Ѵ�&gt;&gt;";
$strGrade_BtnBack        = "&lt;&lt;��͹��Ѻ";


//--------------------------------------------   Content [KAE]-----------------------------------------------------------------------------------------------------
$Content_Content =  "��úѭ";
$Content_Lesson =  "�����¹ ";
$Content_LessNum =  "�����";
$Content_LessName =  "���ͺ����¹";
$Content_Abstract =  "����������ػ";
$Content_Times =  "��������";
$Content_AddLess =  "���������¹";
$Content_UpdateLess =  "��Ѻ��ا�����¹";
$Content_UpdateCon =  "��Ѻ��ا�����¹";
$Content_NewContent =  "��駪�������";
$Content_TimeUnit =  "�ѹ";
$Content_NOTHAVE =  "����պ����¹";
$Content_LessNmEdit =  "��䢪��ͺ����¹ ";
$Content_LessEdit =  "��䢺����¹ ";
$Content_LessShow =  "�ʴ������¹ ";
$Content_HOME =  "��Ѻ˹����ѡ ";


//--------------------------------------------   Content [KAE]-----------------------------------------------------------------------------------------------------
//--------------------- Forum -------------------------

$strForum_Labwelcome="�Թ�յ�͹�Ѻ ";
$strForum_Labto=" ������ ";
$strForum_Labmsg="��ͤ���";
$strForum_Labwrite_msg="��¹��ͤ���";
$strForum_Labsend=" �� ";
$strForum_Laboption="�ҧ���͡";
$strForum_Labpreference="��駤��";
$strForum_Labexit="�͡�ҡ��ͧ";
$strForum_Labuserlist="��ª��ͼ���颳й��";
$strForum_Labshowemotion="�ʴ�������";

//--------------------------------------------   Content [KAE]-----------------------------------------------------------------------------------------------------
$EVAL_Cat = "�������ͧẺ�����Թ";
$EVAL_Perceptual = "Ẻ���Ǩ������¹���ͧ���Ե";
$EVAL_TEACHER="Ẻ�����Թ����͹�ͧ�Ҩ�����¹��Ե";
$EVAL_Amount= "�ӹǹ";
$EVAL_Persons= "��";
$EVAL_Perceptual_title = "�ٻẺ������¹���";
$EVAL_Student_All= "���ŧ����¹���¹������ ";
$EVAL_Visual_DES =  "You learn well from seeing words in book, on the chalkboard, and in workbooks. You remember and understand information and instructions better if you read them. You don't need as much oral explanation as an auditory learner,and you can often learn alone with a book. You should take notes of lectures and oral directions if you want to remember the information.";
$EVAL_Tactile_DES = "You learn best when you have the opportunity to do \"hand-on\" experiences with materials. That is, working on experiments in a laboratory, handing and building models, and touching and working with materials provide you with the most successful learning situations. Writing notes or instructions can help you remember information, and physical involvement in class-related activities may help you understand new information.";
$EVAL_Auditory_DES = "You learn from hearing words spoken and from oral explanation. You may remember information by reading aloud or by moving your lips as you read,especially when you are learning new material. You benefit from hearing audiotapes, lectures, and class discussion. You benefit from making tapes to listen to,by teaching other students, and by conversing with your teacher.";  
$EVAL_Group_DES = "You learn more easily when you study with at least one other student, and you will be more successful completing work well when you work with others.  You value group interaction and class work with other student, and you remember information better when you work with two or three classmates. The stimulation you receive from group work helps you learn and understand new information. "; 
$EVAL_Kinesthetic_DES = "You learn beat by experience,by being involved physically in classroom experiences. You remember information well when you activity participate in activities,field trips, and role-playing in the classroom. A combination of stimuli for example, an audio tape combined with an activity-well help you understand new material.";
$EVAL_Individual_DES = "You learn best when you work alone. You think better when you study alone, and you remember information you learn by yourself. You understand materials best when you learn it alone, and you make better progress in learning when you work by yourself.";

$EVAL_Visual_NAME = "Visual  Major Learning Style Preference";
$EVAL_Tactile_NAME ="Tactile Major Learning Style Preference" ;
$EVAL_Auditory_NAME = "Auditory Major Learning Style Preference";
$EVAL_Group_NAME = "Group Major Learning Style Preference";
$EVAL_Kinesthetic_NAME  ="Kinesthetic Major Learning Style Preference";
$EVAL_Individual_NAME="Individual Major Learning Style Preference";

?>
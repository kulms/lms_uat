<?php
require("../include/global_login.php");
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

$day_of_week = array('��.', '�.', '�.', '�.', '��.', '�.', '�.');
$month = array('�.�.', '�.�.', '��.�.', '��.�.', '�.�.', '��.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y  %R�.';
//------------------    For Common Feather -----------------------------------

echo $strAdd;
echo $strBack;
echo $strEdit;
echo $strDelete;
echo $strNext;
echo $strPrevious;

//-----------------------------------------------------------------------------------------

//-------------------------  For Each Modules ------------------------------------

//-------------------------------  Calendar  -------------------------------------------
  //$strCaledarAbc="���á�����";
//-------------------------------  Course Member -------------------------------------------
//-------------------------------  Courses  -------------------------------------------
//-------------------------------  Group -------------------------------------------
//-------------------------------  Homework -------------------------------------------
//-------------------------------  Quiz and Survey  -------------------------------------------
//-------------------------------  Resource -------------------------------------------
//-------------------------------  Research  -------------------------------------------
//-------------------------------  Score Card  -------------------------------------------
//------------------------------- Syllabus-------------------------------------------


?>

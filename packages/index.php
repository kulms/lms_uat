<?php
/*
 * tools/packages/index.php
 *
 * This file is part of ATutor, see http://www.atutor.ca
 * 
 * Copyright (C) 2005  Matthai Kurian 
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

session_start();
$session_id = session_id();		
    
require ("../include/global_login.php");


	if($courses != '' || $courses != 0){
		if($courses!=$p_courses){
		session_unregister('p_courses'); 
		}
	}
	
	if(!$p_courses){
		$p_courses = $courses;
		session_register('p_courses'); 
	}

//define('AT_INCLUDE_PATH', '../../include/');
//require(AT_INCLUDE_PATH.'vitals.inc.php');

/*
if (!defined('AT_ENABLE_SCO') || !AT_ENABLE_SCO) {
	require(AT_INCLUDE_PATH.'header.inc.php');
	$msg->printErrors('SCO_DISABLED');
	require(AT_INCLUDE_PATH.'footer.inc.php');
	exit;
}
*/
define('AT_PACKAGE_TYPES', 'scorm-1.2');

require ('header.php');
require ('lib.inc.php');
$pkgs = getPackagesManagerLinkList();

//if (authenticate(AT_PRIV_CONTENT, AT_PRIV_RETURN)) {
	$_pages['packages/index.php']['children'] = array (
	        'packages/import.php'
	);
	if (sizeOf ($pkgs) > 0) {
		array_push ($_pages['packages/index.php']['children'], 
	       		            'packages/delete.php'
		);
		array_push ($_pages['packages/index.php']['children'], 
	       			    'packages/settings.php'
		);
	}
//}


//require(AT_INCLUDE_PATH.'header.inc.php');

if (sizeOf ($pkgs) == 0) {
	//$msg->addInfo (NO_PACKAGES);
	//$msg->printAll();
	echo "No packages.";
} else {
?>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="5%" >&nbsp;</td>
    <td width="3%" ><img src="../images/disk_space.gif" width="16" height="16"></td>
    <td width="92%" ><strong><u>Package Lists</u></strong></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3" align="center">
  <tr>
    <td width="3%" >&nbsp;</td>
    <td width="97%" > 
<?	
	echo getScript();
        echo '<ol>' . "\n";
	foreach ($pkgs as $pk) {
		echo '<li>' . $pk . '</li>' . "\n";
	}
	echo '</ol>' . "\n";
?>
 	</td>
  </tr>
</table>
<?	
}
//require (AT_INCLUDE_PATH.'footer.inc.php');
?>

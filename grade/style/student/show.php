<!--<link rel="stylesheet" type="text/css" href="./style/<?php //echo $uistyle;?>/faq.css" media="all" />!-->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%">	
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td><img src="./images/icon/main-settings.png" border="0"></td>
			<td><h1><?php echo $user->_($strSystem_Header);?></h1></td>
		  </tr>
		</table>
	</td>
	<td align="right" width="25%" valign="bottom">
	</td>
	<td align="left" nowrap width="45%">

	</td>
  </tr>  
</table>
<?php
	require_once ($user->getModuleClass( $realpath, 'users' ));	  
	$permission = Permission::lookupPermission($user->getUserId());
	if($permission->getSysPAdminSuper()==1) {
?>	
		
<table width="100%" border="0" cellpadding="2" cellspacing="1" >
  <tr> 
    <td width="8%" class="hilite">&nbsp;</td>
    <td width="1%" class="hilite"><img src="./modules/users/images/helix-setup-users.png" border="0"></td>
    <td width="91%" class="hilite"> <a href="./index.php?m=users"> <?php echo $user->_($strSystem_LabUser);?></a></td>
  </tr>
  <tr> 
    <td width="8%" class="hilite">&nbsp;</td>
    <td width="1%" class="hilite"><img src="./modules/system/images/my_computer.png" border="0"></td>
    <td width="91%" class="hilite"> <a href="./index.php?m=system"> <?php echo $user->_($strSystem_LabSystem);?></a></td>
  </tr>
  <tr> 
    <td width="8%" class="hilite">&nbsp;</td>
    <td width="1%" class="hilite"><img src="./modules/mdata/images/my_master.png" border="0"></td>
    <td width="91%" class="hilite"> <a href="./index.php?m=mdata"> <?php echo $user->_($strSystem_LabMaster);?></a></td>
  </tr>
  <tr> 
    <td width="8%" class="hilite">&nbsp;</td>
    <td width="1%" class="hilite"><img src="./modules/courses/images/my_courses.png" border="0"></td>
    <td width="91%" class="hilite"> <a href="./index.php?m=courses"> <?php echo $user->_($strSystem_LabCourses);?></a></td>
  </tr>
			<tr>
			  <td class="hilite">&nbsp;</td>
			  <td width="1%" class="hilite"><img src="./modules/report/images/my_report.png" border="0"></td>
			  <td class="hilite"><a href="./index.php?m=report&a=all"><?php echo $user->_($strSystem_LabReport);?></a></td>
			  </tr>  
  <!--
  <tr>
    <td class="hilite">&nbsp;</td>
    <td class="hilite"><img src="./modules/report/images/my_report.png" border="0"></td>
	<td class="hilite"><a href="#"> M@xLearn Report</a></td>
  </tr>
  	-->
	<!--
  <tr> 
    <td width="8%" class="hilite">&nbsp;</td>
    <td width="1%" class="hilite"><img src="../images/trans.png" border="0"></td>
    <td width="91%" class="hilite"> <a href="../transfer/index.php"> Trasfers 
      Data</a></td>
  </tr>
  -->	
  
</table>
<?php
	} else {
?>	
			<table width="100%" border="0" cellpadding="2" cellspacing="1" >
<?php			
			if($permission->getSysPAdminUsers()==1) {
			?>
			<tr> 
				<td width="8%" class="hilite">&nbsp;</td>
				<td width="1%" class="hilite"><img src="./modules/users/images/helix-setup-users.png" border="0"></td>
				
    <td width="91%" class="hilite"> <a href="./index.php?m=users"> <?php echo $user->_($strSystem_LabUser);?></a></td>
			</tr>
			<?php
			}
			if($permission->getSysPAdminSystem()==1) {
			?>
			<tr> 
				<td width="8%" class="hilite">&nbsp;</td>
				<td width="1%" class="hilite"><img src="./modules/system/images/my_computer.png" border="0"></td>
				
    <td width="91%" class="hilite"> <a href="./index.php?m=system"> <?php echo $user->_($strSystem_LabSystem);?></a></td>
		  	</tr>
			<?php
			}
			if($permission->getSysPAdminMData()==1) {
			?>
			<tr> 
				<td width="8%" class="hilite">&nbsp;</td>
				<td width="1%" class="hilite"><img src="./modules/mdata/images/my_master.png" border="0"></td>
				
    <td width="91%" class="hilite"> <a href="./index.php?m=mdata"> <?php echo $user->_($strSystem_LabMaster);?> </a></td>
		  	</tr>
			<?php
			}
			if($permission->getSysPAdminCourses()==1) {
			?>
			<tr> 
				<td width="8%" class="hilite">&nbsp;</td>
				<td width="1%" class="hilite"><img src="./modules/courses/images/my_courses.png" border="0"></td>
				
    <td width="91%" class="hilite"> <a href="./index.php?m=courses"> <?php echo $user->_($strSystem_LabCourses);?></a></td>
		  	</tr>
						<tr>
			  <td class="hilite">&nbsp;</td>
			  <td width="1%" class="hilite"><img src="./modules/report/images/my_report.png" border="0"></td>
			  <td class="hilite"><a href="./index.php?m=report&a=all"><?php echo $user->_($strSystem_LabReport);?></a></td>
			  </tr>
			<?php
			}
?>			
			</table>
<?php			
	}
?>		

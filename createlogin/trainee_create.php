<?  require ("../include/global.php");  ?>
<html>
<head>
<title>.:: Trainee or other apply system ::.</title>
<link rel="STYLESHEET" type="text/css" href="../main.css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>

<body  bgcolor="#0a39c7" leftmargin="0" topmargin="0" text="#FFFF00">

<form action="trainee_create.php" method="post" name="create_login";">

  <table align="center" width="550">
    <tr><td class="info" align="right" colspan="2">&nbsp;</td></tr>
    <tr bgcolor="#FFFFCC"> 
      <td colspan="2" align="center" class="info"><font size="1" color="#0033CC"><b>��鹵͹��� 
          2 Ẻ�������͡��������´(����Ѻ������ͺ�����ͺؤ����¹͡)</b></font></td>
    </tr>
    <tr>
      <td align="right" class="info"><b><font color="#CCCC00">Login :</font></b></td>
      <td class="main"><input name="login" type="text" id="login" maxlength="255">
        ( Case sensitive and English ONLY)</td>
    </tr>
	<!--<tr> 
      <td align="right" class="info"><b><font color="#CCCC00">Password :</font></b></td>
      <td class="main"><input name="password" type="text" id="password" maxlength="255"></td>
    </tr>
    <tr> 
      <td align="right" class="info"><b><font color="#CCCC00">Confirm password :</font></b></td>
      <td class="main"><input name="password2" type="text" id="password2" maxlength="255"></td>
    </tr> -->
    <tr> 
      <td align="right" class="info"><b><font color="#CCCC00">�ӹ�˹�Ҫ��� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input name="title" type="text" size="8" maxlength="32">
        ( ���/�ҧ���/�.�./��./���)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input name="firstname" type="text" maxlength="255">
        ( ��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���ʡ�� :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input name="surname" type="text" maxlength="255">
        ( ��͡��������)</font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���ྨ :</font></b></td>
      <td class="main"><input name="homepage" type="text" id="homepage" maxlength="255"></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">������ӹѡ�ҹ :</font></b></td>
      <td class="main"><font color="#CCCC00">
<textarea name="office_address" rows="4" wrap="PHYSICAL" id="office_address" cols="80"></textarea>
        </font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���Ѿ�� :</font></b></td>
      <td class="main"><input name="office_telephone" type="text" id="telephone3">
        ( ���Ѿ����ӧҹ)</td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00"> ������� :</font></b></td>
      <td class="main"><font color="#CCCC00"> 
        <input name="address" type="text" id="address">
        ( �������������¹��ҹ���ͷ��ѡ�Ѩ�غѹ) </font></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">���Ѿ�� :</font></b></td>
      <td class="main"><input name="telephone" type="text" id="telephone">
        ( ���Ѿ����ѡ/��ǹ���) </td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">��Ͷ�� :</font></b></td>
      <td class="info"><input name="mobile" type="text" id="mobile"></td>
    </tr>
    <tr> 
      <td class="info" align="right"><b><font color="#CCCC00">����ʹ� :</font></b></td>
      <td class="info"><input name="skill_interest" type="text" id="skill_interest"></td>
    </tr>
    <tr> 
      <td><b><font color="#CCCC00"></font></b></td>
      <td class="info"><font color="#CCCC00"> �������!!����¹ mode ��þ����������<font color="#FF99FF"> 
        <b>�ѧ��ɵ�����</b></font>��͹��͡㹪�ͧ E-Mail </font></td>
    </tr>
    <tr> 
      <td class="info" align="right" height="2"><b><font color="#CCCC00">E-Mail :</font></b></td>
      <td class="main"> <font color="#CCCC00"> 
        <input type="text" name="email2" maxlength="255">
        ( �������ö���Ѵ�� password �����ҹ��)</font></td>
    </tr>
    <tr> 
      <td class="main" align="center" colspan=2> <input type="submit" name="subm" value="Submit"> 
      </td>
    </tr>
    <tr bgcolor="#FFFFCC"> 
      <td class="main" align="center" colspan=2><font color="#FFFF00"><b><font size="1" color="#0033CC"> 
        <a href="create_login.php">��͹��Ѻ仢�鹵͹��� 1</a></font></b></font></td>
    </tr>
  </table>

  </form>
  
</body>
</html>
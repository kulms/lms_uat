<!--/// - - - ��ͧ count ��� input ��� type=radio/checked  ��˹�Ҵ��� qs,qu, (��ͧ trim ��͹)txts, txtu - - - ///

function Checkuser(formobj){

	// Enter name of mandatory fields
	var fieldRequired = Array();
	// Enter field description to appear in the dialog box
	var fieldDescription = Array();

	// dialog message
	var alertMsg = "��سҡ�͡Ẻ�����Թ�������ó� ��੾�Ъ�ͧ���仹�� :\n";
	
	var l_Msg = alertMsg.length;
	
	for (var i = 0; i < fieldRequired.length; i++){
		var obj = formobj.elements[fieldRequired[i]];

		if (obj){
			switch(obj.type){
			case "select-one":
				if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].text == ""){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "select-multiple":
				if (obj.selectedIndex == -1){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "text":
			case "textarea":
				if (obj.value == "" || obj.value == null){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			default:
			}
			if (obj.type == undefined){
				var blnchecked = false;
				for (var j = 0; j < obj.length; j++){
					if (obj[j].checked){
						blnchecked = true;
					}
				}
				if (!blnchecked){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
			}
		}
	}

	if (alertMsg.length == l_Msg){
		return true;
	}else{
		alert(alertMsg);
		return false;
	}
	return false;
}
// -->
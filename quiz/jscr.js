<!--
function view_q(q,m){
	links = "view.php?qid=" + q + "&modules=" + m;
	window.open(links, "qWindow", "ScreenX=200,ScreenY=70,width=660,height=600,status=no,toolbar=no,menubar=no,scrollbars=yes");
}
function navigation(m){
//alert(document.nav.ctrlpanel.value);
	switch(document.nav.ctrlpanel.selectedIndex){
	case 1:
		window.location="setup.php?id=" + m;
		break;
	case 2:
		window.location="Addquestions.php?modules=" +m;
		break;
	case 3:
		window.location="edit.php?modules=" +m
		break;
	case 4:
		window.location="viewQuestions.php?modules=" + m;
		break;
	case 5:
		window.location="search.php?modules=" +m;
		break;
	case 6:
		if(confirm("Do you really want to delete this quiz and all it�s content?")){
			if(confirm("Are you really...REALLY sure?\nALL data associated with this quiz will be permanently lost...\n\nThis action can't be undone.")){
				window.location="../courses/delete.php?del=module&module=" + m;
			}
		}
		break;
	case 7:
		window.location="AllStat.php?modules=" + m;
		break;
	case 8:
		window.location="useranswers.php?modules=" +m
		break;
	}
}
//function editQuiz(m){
//	window.location="setup.php?id=" + m;
//}
//function viewQuestions(m){
//	window.location="viewQuestions.php?modules=" + m;	
//}
//function search_quiz(m){
//	window.location="search.php?modules=" +m;
//}
//function skipit(m){
//	window.location="edit.php?modules=" +m;
//}
//function addquestions(m){
	//window.location="Addquestions.php?modules=" +m;
//}
//function addquestionstnf(m){
//	window.location="Addquestionstnf.php?modules=" + m;
//}
//function addquestionsmcit(m){
//	window.location="Addquestionsmcit.php?modules=" +m;
//}
//function addquestionsfib(m){
//	window.location="Addquestionsfib.php?modules=" + m ;
//}
//function viewUserResult(m){
//	window.location="AllStat.php?modules=" +m;
//}
//function viewall(m){
//	window.location="useranswers.php?modules=" +m;
//}
//function Again(m){
//	window.location="index.php?id=" + m + "&again=1";
//}
//function Main(m){
	//window.location="main.php?id=" + m + "";
//}
//function remove(qnr,m){
//	if(confirm("Are you sure that you want to remove this question from your quiz?\nIf you change your mind you can always locate it by using the search function.")){
//			window.location="remove.php?qnr=" + qnr + "&modules=" + m;
//	}
//}
function delete_quiz(m){
	if(confirm("Do you really want to delete this quiz and all its content?")){
		if(confirm("Are you really...REALLY sure?\nALL data associated with this quiz will be permanently lost...\n\nThis action can't be undone.")){
			window.location="../courses/delete.php?del=module&module=" + m;
		}
	}
}
function checkHex(c){
	alert(c);
	return c;
/*	if (!(c.charAt(0)== "#")){
		alert('If you use hexadecimal values then you have to include the \'#\'-mark');
	}*/
}
function isblank(s){
    for(var i = 0; i < s.length; i++) {
		var c = s.charAt(i);
		if ((c != ' ') && (c != '\n') && (c != '\t')) return false;
    }
	return true;
}

function checkmultiple(f){
	ant=0;
	for(a=0;a<f.length;a++){
		if(f[a].checked){
			ant=f[a].value;
		}
	}
	return ant;
}


function verify(f){
	var msg;
	var empty_fields = "";
	var errors = "";
	var aMonth = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
	str = document.setup.end_date.value;
	if(document.setup.quizname.value==""){
		errors+="\n-Your quiz MUST have a name!";
		document.setup.quizname.focus();
	}
/*	if(!str== ""){
		aDate = str.split("/");
		reg=new RegExp("/","gi");
		if(str.search(reg)!=-1){
	    	str2=str.substr((str.search(reg)+1));
	    	if(str2.search(reg)==-1){
				errors+="\n-Please use / between day/month/year.";
			}
		}else{		
			errors+="\n-Please use / between day/month/year.";
		}		
		if (aDate.length < 3){
			errors += "\n-Wrong date format - should be dd/mm/yyyy";
		}else{
			monthnum = aDate[1] - 1;
			if ((aDate[0] < 1) || (aDate[0] > aMonth[monthnum]) || (isNaN(aDate[0]))){
				errors += "\n-You can't have " + aDate[0] + " as a date in month nr " + aDate[1];
			}
			if((aDate[1] < 1) || (aDate[1] > 12)){
				errors += "\nMonth nr " + aDate[1] + " doesn't exist.";
			}
			if(isNaN(aDate[2])){
				errors += "\n" + aDate[2] + " is not a valid year.";
			}
		}
	}*/

	//CHECK TIME
	if(checkmultiple(document.setup.time)==1){
			var min=document.setup.h.value;
			var sic=document.setup.s.value;
				if(min >= 180 && sic >=5 ){
					errors+="\n�����Թ 3 �.�.";
				}
				if(min == "" && sic == ""){
					errors+="\n������ҧ";
				}
	}

	if(checkmultiple(document.setup.quiztype)==1 && (document.setup.qlimit.value!="")){
		if(!confirm("When you decide to give a Survey it might be unwise to limit the number \nof questions by entering a value in \"Nr of questions for each occasion?\".\n\nSubmit anyway?")){
			document.setup.info.focus();
			return false;
		}
	} 
	
	if(document.setup.text_info.value==""){
		if(!confirm("You haven't supplied any information for the startpage.\n\nSubmit anyway?")){
			document.setup.text_info.focus();
			return false;
		}
	}
	
/*	if(checkmultiple(document.setup.multiple)==0 && document.setup.qlimit.value!="" && checkmultiple(document.setup.randomized)==0){
		errors+="\n-If you want the users to get random questions from the ones you create/select, \n  you have to select \"Randomize\" If not, they will all get the same subset of questions.";
	}*/

	
	if(isNaN(document.setup.qlimit.value)){
		errors+="\nPlease type in a numeric value for the nr of questions for each occasion.";
		document.setup.qlimit.focus();
	}

	if(document.setup.qlimit.value==""){
		errors+="\n-Your limit of questions!";
		document.setup.qlimit.focus();
	}	

	var check = false;
	for(i=0;i<f.length;i++){
		if(f.elements[i].name=="oneOrMany"){
			if(f.elements[i].checked){
				check = true;
			}
		}
	}

	if (!check){
		errors += "\n-You have to select whether to always display checkboxes\n or if it should depend on the question.";
	}
	if (!empty_fields && !errors) return true;
	msg  = "______________________________________________________\n\n";
	msg += "Your Form was not processed since it contained som errors. \n";
	msg += "              Please correct the errors and try again.\n";
	msg += "______________________________________________________\n\n";
	if (empty_fields) {
		msg += "- The following fields are empty:";
		+ empty_fields + "\n";
		if (errors) msg += "\n";
	}
	msg += errors;
	alert(msg);
	return false;
}
//-->

<!--
	//------------------------------------------------------------
	// JavaScript av Per �sberg.
	//
	// Hj�lp f�r formul�ret och kontroll av inmatning.
	//-----------------------------------------------------------
		
		//�ppnar r�tt hj�lpavsnitt i ett nytt litet f�nster
	function openHelp(s){
		link = "help.asp?vad=" + s
		window.open(link, "displayWindow", "ScreenX=570,ScreenY=70,width=200,height=350,status=no,toolbar=no,menubar=no");
	}
		//S�tter focus till f�rsta (Titel) f�ltet
	function setfocus() {
		document.reg.Title.focus();
		return;
	}
		// En funktion som returnerar sant om en str�ng inneh�ller
		// endast "tomma" tecken (dvs om det �r tomt).
		// Anropas fr�n verify() nedan
	function isblank(s)
	{
	    for(var i = 0; i < s.length; i++) {
			var c = s.charAt(i);
			if ((c != ' ') && (c != '\n') && (c != '\t')) return false;
	    }
		return true;
	}
		
		//G�r igenom alla element f�r att kontrollera att de inte �r tomma
	function verify(f)
	{
		var msg;
		var empty_fields = "";
		var errors = "";
	
				//Kollar s� att inte ngt f�lt �r tomt
	    for(var i = 0; i < f.length; i++) {
			var e = f.elements[i];
			if (((e.type == "text") || (e.type == "textarea")|| (e.type == "password")) && !e.optional) {
				// first check if the field is empty
				if ((e.value == null) || (e.value == "") || isblank(e.value)) {
					empty_fields += "\n          " + e.name;
					continue;
				}
			}
		}
			
		// Om det uppstod ngt fel s� ska meddelande om det skrivas ut, och
		// returnera false f�r att f�rhindra att formul�ret skickas iv�g. 
		// Annars returnera true.
		if (!empty_fields && !errors) return true;
			msg  = "______________________________________________________\n\n"
			msg += "Your Form was not processed since it contained som errors. \n";
			msg += "              Please correct the errors and try again.\n";
			msg += "______________________________________________________\n\n"
			if (empty_fields) {
				msg += "- The following fields are empty:" 
				+ empty_fields + "\n";
				if (errors) msg += "\n";
			}
			msg += errors;
			alert(msg);
			return false;
		}
	
	//-->
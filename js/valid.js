// Valid

const form = document.querySelector("form");
const inEntityName = form.querySelector("input[name=entityName]");
const inentityURLAdress = form.querySelector("input[name=entityURLAdress]");
const inyearDateOfPublication = form.querySelector("input[name=yearDateOfPublication]");
const inmonthDateOfPublication = form.querySelector("input[name=monthDateOfPublication]");
const indayDateOfPublication = form.querySelector("input[name=dayDateOfPublication]");
const inyearDateOfLastUpdate = form.querySelector("input[name=yearDateOfLastUpdate]");
const inmonthDateOfLastUpdate = form.querySelector("input[name=monthDateOfLastUpdate]");
const indayDateOfLastUpdate = form.querySelector("input[name=dayDateOfLastUpdate]");
const inselectStatus = form.querySelector("input[name=selectStatus]");
const indeclarationMade = form.querySelector("input[name=declarationMade]");
const inmobApp = form.querySelector("input[name=mobApp]");
const inarchaccess = form.querySelector("input[name=archaccess]");
const incontentNotAccessible = form.querySelector("input[name=contentNotAccessible]");
const inoffStatus = form.querySelector("input[name=offStatus]");
const inlinkStatus = form.querySelector("input[name=linkStatus]");
const innameExtermalEntity = form.querySelector("input[name=nameExtermalEntity]");
const indescribeMobileApp = form.querySelector("input[name=describeMobileApp]");
const inlinkMobileApp = form.querySelector("input[name=linkMobileApp]");

form.addEventListener("submit", e => {
    e.preventDefault();

    var error = false;
	var messageErrors = "Pola formularza, które wymagają poprawy\n";
	
	//Validate entity name
	/*if(inEntityName.value.length < 1){
		
		messageErrors += "Nazwa podmiotu\n"
		error = true;
	}*/
	
	//Validate entity URL
	/*if(inentityURLAdress.value.length < 1){
		
		messageErrors += "Adres URL podmiotu\n";
		error = true;
	}*/
	
	//yearOK(inyearDateOfPublication, inmonthDateOfPublication,
	//indayDateOfPublication, messageErrors, "Data publikacji");
	
	if(error == false){
		form.submit();
	}
	else {
		alert(messageErrors);
	}
	
});
/*
function yearOK(var y, var m, var d, var msg, var textMsg){
	var dataError = false;
	
	if(((y % 4 == 0) && (y % 100 != 0)) || (y % 400 == 0)){
		
		if(m == 2){
			if(d > 29){
				dataError = true;
			}
		}
		else if(m == 4 || m == 6 || m == 9 || m == 11){
			if(d > 30){
				dataError = true;
			}
		}
	}
	else {
		if(m == 2){
			if(d > 28){
				dataError = true;
			}
		}
		else if(m == 4 || m == 6 || m == 9 || m == 11){
			if(d > 30){
				dataError = true;
			}
		}
	}
	
	if(dataError == true){
		msg += textMsg + "\n";
	}
}


*/
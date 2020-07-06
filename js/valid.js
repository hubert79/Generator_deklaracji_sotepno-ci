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
const inContentNotAccessibleStatus = form.querySelector("input[name=contentNotAccessibleStatus]");
const inOffStatus = form.querySelector("input[name=offStatus]");
const inLinkStatus = form.querySelector("input[name=linkStatus]");

const indeclarationMade = form.querySelector("input[name=declaration]");
const inmobApp = form.querySelector("input[name=mobApp]");
//const inarchaccess = form.querySelector("input[name=archaccess]");
var inarchaccess = document.getElementById('archaccess');
const incontentNotAccessible = form.querySelector("input[name=contentNotAccessible]");
const inoffStatus = form.querySelector("input[name=offStatus]");
const inlinkStatus = form.querySelector("input[name=linkStatus]");
//const innameExtermalEntity = form.querySelector("input[name=nameExtermalEntity]");
var innameExtermalEntity = document.getElementById('nameExtermalEntity');
//const indescribeMobileApp = form.querySelector("input[name=describeMobileApp]");
var indescribeMobileApp = document.getElementById('describeMobileApp');
//const inlinkMobileApp = form.querySelector("input[name=linkMobileApp]");
var inlinkMobileApp = document.getElementById('linkMobileApp');

form.addEventListener("submit", e => {
    e.preventDefault();

    var error = false;
	var messageErrors = "Pola formularza, które wymagają poprawy\n";
	
	//Validate entity name
	if(inEntityName.value.length < 1){
		
		messageErrors += "Nazwa podmiotu\n"
		error = true;
	}
	
	//Validate entity URL
	if(inentityURLAdress.value.length < 1){
		
		messageErrors += "Adres URL podmiotu\n";
		error = true;
	}
	
	//validate selectStatus
	var x = document.getElementById('selectStatus').value;
	if(x != 'Zgodna'){
		if(inContentNotAccessibleStatus .value.length < 1){
			messageErrors += "Treść niedostępna\n";
			error = true;
		}
		if(inOffStatus  .value.length < 1){
			messageErrors += "Wyłączenia\n";
			error = true;
		}
		if(inLinkStatus  .value.length < 1){
			messageErrors += "Linki\n";
			error = true;
		}
	}
	
	// Date valid
	var yp = document.getElementById('yearDateOfPublication').value;
	var mp = document.getElementById('monthDateOfPublication').value;
	var dp = document.getElementById('dayDateOfPublication').value;
	
	var yu = document.getElementById('yearDateOfLastUpdate').value;
	var mu = document.getElementById('monthDateOfLastUpdate').value;
	var du = document.getElementById('dayDateOfLastUpdate').value;
	
	if(yp > yu){
		messageErrors += "Rok aktulizacji lub publikacji\n";
		error = true;
	} else {
		if(mp > mu){
			messageErrors += "Miesiąc aktualizacji lub publikacji\n";
			error = true;
		} else {
			if(dp > du){
				messageErrors += "Dzień aktualizacji lub publikacji\n";
				error = true;
			}
		}
	}
	
	
	//valid Declaration Made
	 var dm = document.getElementById('declaration').value;
	if(dm == 'Badania przeprowadzonego przez podmiot zewnętrzny'){
		if(innameExtermalEntity.value.length < 1){
			messageErrors += "Nazwa podmiotu zewnętrznego\n";
			error = true;
		}
	}
	
	//inarchaccess
	if(inarchaccess.value.length < 1){
			messageErrors += "Dostępnośćarchitektoniczna\n";
			error = true;
		}
	
	//inmobApp
	var ma = document.getElementById('mobApp').value;
	if(ma == "Tak"){
		if(indescribeMobileApp .value.length < 1){
			messageErrors += "opis aplikacji\n";
			error = true;
		}
		if(inlinkMobileApp .value.length < 1){
			messageErrors += "opis aplikacji\n";
			error = true;
		}
	} else {alert("qqq");}
	
	if(error == false){
		form.submit();
	}
	else {
		alert(messageErrors);
	}
	
});

function is_url(str)
{
  regexp =  /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
        if (regexp.test(str))
        {
          return true;
        }
        else
        {
          return false;
        }
}


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
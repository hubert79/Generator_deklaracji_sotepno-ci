// extendForm


var akcja = 0; /*Określa czy dodatkowe formularza są już widoczne, aby uniknąć sytuacji dokładania dodatkowych pol*/

        
		/* ################################################################## */
		// task = 1 - zgodny
		// task = 0 - Niezgodny, częsciowo zgodny

function extendForm(kontener, kontener2, kontener3, task){

	if(task == false ){
		if (akcja == 0){
			var trescniedostepna = document.createElement('input');
			trescniedostepna.setAttribute('type', 'text');
			trescniedostepna.setAttribute('id', 'a');
			trescniedostepna.setAttribute('name', 'plik[]');
			trescniedostepna.className = 'upload';
			var kontener = document.getElementById(kontener);
			kontener.appendChild(trescniedostepna);

			var wylaczenia = document.createElement('input');
			wylaczenia.setAttribute('type', 'text');
			wylaczenia.setAttribute('id', 'b');
			wylaczenia.setAttribute('name', 'plik[]');
			wylaczenia.className = 'upload';
			var kontener = document.getElementById(kontener2);
			kontener.appendChild(wylaczenia);

			var link = document.createElement('input');
			link.setAttribute('type', 'text');
			link.setAttribute('id', 'c');
			link.setAttribute('name', 'plik[]');
			link.className = 'upload';
			var kontener = document.getElementById(kontener3);
			kontener.appendChild(link);
			
			akcja = 1;
		}
		
	}
	else if(task == true){
		if (akcja == 1){
			var e1 = document.getElementById('a');
			var e2 = document.getElementById('b');
			var e3 = document.getElementById('c');
			
			e1.remove();
			e2.remove();
			e3.remove();
			
			akcja = 0;
		}
	}
}
var zadanie = 0;
	function podmiotzewnetrzny(kon, down){
		
		if(down == false){
			if (zadanie == 0){
			
		var nazwapodzew = document.createElement('input');
			nazwapodzew.setAttribute('type', 'text');
			nazwapodzew.setAttribute('id', 'npz');
			nazwapodzew.setAttribute('name', 'plik[]');
			nazwapodzew.className = 'upload';
			var kontener = document.getElementById(kon);
			kontener.appendChild(nazwapodzew);
			zadanie = 1;
			}
		} 
		else if(down == true){
			if(zadanie == 1){
				var element = document.getElementById('npz');
				element.remove();
				zadanie = 0;
			}
			
		}
	}
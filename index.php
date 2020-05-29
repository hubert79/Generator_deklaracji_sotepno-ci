    <!DOCTYPE html>
    <html lang="pl">
    <head>

        <meta charset="utf-8"/>
        <title>test</title>
        <link rel="stylesheet" href="main.css">
    </head>
        <body onload="load();">
        <div id="container">
        <h1>Generator dostępności</h1>


        <form action="generate.php" method="post">

                        Nazwa podmiotu <br>
                        <input type="text" /> <br><br>

                        Adres URL podmiotu <br>
                        <input type="text" /> <br><br>

                        Data publikacji strony internetowej <br>
                        <input type="text" /> <br><br>

                        Data ostatniej istotnej aktualizacji strony internetowej <br>
                        <input type="text" /> <br><br>

                        Status pod względem zgodności z ustawą <br>
                        <select>
                            <option onclick="extendForm('uzu','wyl','link',true);">Zgodna</option>
                            <option onclick="extendForm('uzu','wyl','link',false);">Częściowo zgodna</option>
                            <option onclick="extendForm('uzu','wyl','link', false);">Niezgodna</option>
                        </select> <br>
                        <div id="uzu"></div>
                        <div id="wyl"></div>
                        <div id="link"></div>
                        
						<br><br>
						
						Deklaracje sporządzona została na podstawie:<br>
						<select>
                            <option onclick="podmiotzewnetrzny('nazwapodmiotuzewnetrznego', true);">samooceny przeprowadzonej przez podmiot publiczny.</option>
                            <option onclick="podmiotzewnetrzny('nazwapodmiotuzewnetrznego', false);">badania przeprowadzonego przez podmiot zewnętrzny: </option>
                        </select>
						<br>
						<div id="nazwapodmiotuzewnetrznego"></div>
						<br><br>
						
						Dostępność architektoniczna: <br>
						<input type="text" value="tu"/>
						<br><br>
						
						Aplikacja mobilna:<br>
						<select>
                            <option onclick="mobileappp('opis', 'lnk', 'guzik', true);">Tak</option>
                            <option onclick="mobileappp('opis', 'lnk', 'guzik', false);">Nie</option>
                        </select>
						<br>
						<div id="opis"></div>
						<div id="lnk"></div>
						<div id="guzik"></div>
						<br><br>
						
						<input type="text" value="tu"/><br>
						<input type="text" value="tu"/><br>
						<input type="text" value="tu"/>


                    </form>

        </div>

    </body>

    <script type="text/javascript">
var akcja = 0; /*Określa czy dodatkowe formularza są już widoczne, aby uniknąć sytuacji dokładania dodatkowych pol*/

        function przetwarzaj_dane (){

          var brakuje_danych=false;
          var formularz=document.forms[0];
          var napis="";

          if (formularz.name.value == ""){

            napis += "imię\n"
            brakuje_danych=true;
          }

          if (formularz.surname.value == ""){

            napis += "nazwisko\n"
            brakuje_danych=true;
          }

          if (!brakuje_danych)
            formularz.submit();
          else

            alert ("Nie wypełniłeś następujących pól:\n" + napis);
        }
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
			}
			
		}
	}
	
	var ma = 0;
	function mobileappp(dis, url, buton, wybor){
		
		if(wybor == true){
		if (ma == 0){
			
		var o = document.createElement('input');
			o.setAttribute('value', 'opis');
			o.setAttribute('type', 'text');
			o.setAttribute('id', 'dpisapp');
			o.setAttribute('name', 'plik[]');
			o.className = 'upload';
			var kontener = document.getElementById(dis);
			kontener.appendChild(o);
			
		var u = document.createElement('input');
			u.setAttribute('value', 'url');
			u.setAttribute('type', 'text');
			u.setAttribute('id', 'urllink');
			u.setAttribute('name', 'plik[]');
			u.className = 'upload';
			var kontener = document.getElementById(url);
			kontener.appendChild(u);
			
		var dodaj = document.createElement('input');
			dodaj.setAttribute('type', 'button');
			dodaj.setAttribute('id', 'but');
			dodaj.setAttribute('name', 'plik[]');
			dodaj.setAttribute('onclick', 'kolejny();');
			dodaj.className = 'upload';
			var kontener = document.getElementById(buton);
			kontener.appendChild(dodaj);
			
			ma = 1;
			}
		}
		else if(wybor == false){
			if( ma == 1){
				var e1 = document.getElementById('dpisapp');
				var e2 = document.getElementById('urllink');
				var e3 = document.getElementById('but');
				
				e1.remove();
				e2.remove();
				e3.remove();
				ma = 0;
		}}

	}
	
	function kolejny(){
		
		alert("xxx");
	}
		
        </script>

    </html>


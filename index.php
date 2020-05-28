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
                        
						<br>
						<input type="text" value="tu"/><br>
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
		
        </script>

    </html>


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
                            <option onclick="extendForm('uzu','wyl','link');">Zgodna</option>
                            <option onclick="extendForm('uzu','wyl','link');">Częściowo zgodna</option>
                            <option onclick="extendForm('uzu','wyl','link');">Niezgodna</option>
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
		
		function dodaj_element(){
			
        
		}

function load(){
    var ob = document.getElementById('z');
    ob.addEventListener("click", extendForm);
}

function extendForm(kontener, kontener2, kontener3){
alert("test");
    var trescniedostepna = document.createElement('input');
        trescniedostepna.setAttribute('type', 'text');
        trescniedostepna.setAttribute('id', 'identyfikator');
        trescniedostepna.setAttribute('name', 'plik[]');
        trescniedostepna.className = 'upload';
        var kontener = document.getElementById(kontener);
        kontener.appendChild(trescniedostepna);

        var wylaczenia = document.createElement('input');
        wylaczenia.setAttribute('type', 'text');
        wylaczenia.setAttribute('id', 'wylaczeni');
        wylaczenia.setAttribute('name', 'plik[]');
        wylaczenia.className = 'upload';
        var kontener = document.getElementById(kontener2);
        kontener.appendChild(wylaczenia);

        var link = document.createElement('input');
        link.setAttribute('type', 'text');
        link.setAttribute('id', 'link');
        link.setAttribute('name', 'plik[]');
        link.className = 'upload';
        var kontener = document.getElementById(kontener3);
        kontener.appendChild(link);
}
		
        </script>

    </html>


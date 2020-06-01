// Valid

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
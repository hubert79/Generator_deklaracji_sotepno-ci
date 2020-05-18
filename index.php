    <!DOCTYPE html>
    <html lang="pl">
    <head>

        <meta charset="utf-8"/>
        <title>test</title>
        <link rel="stylesheet" href="main.css">
    </head>
        <body>
        <div id="container">
        <h1>Zamówienia online</h1>


        <form action="generate.php" name="formularz" method="post">

            Nazwa podmiotu
            <input type="text" name="companyname"/>
            <br/><br/>

            Nazwa strony internetowej
            <input type="text" name="websitename"/>
            <br><br>

            Adres trony internetowej
            <input type="text" name="websiteaddress"/>
            <br/><br/>

            Data publikacji strony internetowej
            <input type="text" name="datepublication"/>
            <br/><br/>

            Data ostatniej istotnej publikacji strony internetowej
            <input type="text" name="datelistchange"/>
            <br/><br/>

            Oświadczenie status pod względem dostępności
            <input type="text" name="status"/>
            <br/><br/>

            Data sporządzenia delkaracji
            <input type="text" name="datecreatedeclaration"/>
            <br/><br/>

            Data ostatniego przegladu i aktualizacji
            <input type="text" name="datelistupdate"/>
            <br/><br/>

            Deklaracje sporządzono na podstawie
            <input type="text" name="declarationcreate"/>
            <br/><br/>


            Raport oceniajacy
            <input type="text" name="raport"/>
            <br/><br/>

            Imie i nazwisko
            <input type="text" name="namesurname"/>
            <br/><br/>

            Email
            <input type="text" name="email"/>
            <br/><br/>

            Numer telefonu
            <input type="text" name="phonenumber"/>
            <br/><br/>

            Nazwa organu oowoławczego
            <input type="text" name="organname"/>
            <br/><br/>

            Adres organu odwoławczego
            <input type="text" name="organaddress"/>
            <br/><br/>

            Adres email organu odwoławczego
            <input type="text" name="organemail"/>
            <br/><br/>

            Telefon organu odwoławczego
            <input type="text" name="organphone"/>
            <br/><br/>

            Dostępność  architektoniczna
            <input type="text" name="archaccesible"/>
            <br/><br/>

            Udogodnienia
            <input type="text" name="access"/>
            <br/><br/>

            Aplikacje mobilne
            <input type="text" name="mobileapp"/>
            <br/><br/>

        <input type="submit" value="Generuj deklarację" onClick="przetwarzaj_dane()"/>
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

        </script>

    </html>


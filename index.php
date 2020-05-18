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

        
    <form action="order.php" method="post">

    Imię:
    <br>
    <input type="text" name="name"/>
    <br/><br/>

    Nazwisko:
    <br>
    <input type="text" name="surname"/>
    <br/><br/>

    <input type="submit" value="wyslij zamowienie" onClick="przetwarzaj_dane()"/>
    </form>

    </div>

</body>

<script type="text/javascript">

    function przetwarzaj_dane ()

    {

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

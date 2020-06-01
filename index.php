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
                            <option onclick="mobileappp('oma', 'uma', 'gma', true);">Tak</option>
                            <option onclick="mobileappp('oma', 'uma', 'gma', false);">Nie</option>
                        </select>
						<br>
						<div id="oma"></div>
						<div id="uma"></div>
						<div id="gma"></div>
						<br><br>
						
						<input type="text" value="tu"/><br>
						<input type="text" value="tu"/><br>
						<input type="text" value="tu"/>


                    </form>

        </div>

    </body>

    <script type="text/javascript" src="js/valid.js"></script>
	<script type="text/javascript" src="js/extendForm.js"></script>
	<script type="text/javascript" src="js/mobileApp.js"></script>
	<script type="text/javascript" src="js/kolejny.js"></script>
    </html>


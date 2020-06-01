    <!DOCTYPE html>
    <html lang="pl">
    <head>

        <meta charset="utf-8"/>
        <title>test</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
        <body onload="load();">
        <div id="container">
        <h1>Generator dostępności</h1>


        <form action="generate.php" method="post">
			
			<div class="row">
			<fieldset>
				<div><label>Naywa podmiotu: <input type="text" /></label></div>
				<div><label>Adres URL podmiotu: <input type="text" /></label></div>
			</fieldset>
			</div>
			<div class="row">
			<fieldset>
				<div><label>Data publikacji strony: <input type="text" /></label></div>
				<div><label>Data ostatniej istotnej aktualizacji: <input type="text" /></label></div>
			</fieldset>
			</div>
			<div class="row">
			<fieldset>
				<label for="status">Status pod względem zgodności z ustawą</label>
				<select id="status">
                     <option onclick="extendForm('uzu','wyl','link',true);">Zgodna</option>
                     <option onclick="extendForm('uzu','wyl','link',false);">Częściowo zgodna</option>
                     <option onclick="extendForm('uzu','wyl','link', false);">Niezgodna</option>
                </select>
				<div id="uzu"></div>
                <div id="wyl"></div>
                <div id="link"></div>
			</fieldset>
			</div>
			<div class="row">
			<fieldset>
				<label for="dsp">Deklaracje sporządzona została na podstawie:</label>
				<select id="dsp">
                    <option onclick="podmiotzewnetrzny('nazwapodmiotuzewnetrznego', true);">samooceny przeprowadzonej przez podmiot publiczny.</option>
                    <option onclick="podmiotzewnetrzny('nazwapodmiotuzewnetrznego', false);">badania przeprowadzonego przez podmiot zewnętrzny: </option>
                </select>
				<div id="nazwapodmiotuzewnetrznego"></div>
			</fieldset>
			</div>
			<div class="row">
            <fieldset>
				<label>Dostępność architektoniczna</label>
				<input type="text"/>
			</fieldset>
			</div>
			<div class="row">
			<fieldset>
				<label for="mobapp">Aplikacja mobilna:</label>
				<select>
                    <option onclick="mobileappp('oma', 'uma', 'gma', true);">Tak</option>
                    <option onclick="mobileappp('oma', 'uma', 'gma', false);">Nie</option>
               </select>
				<div id="oma"></div>
				<div id="uma"></div>
				<div id="gma"></div>
			</fieldset>
			</div>

       </form>
    </div>
</body>

    <script type="text/javascript" src="js/valid.js"></script>
	<script type="text/javascript" src="js/extendForm.js"></script>
	<script type="text/javascript" src="js/mobileApp.js"></script>
	<script type="text/javascript" src="js/kolejny.js"></script>
    </html>


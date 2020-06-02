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
				<div><label>Nazwa podmiotu: <input type="text" name="entityName" /></label></div>
				<div><label>Adres URL podmiotu: <input type="text" name="entityURLAdress" /></label></div>
				<div><label>Data publikacji strony: <input type="text" name="dateOfPublication" /></label></div>
				<div><label>Data ostatniej istotnej aktualizacji: <input type="text" name="dateOfLastUpdate" /></label></div>
			</fieldset>
			</div>
			<div class="row">
			<fieldset>
				<label for="status">Status pod względem zgodności z ustawą</label>
				<select id="status" name="status">
                     <option onclick="statusDropDown('contentNotAccessible','off','link',true);">Zgodna</option>
                     <option onclick="statusDropDown('contentNotAccessible','off','link',false);">Częściowo zgodna</option>
                     <option onclick="statusDropDown('contentNotAccessible','off','link', false);">Niezgodna</option>
                </select>
				<div id="contentNotAccessible"></div>
                <div id="off"></div>
                <div id="link"></div>
			</fieldset>
			</div>
			<div class="row">
			<fieldset>
				<label for="declaration">Deklaracje sporządzona została na podstawie:</label>
				<select id="declaration" name="declarationMade">
                    <option onclick="extermalEntity('nameExtermalEntity', true);">samooceny przeprowadzonej przez podmiot publiczny.</option>
                    <option onclick="extermalEntity('nameExtermalEntity', false);">badania przeprowadzonego przez podmiot zewnętrzny: </option>
                </select>
				<div id="nameExtermalEntity"></div>
			</fieldset>
			</div>
			<div class="row">
            <fieldset>
				<label>Dostępność architektoniczna</label>
				<textarea></textarea>
			</fieldset>
			</div>
			<div class="row">
			<fieldset>
				<label for="mobapp">Aplikacja mobilna:</label>
				<select id="mobapp"">
                   <option onclick="mobileAppp('dma', 'uma', 'labeldma', 'labeluma',  'bma', true);">Tak</option>
                    <option onclick="mobileAppp('dma', 'uma', 'labeldma', 'labeluma', 'bma', false);">Nie</option>
					
               </select>
				<div id="labeldma"></div>
				<div id="dma"></div>
				<div id="labeluma"></div>
				<div id="uma"></div>
				<div id="bma"></div>
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


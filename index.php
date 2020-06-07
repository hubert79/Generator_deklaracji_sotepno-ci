<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>test</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="container">
			<h1>Generator dostępności</h1>
			
			<form action="generate.php" method="post">
				
				<div class="row">
					<fieldset>
						<div><label>Nazwa podmiotu: <input type="text" name="entityName" /></label></div>
						<div><label>Adres URL podmiotu: <input type="url" name="entityURLAdress"/></label></div>
						
						<label for="dateOfPublication">Data publikacji strony: </label>
						<select name="dateOfPublication" id="dateOfPublication">
							
						</select>
						
						<div><label>Data ostatniej istotnej aktualizacji: <input type="date" name="dateOfLastUpdate" /></label></div>
					</fieldset>
				</div>
				<div class="row">
					<fieldset>
						<label for="selectStatus">Status pod względem zgodności</label>
						<select name="selectStatus" id="selectStatus">
							<option value="Zgodna">Zgodna</option>
							<option value="Częściowo zgodna">Częściowo zgodna</option>
							<option value="Niezgodna">Niezgodna</option>
						</select>
						<div id="addStatusInput" class="status-is-hidden">
							<div><label>Treść niedostępna: <input type="text" id="contentNotAccessibleStatus" name="contentNotAccessible" /></label></div>
							<div><label>Wyłączenia: <input type="text" id="offStatus" name="offStatus" /></label></div>
							<div><label>Link: <input type="url" id="linkStatus" name="linkStatus" /></label></div>
						</div>
					</fieldset>
				</div>
				<div class="row">
					<fieldset>
						<label for="declaration">Deklaracje sporządzona została na podstawie:</label>
						<select id="declaration" name="declarationMade">
							<option value="Samooceny przeprowadzonej przez podmiot publiczny">Samooceny przeprowadzonej przez podmiot publiczny</option>
							<option value="Badania przeprowadzonego przez podmiot zewnętrzny">Badania przeprowadzonego przez podmiot zewnętrzny</option>
						</select>
						<div id="addDeclarationInput" class="declaration-is-hidden">
							<div><label>Nazwa podmiotu zewnętrznego: <input type="text" id="nameExtermalEntity" name="nameExtermalEntity" /></label></div>
						</div>
					</fieldset>
				</div>
				<div class="row">
					<fieldset>
						<label for="archaccess">Dostępność architektoniczna</label>
						<textarea id="archaccess" name="archaccess"></textarea>
					</fieldset>
				</div>
				<div class="row">
					<fieldset>
						<label for="mobApp">Aplikacja mobilna:</label>
						<select id="mobApp" name="mobApp">
							<option value="Tak">Tak</option>
							<option value="Nie">Nie</option>
						</select>
						<div id="addMobileAppInput" class="mobileApp-is-hidden">
							<div><label>Opis: <input type="text" id="describeMobileApp" name="describeMobileApp" /></label></div>
							<div><label>Link: <input type="url" id="linkMobileApp" name="linkMobileApp" /></label></div>
						</div>
					</fieldset>
				</div>
				
				<input type="submit" value="Generuj"/>
			</form>
		</div>
	</body>
	<!-- Validators -->
	<script type="text/javascript" src="js/valid.js"></script>
	
	
	<script type="text/javascript" src="js/status.js"></script>
	<script type="text/javascript" src="js/declaration.js"></script>
	<script type="text/javascript" src="js/mobileApp.js"></script>

</html>
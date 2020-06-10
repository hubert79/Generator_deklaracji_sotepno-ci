<?php
	session_start ();
	
	if (isset($_POST['entityName']))
	{
		$valid_result = true;
		
		// Entity Name valid
		$entityName = $_POST['entityName'];
		$_SESSION['s_entityName'] = $entityName;
		
		if (strlen($entityName) < 1)
		{
			$valid_result=false;
			$_SESSION['e_entityName']="Wprowadź nazwę swojej firmy!";
		}
		
		$_SESSION['fr_nick'] = $entityName;
		
		
		// Entity Adress URL valid
		$entityURLAdress = $_POST['entityURLAdress'];
		$_SESSION['s_entityURLAdress'] = $entityURLAdress;
		
		if (strlen($entityURLAdress) < 1)
		{
			$valid_result=false;
			$_SESSION['e_entityURLAdress']="Wprowadź adres URL swojej firmy!";
		}
		
		$_SESSION['fr_entityURLAdress'] = $entityURLAdress;
		
		if ($valid_result == true)
		{
			header('Location: generate.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>test</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="container">
			<h1>Generator deklaracji dostępności</h1>
			
			<form class="form" method="post">
				
				<!-- Entity name Adress URL-->
				<div class="row">
					<fieldset>
						<legend>Dane podmiotu i strony</legend>
						<div>
							<label for="entityName">Nazwa podmiotu</label>
							<input type="text" value="<?php
								if (isset($_SESSION['fr_entityName']))
								{
									echo $_SESSION['fr_entityName'];
									unset($_SESSION['fr_nick']);
								}
							?>" name="entityName" id="entityName" />
							
							<?php
								if (isset($_SESSION['e_entityName']))
								{
									echo '<div class="error">'.$_SESSION['e_entityName'].'</div>';
									unset($_SESSION['e_entityName']);
								}
							?>
							
						</div>

						<div>
							<label for="entityURLAdress">Adres URL podmiotu</label>
							<input type="url" value="<?php
								if (isset($_SESSION['fr_entityURLAdress']))
								{
									echo $_SESSION['fr_entityURLAdress'];
									unset($_SESSION['fr_entityURLAdress']);
								}
							?>" name="entityURLAdress" id="entityURLAdress" />
							
							<?php
								if (isset($_SESSION['e_entityURLAdress']))
								{
									echo '<div class="error">'.$_SESSION['e_entityURLAdress'].'</div>';
									unset($_SESSION['e_entityURLAdress']);
								}
							?>
							
						</div>

						<!-- Data of publication -->
						<fieldset>
							<legend>Data publikacji strony</legend>
							<div>
								<label for="yearDateOfPublication">Rok</label>
								<select name="yearDateOfPublication" id="yearDateOfPublication">
									<option value="1980">1980</option>
									<option value="1981">1981</option>
									<option value="1982">1982</option>
									<option value="1983">1983</option>
									<option value="1984">1984</option>
									<option value="1985">1985</option>
									<option value="1986">1986</option>
									<option value="1987">1987</option>
									<option value="1988">1988</option>
									<option value="1989">1989</option>
						
									<option value="1990">1990</option>
									<option value="1991">1991</option>
									<option value="1992">1992</option>
									<option value="1993">1993</option>
									<option value="1994">1994</option>
									<option value="1995">1995</option>
									<option value="1996">1996</option>
									<option value="1997">1997</option>
									<option value="1998">1998</option>
									<option value="1999">1999</option>
						
									<option value="2000">2000</option>
									<option value="2001">2001</option>
									<option value="2002">2002</option>
									<option value="2003">2003</option>
									<option value="2004">2004</option>
									<option value="2005">2005</option>
									<option value="2006">2006</option>
									<option value="2007">2007</option>
									<option value="2008">2008</option>
									<option value="2009">2009</option>
						
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
						
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
								</select>
							</div>
						
							<div>
								<label for="monthDateOfPublication">Miesiąc</label>
								<select name="monthDateOfPublication" id="monthDateOfPublication">
									<option value="01">styczeń</option>
									<option value="02">Luty</option>
									<option value="03">marzec</option>
									<option value="04">kwiecień</option>
									<option value="05">maj</option>
									<option value="06">czerwiec</option>
									<option value="07">lipiec</option>
									<option value="08">sierpień</option>
									<option value="09">wrzesień</option>
									<option value="10">październik</option>
									<option value="11">listopad</option>
									<option value="12">grudzień</option>
								</select>
							</div>
						
							<div>
								<label for="dayDateOfPublication">Dzień</label>
								<select name="dayDateOfPublication" id="dayDateOfPublication">
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
						
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
						
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
						
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</div>
						</fieldset>
						
						<!-- Data last update -->
						<fieldset>
							<legend>Data ostatniej istotnej aktualizacji</legend>
							<div>
								<label for="yearDateOfLastUpdate">Rok</label>
								<select name="yearDateOfLastUpdate" id="yearDateOfLastUpdate">
									<option value="1980">1980</option>
									<option value="1981">1981</option>
									<option value="1982">1982</option>
									<option value="1983">1983</option>
									<option value="1984">1984</option>
									<option value="1985">1985</option>
									<option value="1986">1986</option>
									<option value="1987">1987</option>
									<option value="1988">1988</option>
									<option value="1989">1989</option>
						
									<option value="1990">1990</option>
									<option value="1991">1991</option>
									<option value="1992">1992</option>
									<option value="1993">1993</option>
									<option value="1994">1994</option>
									<option value="1995">1995</option>
									<option value="1996">1996</option>
									<option value="1997">1997</option>
									<option value="1998">1998</option>
									<option value="1999">1999</option>
						
									<option value="2000">2000</option>
									<option value="2001">2001</option>
									<option value="2002">2002</option>
									<option value="2003">2003</option>
									<option value="2004">2004</option>
									<option value="2005">2005</option>
									<option value="2006">2006</option>
									<option value="2007">2007</option>
									<option value="2008">2008</option>
									<option value="2009">2009</option>
						
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
						
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
								</select>
							</div>
						
							<div>
								<label for="monthDateOfLastUpdate">Miesiąc</label>
								<select name="monthDateOfLastUpdate" id="monthDateOfLastUpdate">
									<option value="01">styczeń</option>
									<option value="02">Luty</option>
									<option value="03">marzec</option>
									<option value="04">kwiecień</option>
									<option value="05">maj</option>
									<option value="06">czerwiec</option>
									<option value="07">lipiec</option>
									<option value="08">sierpień</option>
									<option value="09">wrzesień</option>
									<option value="10">październik</option>
									<option value="11">listopad</option>
									<option value="12">grudzień</option>
								</select>
							</div>
						
							<div>
								<label for="dayDateOfLastUpdate">Dzień</label>
								<select name="dayDateOfLastUpdate" id="dayDateOfLastUpdate">
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
						
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
						
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
						
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</div>
						</fieldset>
					</fieldset>
				</div>
				
				<!-- Status -->
				<div class="row">
					<fieldset>
						<legend>Oświadczenie o zgodności z ustawą</legend>
						<div>
							<label for="selectStatus">Status zgodności</label>
							<select name="selectStatus" id="selectStatus">
								<option value="Zgodna">Zgodna</option>
								<option value="Częściowo zgodna">Częściowo zgodna</option>
								<option value="Niezgodna">Niezgodna</option>
							</select>
						</div>
						<div id="addStatusInput" class="status-is-hidden">
							<div>
								<label for="contentNotAccessibleStatus">Treść niedostępna</label>
								<input type="text" id="contentNotAccessibleStatus" name="contentNotAccessible" />
							</div>
							<div>
								<label for="offStatus">Wyłączenia</label>
								<input type="text" id="offStatus" name="offStatus" />
							</div>
							<div>
								<label for="linkStatus">Link</label>
								<input type="url" id="linkStatus" name="linkStatus" /></div>
						</div>
					</fieldset>
				</div>
				
				<!-- Declaration -->
				<div class="row">
					<fieldset>
						<legend>Przygotowanie deklaracji</legend>
						<div>
							<label for="declaration">Deklaracje sporządzona została na podstawie</label>
							<select id="declaration" name="declarationMade">
								<option value="Samooceny przeprowadzonej przez podmiot publiczny">Samooceny przeprowadzonej przez podmiot publiczny</option>
								<option value="Badania przeprowadzonego przez podmiot zewnętrzny">Badania przeprowadzonego przez podmiot zewnętrzny</option>
							</select>
						</div>
						<div id="addDeclarationInput" class="declaration-is-hidden">
							<div>
								<label for="nameExtermalEntity">Nazwa podmiotu zewnętrznego</label>
								<input type="text" id="nameExtermalEntity" name="nameExtermalEntity" />
							</div>
						</div>
					</fieldset>
				</div>
				
				<!-- Arch access -->
				<div class="row">
					<fieldset>
						<legend>Dostępność architektoniczna</legend>
						<div>
							<label for="archaccess">Dostępność architektoniczna</label>
							<textarea id="archaccess" name="archaccess"></textarea>
						</div>
					</fieldset>
				</div>
				
				<!-- Mobile application -->
				<div class="row">
					<fieldset>
						<legend>Aplikacja mobilna</legend>
						<div>
							<label for="mobApp">Aplikacja mobilna</label>
							<select id="mobApp" name="mobApp">
								<option value="Nie">Nie</option>
								<option value="Tak">Tak</option>
							</select>
						</div>
						<div id="addMobileAppInput" class="mobileApp-is-hidden">
							<div>
								<label for="describeMobileApp">Opis</label>
								<input type="text" id="describeMobileApp" name="describeMobileApp" />
							</div>
							<div>
								<label for="linkMobileApp">Link</label>
								<input type="url" id="linkMobileApp" name="linkMobileApp" /></div>
						</div>
					</fieldset>
				</div>
				
				<!-- Submit button -->
				<input type="submit" value="Generuj"/>
			</form>
		</div>
	</body>
	<!-- Validators script-->
	<script type="text/javascript" src="js/valid.js"></script>
	
	<!-- status select list script-->
	<script type="text/javascript" src="js/status.js"></script>
	
	<!-- declaration script -->
	<script type="text/javascript" src="js/declaration.js"></script>
	
	<!-- Mobile app script -->
	<script type="text/javascript" src="js/mobileApp.js"></script>

</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>order</title>
    <link rel="stylesheet" href="main.css">
</head>
    <body>
    
    <?php
	
	$entityName = $_POST['entityName'];
	$entityURLAdress = $_POST['entityURLAdress'];
	$yearDateOfPublication = $_POST['yearDateOfPublication'];
	$monthDateOfPublication = $_POST['monthDateOfPublication'];
	$dayDateOfPublication = $_POST['dayDateOfPublication'];
	$yearDateOfLastUpdate = $_POST['yearDateOfLastUpdate'];
	$monthDateOfLastUpdate = $_POST['monthDateOfLastUpdate'];
	$dayDateOfLastUpdate = $_POST['dayDateOfLastUpdate'];
	$selectStatus = $_POST['selectStatus'];
	$declarationMade = $_POST['declarationMade'];
	$archaccess = $_POST['archaccess'];
	$mobApp = $_POST['mobApp'];
	

	echo "$entityName, nazwa podmiotu <br>";
	echo "$entityURLAdress, Adres URL podmiotu <br>";
	echo "$yearDateOfPublication, rok <br>";
	echo "$monthDateOfPublication, Miesiąc <br>";
	echo "$dayDateOfPublication, dzień <br>";
	echo "$yearDateOfLastUpdate, rok <br>";
	echo "$monthDateOfLastUpdate, miesiąc <br>";
	echo "$dayDateOfLastUpdate, dzień <br>";
	echo "$selectStatus, Status <br>";
	
	if(strlen($selectStatus) > 6){
		$contentNotAccessible = $_POST['contentNotAccessible'];
		$offStatus = $_POST['offStatus'];
		$linkStatus = $_POST['linkStatus'];
		
		echo "$contentNotAccessible, treść niedostępna <br>";
		echo "$offStatus, wyłączenia <br>";
		echo "$linkStatus, linki wyłączeń <br>";
	}
	
	echo "$declarationMade, deklaracja <br>";
	
	if(strlen($declarationMade) > 49)
	{
		$nameExtermalEntity = $_POST['nameExtermalEntity'];
		
		echo "$nameExtermalEntity, nazwa podmiotu zewnętrznego <br>";
	}
	
	echo "$archaccess, archtiektura <br>";
	echo "$mobApp, Aplikacja mobilna <br>";
	
	if(strstr($mobApp, "Tak") == true)
	{
		$describeMobileApp = $_POST['describeMobileApp'];
		$linkMobileApp = $_POST['linkMobileApp'];
		
		echo "$describeMobileApp, opis <br>";
		echo "$linkMobileApp, link <br>";
		
	}
	
    ?>
    </body>
</html>
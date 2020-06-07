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
	$dateOfPublication = $_POST['dateOfPublication'];
	$dateOfLastUpdate = $_POST['dateOfLastUpdate'];
	
	$selectStatus = $_POST['selectStatus'];
	$contentNotAccessible = $_POST['contentNotAccessible'];
	$offStatus = $_POST['offStatus'];
	$linkStatus = $_POST['linkStatus'];
	
	$declarationMade = $_POST['declarationMade'];
	$nameExtermalEntity = $_POST['nameExtermalEntity'];
	
	$archaccess = $_POST['archaccess'];
	
	$mobApp = $_POST['mobApp'];
	$describeMobileApp = $_POST['describeMobileApp'];
	$linkMobileApp = $_POST['linkMobileApp'];

	echo "$entityName, nazwa podmiotu <br>";
	echo "$entityURLAdress, URL podmiotu <br>";
	echo "$dateOfPublication, Data publikacji <br>";
	echo "$dateOfLastUpdate, Data aktualizacji <br>";
	
	echo "$selectStatus, Status <br>";
	echo "$contentNotAccessible, Treść niedostępna <br>";
	echo "$offStatus, Wyłączenia <br>";
	echo "$linkStatus, Link <br>";
	
	echo "$declarationMade, Deklaracja <br>";
	echo "$nameExtermalEntity, nazwa podmiotu zewnętrznego <br>";
	
	echo "$archaccess, Dostępność architektoniczna <br>";
	
	echo "$mobApp, Aplikacja mobilna <br>";
	echo "$describeMobileApp, Opis am <br>";
	echo "$linkMobileApp, Link am <br>";
	

    ?>
    </body>
</html>

    
    
    
  
            
 
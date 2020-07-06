<?php
	session_start ();
	
	/*echo ($_SESSION['s_entityName']);*/
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>order</title>
    <link rel="stylesheet" href="main.css">
</head>
    <body>
	<h1>Deklaracja dostępności</h1>
    <textarea><?php
	
	$entityName = $_SESSION['s_entityName'];
	/*$entityURLAdress = $_SESSION['s_entityName'];
	$yearDateOfPublication = $_SESSION['s_entityName'];
	$monthDateOfPublication = $_SESSION['s_entityName'];
	$dayDateOfPublication = $_SESSION['s_entityName'];
	$yearDateOfLastUpdate = $_SESSION['s_entityName'];
	$monthDateOfLastUpdate = $_SESSION['s_entityName'];
	$dayDateOfLastUpdate = $_SESSION['s_entityName'];
	$selectStatus = $_SESSION['s_entityName'];
	$declarationMade = $_SESSION['s_entityName'];
	$archaccess = $_SESSION['s_entityName'];
	$mobApp = $_SESSION['s_entityName']
	*/
	
	#&#60 < > &#62"; " &#34;
	
	$dokument ='<h1>hello</h1>
	<div id="auto">Nowe</div>';

	
	
	echo $dokument;
    ?></textarea>
	
	<?php
	
	$entityName = $_SESSION['s_entityName'];
	/*$entityURLAdress = $_SESSION['s_entityName'];
	$yearDateOfPublication = $_SESSION['s_entityName'];
	$monthDateOfPublication = $_SESSION['s_entityName'];
	$dayDateOfPublication = $_SESSION['s_entityName'];
	$yearDateOfLastUpdate = $_SESSION['s_entityName'];
	$monthDateOfLastUpdate = $_SESSION['s_entityName'];
	$dayDateOfLastUpdate = $_SESSION['s_entityName'];
	$selectStatus = $_SESSION['s_entityName'];
	$declarationMade = $_SESSION['s_entityName'];
	$archaccess = $_SESSION['s_entityName'];
	$mobApp = $_SESSION['s_entityName']
	*/
	
	#&#60 < > &#62"; " &#34;
	
	$dokument ='<h1>hello</h1>
	<div id="auto">Nowe</div>';

	
	
	echo $dokument;
    ?>
	
    </body>
</html>
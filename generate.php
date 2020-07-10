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
	$entityURLAdress = $_SESSION['s_entityURLAdress'];
	$yearDateOfPublication = $_SESSION['s_yearDateOfPublication'];
	$monthDateOfPublication = $_SESSION['s_monthDateOfPublication'];
	$dayDateOfPublication = $_SESSION['s_dayDateOfPublication'];
	$yearDateOfLastUpdate = $_SESSION['s_yearDateOfLastUpdate'];
	$monthDateOfLastUpdate = $_SESSION['s_monthDateOfLastUpdate'];
	$dayDateOfLastUpdate = $_SESSION['s_dayDateOfLastUpdate'];
	$selectStatus = $_SESSION['selectStatus'];
	$declarationMade = $_SESSION['s_declarationMade'];
	$archaccess = $_SESSION['s_archaccess'];
	$mobApp = $_SESSION['s_mobApp'];
	
	
	
	#&#60 < > &#62"; " &#34;
	
	$dokument ='<h1>'.$entityName.'</h1>
  <div id="'.$entityName.'">Nazwa: '.$entityName.'</div>
  <div id="url">'.$entityName.'</div>';

	
	
	echo $dokument;
    ?></textarea>
	
	<?php
	
	$entityName = $_SESSION['s_entityName'];
	/*$entityURLAdress = $_SESSION['entityURLAdress'];
	$yearDateOfPublication = $_SESSION['s_entityName'];
	$monthDateOfPublication = $_SESSION['s_entityName'];
	$dayDateOfPublication = $_SESSION['s_entityName'];
	$yearDateOfLastUpdate = $_SESSION['s_entityName'];
	$monthDateOfLastUpdate = $_SESSION['s_entityName'];
	$dayDateOfLastUpdate = $_SESSION['s_entityName'];
	$selectStatus = $_SESSION['s_entityName'];
	$declarationMade = $_SESSION['s_entityName'];
	$archaccess = $_SESSION['s_entityName'];
	$mobApp = $_SESSION['s_mobApp']
	*/
	
	#&#60 < > &#62"; " &#34;
	
	$dokument ='<h1>'.$entityName.'</h1>
  <div id="'.$entityName.'">Nazwa: '.$entityName.'</div>
  <div id="url">'.$entityName.'</div>';

	
	
	echo $dokument;
    ?>
	
	
	<?php
	echo "<br> nazwa".$entityName;
	echo "<br> url".$entityURLAdress;
	echo "<br> rok".$yearDateOfPublication;
	echo "<br> m".$monthDateOfPublication;
	echo "<br> d".$dayDateOfPublication;
	echo "<br> rok".$yearDateOfLastUpdate;
	echo "<br> m".$monthDateOfLastUpdate;
	echo "<br> d".$dayDateOfLastUpdate;
	echo "<br> status".$selectStatus;
	echo "<br> deklaracja ".$_SESSION['s_declaration'];
	echo "<br> arch".$archaccess;
	echo "<br> app".$mobApp;
	
	echo "<br> tresc niedostepna ".$_SESSION['s_contentNotAccessibleStatus'];

	echo "<br> wylaczenia".$_SESSION['s_offStatus'];

	echo "<br> link".$_SESSION['s_linkStatus'];

	echo "<br> podmiot zewnetrzny".$_SESSION['s_nameExtermalEntity'];

	echo "<br> opis ".$_SESSION['s_describeMobileApp'];

	echo "<br> link ma".$_SESSION['s_linkMobileApp'];
	
	?>
    </body>
</html>
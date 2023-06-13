<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    
 
    <script src="Content/js/app.js" defer></script>
	<link rel="stylesheet" type="text/css" href="Content/css/styles.css">
	
	<title>Index</title>
</head>

<body>
	<?php
	require_once 'Controllers/Controller.php';
	require_once 'Models/Model.php';
	session_start();
	
	// echo "<b id='controller'>" . "Controller : " . $_GET['controller'] . "<br>" . "</b>";
	//  echo "<b id='action'>" . "action : " . $_GET['action'] . "<br>" . "</b>" ;
	
    
	$controllers=["home","connexion","inscription","contact","a_propos","introduction","question","connected"];
	$controller_default="home";
	
	if (isset($_GET['controller']) and in_array($_GET['controller'],$controllers))
	{
		$nom_controller=$_GET['controller'];
	}
	else
	{
		$nom_controller=$controller_default;
	}
	
	$nom_classe="Controller_".$nom_controller;
	$nom_fichier="Controllers/".$nom_classe.".php";
	
	if (file_exists($nom_fichier))
	{
		require_once($nom_fichier);
		$controller=new $nom_classe();
	}
	else
	{
		exit("Error 404 : not found");
	}
	
	
	?>
</body>
</html>

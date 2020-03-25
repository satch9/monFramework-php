<?php
	use App\MyPDO;

	//enregistrement de l'auto loader du framework
	require '../app/Autoloader.php';
	App\Autoloader::register();
	
	// On appelle session_start() APRÈS avoir enregistré l'autoload.
	session_start();
	
	//si dans l'uri il y a l'élément deconnexion on détruit la session_start
	//on se place à la racine de l'uri
	if (isset($_GET['deconnexion']))
	{
	  session_destroy();
	  header('Location: .');
	  exit();
	}else if(isset($_GET['p'])){
		$p = $_GET['p'];
	}else{
		$p = 'home';
	}



	//connexion à l'objet gérant l'accès aux données 
	$db = new MyPDO();
	// On émet une alerte à chaque fois qu'une requête a échoué.
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 




?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Squelette </title>
</head>
<body>
	<h1>Page d'accueil</h1>
</body>
</html>

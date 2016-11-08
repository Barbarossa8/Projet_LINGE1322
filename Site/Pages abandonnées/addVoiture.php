<?php
try
{
	$bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost;dbname=Projet_LINGE1322','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO VOITURE (IDNumero, DateAchat, PrixAchat, Etat, DateRestitution, CodeModele) VALUES(?, ?, ?, ?, ?, ?)');

$req->execute(array($_POST['form-numero-voiture'], 

					$_POST['form-date-achat'],

					$_POST['form-prix-achat'],

					$_POST['form-etat'], 

					$_POST['form-date-restitution'],
					
					$_POST['form-modele']));


// Redirection du visiteur vers la page du minichat

header('Location: voiture.php');

?>
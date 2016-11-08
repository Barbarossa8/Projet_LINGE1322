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

$req = $bdd->prepare('INSERT INTO RESTITUTION (KmFin, DateCourante, Message, NumVoiture, ModeLocation) VALUES(?, ?, ?, ?, ? )');

$req->execute(array($_POST['form-kilometrage'], 

					$_POST['form-date-restitution'],

					$_POST['form-message'],

					$_POST['form-numero-vehicule'],

					$_POST['form-mode-location']));


// Redirection du visiteur vers la page du minichat

header('Location: afficherFormulaire.php');

?>
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

$req = $bdd->prepare('UPDATE RESERVATION SET Etat = "termine" WHERE RESERVATION.NReservation = ? ');

$req->execute(array($_POST['form-numero-reservation']));


// Redirection du visiteur vers la page d'accueil

header('Location: index.php');

?>
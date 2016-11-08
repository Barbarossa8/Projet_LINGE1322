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

$req = $bdd->prepare('INSERT INTO ENREGISTREMENT (NumReservation, Kilometrage, NumPermis, Caution) VALUES(?, ?, ?, (?*0.2) )');

$req->execute(array($_POST['form-numero-reservation'], 

					$_POST['form-kilometrage'],

					$_POST['form-numero-permis'],

					$_POST['form-prix-indicatif']));


// Redirection du visiteur vers la page du minichat

header('Location: contrat.php');

?>
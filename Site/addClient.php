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

$req = $bdd->prepare('INSERT INTO CLIENT (Nom, Prenom, Adresse, NumPermis) VALUES(?, ?, ?, ?)');

$req->execute(array($_POST['form-nom'], 

					$_POST['form-prenom'],

					$_POST['form-adresse'],

					$_POST['form-numero-permis']));


// Redirection du visiteur vers la page du minichat

header('Location: afficherClient.php');

?>
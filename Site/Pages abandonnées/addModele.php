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

$req = $bdd->prepare('INSERT INTO MODELE (Libelle, Marque, Type, Puissance, IDTarification) VALUES(?, ?, ?, ?, ?)');

$req->execute(array($_POST['form-libelle'], 

					$_POST['form-marque'],

					$_POST['form-type'],

					$_POST['form-puissance'], 

					$_POST['form-ID-tarification']));


// Redirection du visiteur vers la page du minichat

header('Location: modele.php');

?>
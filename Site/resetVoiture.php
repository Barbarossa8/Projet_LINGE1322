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

$req = $bdd->prepare('UPDATE VOITURE SET Etat = "libre", DateRestitution = CURRENT_TIMESTAMP WHERE VOITURE.IDNumero = ? ');

$req->execute(array($_POST['form-IDVoiture']));


// Redirection du visiteur vers la page du minichat

header('Location: index.php');

?>
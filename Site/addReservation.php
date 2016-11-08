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

$req = $bdd->prepare('INSERT INTO RESERVATION (IDVoiture, IDModeLocation, NCLI, 

								  DateRetrait, DateRestitutionVoiture, PrixMontantForfaitaire, Etat) 

								  VALUES(?, ?, ?, ?, ?, ?, "effectif")');

$req->execute(array($_POST['form-IDVoiture'],

					$_POST['form-mode-location'],

					$_POST['form-NCLI'],

					$_POST['form-date-retrait'],

					$_POST['form-date-restitution'],

					$_POST['form-prix-indicatif']));


// Redirection du visiteur vers la page du minichat

header('Location: afficherLastReservation.php');

?>
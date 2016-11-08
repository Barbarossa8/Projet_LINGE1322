<?php
try
{
	$bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost;dbname=Projet_LINGE1322','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table voiture

$reponse = $bdd->query('SELECT * FROM voiture');



// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{
	?>

    <p>

    <strong>Numéro de voiture</strong> : <?php echo $donnees['IDVoiture']; ?><br />

    La voiture a été achetée : <?php echo $donnees['DateAchat']; ?>, à un prix de <?php echo $donnees['PrixAchat']; ?> euros !<br />

    Le véhicule est en réparation : <?php echo $donnees['Reparation']; ?><br />

    Le véhicule est en entretien : <?php echo $donnees['Entretien']; ?><br />

    Sa date de restitution : <?php echo $donnees['DateRestitution']; ?><br />
    
   </p>

<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête


/*
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
$req->execute(array($_GET['possesseur'], $_GET['prix_max']));

echo '<ul>';
while ($donnees = $req->fetch())
{
	echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
}
echo '</ul>';

$req->closeCursor();

?>

*/

/*

// On ajoute une entrée dans la table jeux_video
$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');

$req->execute(array(

    'nom' => $nom,

    'possesseur' => $possesseur,

    'console' => $console,

    'prix' => $prix,

    'nbre_joueurs_max' => $nbre_joueurs_max,

    'commentaires' => $commentaires

    ));


echo 'Le jeu a bien été ajouté !';

*/

/*

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');

*/

?>

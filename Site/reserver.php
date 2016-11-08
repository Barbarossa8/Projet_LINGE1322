<?php
try
{
	$bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost;dbname=Projet_LINGE1322','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>


<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Résultats 1322</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/ucl-favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Projet LINGE1322</strong> Location de voiture</h1>
                            <div class="description">
                            	<p>
                                    Cette page va afficher les véhicules correspondant à vos désir.
                                </p>
                                <p>
                                    Si vous n'êtes pas encore client rendez-vous ci-dessous pour créer un compte Client :
                                </p>
                                <p>
                                    <strong><a href="client.php">Créer un compte client !</a></strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                    </div>

                    <div class="col-sm-8">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Résultats</h3>
	                            		<p>Voici les résultats de votre recherche:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-database"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                    <form role="form" action="afficherClient.php" method="post" class="registration-form">
	                            	<label class="form-title"> 

	                            	<?php
									$req = $bdd->prepare('SELECT DISTINCT V.DateRestitution, V.IDNumero, L.IDModeLocation, V.PrixAchat, 

                                                                          M.Marque, M.Type, M.Libelle, M.Puissance, L.MontantForfaitaire 

                                                          FROM VOITURE V, MODELE M, TARIFICATION T, MODELOCATION L, RESERVATION R

                                                          WHERE V.CodeModele = M.CodeUnique

                                                          AND T.CodeID = L.ClasseTarification

                                                          AND V.DateRestitution <= ?

                                                          AND L.Type = ?

                                                          AND V.PrixAchat >= ?

                                                          AND M.Marque = ?

                                                          AND M.Puissance >= ?

                                                          ORDER BY V.IDNumero');

									$req->execute(array($_POST['form-date-retrait'], $_POST['form-periode'], $_POST['form-prix-achat'], 

                                                        $_POST['form-marque'], $_POST['form-puissance']));

									echo '<ul>';
									while ($donnees = $req->fetch())
									{
										echo '<li>'  . '<strong> IDVoiture : ' . $donnees['IDNumero'] . ' / IDModeLocation : ' . $donnees['IDModeLocation'] . ' / PrixIndicatif : ' . $donnees['MontantForfaitaire'] . ' EUR disponible à partir du : ' . $donnees['DateRestitution'] . ' </strong><br />' .

                                                    ' Le modèle ' . $donnees['Marque'] . ' ' . $donnees['Type'] . ' avec un prix d\'achat de ' . $donnees['PrixAchat'] . ' EUR et avec les options: "' . $donnees['Libelle'] . '". ' . 'Avec une puissance de ' . $donnees['Puissance'] . ' chevaux.</li>';
									}
									echo '</ul>';

									$req->closeCursor();   //IDVoiture , IDModeLocation , NCLI , PrixMontantForfaitaire , Etat

									?>
								    </label>
                                    <label class="form-title">
                                        <p><strong>Voir les clients avec leur NCLI :</strong></p>
                                    </label>
                                    <button type="submit" class="btn">Les clients !</button>
                                    
                                </form>

								</div>
							</div>
					</div>
				</div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-8">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Réserver le véhicule qu'il vous convient</h3>
                                        <p>Vous avez fais votre choix parmis nos offres ? Passez donc à la réservation :</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>

                                <div class="form-bottom">
                                    <form role="form" action="addReservation.php" method="post" class="registration-form">

                                        <div class="form-group">
                                            <label class="form-title" for="form-IDVoiture">IDVoiture :</label>
                                            <input type="text" name="form-IDVoiture" placeholder="Ex: 10000" class="form-IDVoiture form-control" id="form-IDVoiture">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-mode-location">IDModeLocation :</label>
                                            <input type="text" name="form-mode-location" placeholder="Ex: 3" class="form-mode-location form-control" id="form-mode-location">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-NCLI">Le Numéro de Client (NCLI) :</label>
                                            <input type="text" name="form-NCLI" placeholder="Ex: 5" class="form-NCLI form-control" id="form-NCLI">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-prix-indicatif">Le Prix indicatif :</label>
                                            <input type="text" name="form-prix-indicatif" placeholder="Ex: 60" class="form-prix-indicatif form-control" id="form-prix-indicatif">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-date-retrait">La date de retrait du véhicule :</label>
                                            <input type="date" name="form-date-retrait" placeholder="Ex: aaaa-mm-jj" class="form-date-retrait form-control" id="form-date-retrait">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-date-restitution">La date de restitution du véhicule :</label>
                                            <input type="date" name="form-date-restitution" placeholder="Ex: aaaa-mm-jj" class="form-date-restitution form-control" id="form-date-restitution">
                                        </div>
                                        <button type="submit" class="btn">Réserver !</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-8">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Retourner à l'accueil</h3>
                                        <p>Vous avez fini ce que vous vouliez faire ? Retourner donc à l'accueil <i class="fa fa-smile-o"></i> </p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="index.php" method="post" class="registration-form">
                                        <button type="submit" class="btn">Accueil !</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Fait par Denauw Antoine élève de l'<strong>UCL</strong> (Université Catholique de Louvain-la-neuve) dans le cadre du cours <strong>LINGE1322</strong>.</p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
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
        <title>Paiement 1322</title>

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
                                    Cette page va calculer le paiement pour votre location.
                                </p>
                                <p>
                                    Merci de nous avoir choici <i class="fa fa-smile-o"></i>
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
	                        			<h3>Votre facture</h3>
	                            		<p>Voici la facture pour votre location :</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-money"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                    <label class="form-title">

	                            	<?php
									$req = $bdd->prepare('SELECT  DISTINCT I.DateCourante, V.DateRestitution, L.KmForfaitaire, E.Kilometrage, 

                                                                           I.KmFin, E.Caution, L.MontantForfaitaire, T.PrixKm, T.AmendeJour 

                                                          FROM VOITURE V, MODELOCATION L, RESTITUTION I, RESERVATION R, ENREGISTREMENT E, TARIFICATION T

                                                          WHERE I.NumVoiture = ?

                                                          AND V.IDNumero = I.NumVoiture

                                                          AND I.ModeLocation = ?

                                                          AND L.IDModeLocation = I.ModeLocation

                                                          AND V.IDNumero = R.IDVoiture

                                                          AND E.NumReservation = R.NReservation

                                                          AND L.ClasseTarification = T.CodeID

                                                          ');
									$req->execute(array($_POST['form-numero-vehicule'], $_POST['form-mode-location']));

									echo '<ul>';
									while ($donnees = $req->fetch())
									{
										echo '<li>'  . ' Le véhicule a été rendu à la date : ' . $donnees['DateCourante'] . '<br /> Il aurait du être rendu à cette date : ' . $donnees['DateRestitution'] . '<br /> Son Kilométrage était à la base de : ' . $donnees['Kilometrage'] . ' Km <br /> Il est maintenant à : ' . $donnees['KmFin'] . ' Km<br /> Alors qu\'il pouvait parcourir : ' . $donnees['KmForfaitaire'] . ' Km avec son mode de location <br /> Il a donné une caution de : ' . $donnees['Caution'] . ' EUR <br /><br /> Si il n\'a pas donné de caution, il devra payer 3% de ' . $donnees['MontantForfaitaire'] . ' EUR <br /><br /> Si il a dépassé le Kilométrage forfaitaire, il devra payer ' . $donnees['PrixKm'] . ' EUR par Km dépassé<br /><br /> Si il a dépassé la date, il devra payer ' . $donnees['AmendeJour'] . ' EUR par jour dépassé.' . '</li>';
									}
									echo '</ul>';

									$req->closeCursor();

                                    ?>
                                </label>
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
                                        <h3>Modifier l'état du véhicule</h3>
                                        <p>Lorsque le paiement est terminé, il ne vous reste plus qu'a libérer le véhicule grâce à son ID : </p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-unlock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="resetVoiture.php" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="form-title" for="form-IDVoiture">L'ID du véhicule :</label>
                                            <input type="text" name="form-IDVoiture" placeholder="Ex: 10001" class="form-IDVoiture form-control" id="form-IDVoiture">
                                        </div>
                                        
                                        <button type="submit" class="btn">Modifier !</button>
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
                                        <i class="fa fa-index"></i>
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
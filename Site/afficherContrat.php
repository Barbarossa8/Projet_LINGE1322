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
        <title>Votre contrat 1322</title>

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
                                    Cette page va vous afficher votre contrat, il ne vous reste plus qu'à l'imprimer.
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
	                        			<h3>Votre contrat</h3>
	                            		<p>Voici votre contrat à imprimer en deux exemplaire :</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-print"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                    <label class="form-title">

	                            	<?php
									$req = $bdd->prepare('SELECT DISTINCT A.Nom as NomAssureur, L.NCLI, L.Nom, L.Prenom, V.IDNumero, C.Type, C.Assureur, C.NumContrat FROM RESERVATION R, VOITURE V, MODELE M, TARIFICATION T, CONTRAT C, CLIENT L, ASSUREUR A

                                                          WHERE V.IDNumero = ?

                                                          AND V.CodeModele = M.CodeUnique

                                                          AND M.IDTarification = T.CodeID

                                                          AND T.NumContrat = C.NumContrat

                                                          AND C.Assureur = A.NumAssureur

                                                          AND L.NCLI = ?

                                                          ');
									$req->execute(array($_POST['form-numero-vehicule'], $_POST['form-numero-client']));

									echo '<ul>';
									while ($donnees = $req->fetch())
									{
										echo '<li>'  . ' Numéro de contrat : ' . $donnees['NumContrat'] . '<br /> Type : ' . $donnees['Type'] . '<br /> Assureur : ' . $donnees['Assureur'] . ' ( ' . $donnees['NomAssureur'] . ' ) ' . ' <br />Numéro de client : ' . $donnees['NCLI'] . ' <br />Nom : ' . $donnees['Nom'] . ' <br />Prénom : ' . $donnees['Prenom'] . ' <br />Numéro du véhicule : ' . $donnees['IDNumero'] . '<br /> Signature : </li>';
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
                                        <p>Lorsque le contrat est fait, il ne vous reste plus qu'a mentionné la date de restitution et l'ID du véhicule : </p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="setVoiture.php" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="form-title" for="form-IDVoiture">L'ID du véhicule :</label>
                                            <input type="text" name="form-IDVoiture" placeholder="Ex: 10001" class="form-IDVoiture form-control" id="form-IDVoiture">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-date-restitution">La date de restitution :</label>
                                            <input type="text" name="form-date-restitution" placeholder="Ex: aaaa-mm-jj" class="form-date-restitution form-control" id="form-date-restitution">
                                        </div>
                                        
                                        <button type="submit" class="btn">Modifier !</button>
                                    </form>
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
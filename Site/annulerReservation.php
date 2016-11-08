<!DOCTYPE html>

<?php
try
{
    $bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());    //mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost
}
?>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Annulation réservation 1322</title>

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
                                    Cette page va vous permettre d'annuler une réservation faite par un client.
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
	                        			<h3>Annuler une réservation</h3>
	                            		<p>Donner le numéro de la réservation pour la supprimer :</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-calendar-times-o"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                    <form role="form" action="setReservation.php" method="post" class="registration-form">

                                        <div class="form-group">
                                            <label class="form-title" for="form-numero-reservation">Le numéro de la réservation :</label>
                                            <input type="text" name="form-numero-reservation" placeholder="Ex: 4" class="form-numero-reservation form-control" id="form-numero-reservation">
                                        </div>
                                        <button type="submit" class="btn">Annuler !</button>
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
<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accueil Projet 1322</title>

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
	                            	Bienvenue sur la page d'accueil du projet pour le cours <strong>LINGE1322</strong> qui consiste à implémenter une base de données pour des locations de voitures. Cette page très basique va vous permettre de choisir ce que vous voulez faire. Cinq options vous sont proposées ci-dessous:<br />
                                    (BDD = Base De Données).
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                        <div class="col-sm-4">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Ajouter une réservation</h3>
                                        <p>Cette option va vous permettre de réserver un véhicule disponible dans la BDD.</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-calendar-plus-o"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="recherche.php" method="post" class="registration-form">
                                        <button type="submit" class="btn">Réserver !</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Retirer un véhicule</h3>
                                        <p>Cette option va vous permettre de retirer le véhicule qui a été précédemment réserver.</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-car"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="retirer.php" method="post" class="registration-form">
                                        <button type="submit" class="btn">Retirer !</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Remboursement</h3>
                                        <p>Cette option va permettre de calculer le montant nécessaire pour un remboursement :</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-money"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="dedommagement.php" method="post" class="registration-form">
                                        <button type="submit" class="btn">Rembourser !</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Restitution du véhicule</h3>
                                        <p>Cette option va vous permettre de restituer le véhicule dans les règles :</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-automobile"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="restitution.php" method="post" class="registration-form">
                                        <button type="submit" class="btn">Restituer !</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Annulation</h3>
                                        <p>Cette option va vous permettre d'annuler une réservation grâce à son numéro.</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-calendar-times-o"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="annulerReservation.php" method="post" class="registration-form">
                                        <button type="submit" class="btn">Annuler !</button>
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
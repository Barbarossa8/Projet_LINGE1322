<!DOCTYPE html>


<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Réserver 1322</title>

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
                                    Cette page va vous permettre de réserver la voiture qu'il vous convient dans notre base de données.
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
	                        			<h3>Filtrer votre recherche</h3>
	                            		<p>Voici des filtres pour vous aider à choisir vos champs :</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                    <form role="form" action="firstFiltre.php" method="post" class="registration-form">

                                        <div class="form-group">
                                            <label class="form-title" for="form-marque">La marque :</label>
                                            <input type="text" name="form-marque" placeholder="Ex: Mercedes" class="form-marque form-control" id="form-marque">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-prix-achat">Le prix d'achat minimum :</label>
                                            <input type="text" name="form-prix-achat" placeholder="Ex: 8000" class="form-prix-achat form-control" id="form-prix-achat">
                                        </div>
                                        <!--<div class="form-group">
                                            <label class="form-title" for="form-option1">La première option :</label>
                                            <input type="text" name="form-option1" placeholder="Ex: boite a vitesse" class="form-option1 form-control" id="form-option1">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-option2">La deuxième option :</label>
                                            <input type="text" name="form-option2" placeholder="Ex: boite a vitesse" class="form-option2 form-control" id="form-option2">
                                        </div>-->
                                        <div class="form-group">
                                            <label class="form-title" for="form-puissance">La puissance minimum :</label>
                                            <input type="text" name="form-puissance" placeholder="Ex: 80" class="form-puissance form-control" id="form-puissance">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-title" for="form-puissance">La période de location :</label></br>
                                            <select name="form-periode" id="form-periode">
                                               <option value="journee">Journée</option>
                                               <option value="week-end">Week-end</option>
                                               <option value="semaine">Semaine</option>
                                           </select>
                                        </div>
                                        <button type="submit" class="btn">Rechercher !</button>

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
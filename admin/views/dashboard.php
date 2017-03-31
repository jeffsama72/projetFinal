<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>IMIE - Administration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="views/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="views/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="views/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project  -->
    <link href="views/assets/css/demo.css" rel="stylesheet" />

    <!-- Custom css -->
    <link href="views/assets/css/style.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="views/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="views/assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo" style="text-align: center;font-size: 25px;">
                <?php
                    echo "Bonjour !";
                ?>  
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="#listeClient">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Accueil</p>
                    </a>
                </li>
                <li>
                    <a href="./index.php?action=deleteAll">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <p>Supprimer toutes les fiches candidat</p>
                    </a>
                </li>
                <li>
                    <a href="./index.php?action=export">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <p>Exporter toutes les fiches candidat</p>
                    </a>
                </li>
                <li>
                    <a href="./index.php?action=envoieMail">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <p>Envoyer les exports par mail</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                              <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs"><?php $nbCandidats = new ClientRepository(); $allCandidats = $nbCandidats->nbCandidat($pdo); echo $allCandidats[0]; ?></span>
                              </a>
                        </li>
                        <li class="dropdown" style="padding-top: 10px;">
                            <span>Il y a <?php $nbCandidats = new ClientRepository(); $allCandidats = $nbCandidats->nbCandidat($pdo); echo $allCandidats[0]; ?> inscrits.</span>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php?action=disconnect">Déconnexion</a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row" id="listeClient">
                    <div class="col-lg-12">
                        <table>
                            <thead>
                                <th>id</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>date de naissance</th>
                                <th>Telephone</th>
                                <th>code postal</th>
                                <th>Civilité</th>
                                <th>ville</th>
                                <th>Email</th>
                                <th>disponibilité</th>
                                <th>date d'inscription</th>
                                <th>Nom formation</th>
                                <th></th>
                                <th></th>
                            </thead>

                            <tbody>
                                <?php
                                    $clientRepo = new ClientRepository();
                                    $listeClients = $clientRepo->getAll($pdo);
                                    foreach ($listeClients as $client) {
                                      echo '<tr>';
                                      echo '<td>' . $client->getId() . '</td>';
                                      echo '<td>' . $client->getNom() . '</td>';
                                      echo '<td>' . $client->getPrenom() . '</td>';
                                      echo '<td>' . $client->getDateNaissance() . '</td>';
                                      echo '<td>' . $client->getTel() . '</td>';
                                      echo '<td>' . $client->getCp() . '</td>';
                                      echo '<td>' . $client->getCivilite() . '</td>';
                                      echo '<td>' . $client->getVille() . '</td>';
                                      echo '<td>' . $client->getEmail() . '</td>';
                                      echo '<td>' . $client->getdispo() . '</td>';
                                      echo '<td>' . $client->getdateForm() . '</td>';
                                      echo '<td>' . $client->getNomFormation() . '</td>';
                                      echo '<td><button class="edit"><a href="./index.php?action=formEditClient&id=' . $client->getId() . '"">Editer</a></button></td>';
                                      echo '<td><button class="sup"><a href="./index.php?action=deleteClient&id=' . $client->getId() . '">Supprimer</a></button></td>';
                                      echo '</tr>';  
                                    }
                                ?>
                             </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

equipe<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <h3 class="menu-title">Joueur</h3><!-- /.menu-title -->
                  <li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Player'); ?>">Liste des joueurs</a></li>
                          <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Player/create_link'); ?>">Creer joueur</a></li>
                      </ul>
                  </li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <strong class="card-title mb-3"><?php echo $equipe[0]->nom_equipe ?></strong>
                              <a href="<?php $id = $equipe[0]->id_equipe; echo site_url("team/modify_link/$id")?>"><i class="fa fa-pencil"></i> Modifier</a>
                              <a href="<?php $id = $equipe[0]->id_equipe; echo site_url("team/delete_team/$id")?>"><i class="fa fa-trash-o"></i> Supprimer</a>
                          </div>
                          <div class="card-body">
                            <div class="col-md-6">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>images/admin.jpg" alt="Card image cap">
                                    <p>
                                      Adresse : <?php echo $equipe[0]->adresse_equipe ?>
                                      <br>Ville : <?php echo $equipe[0]->ville_equipe ?>
                                      <br>Code Postal : <?php echo $equipe[0]->code_p_equipe?>
                                      <br>Stade : <?php echo $equipe[0]->stade_equipe ?>
                                    </p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="mx-auto d-block">
                                  classement :
                                  <br>Nombre de points : <?php echo $equipe[0]->point ?>
                                  <br>Victoires : <?php echo $equipe[0]->nb_victoire ?>
                                  <br>Defaites : <?php echo $equipe[0]->nb_defaite ?>
                                  <br>Match nul  : <?php echo $equipe[0]->nb_nul ?>
                                  <br>Nombre de buts marqués : <?php echo $equipe[0]->but_marque ?>
                                  <br>Nombre de buts concedés : <?php echo $equipe[0]->but_encaisse ?>
                                  <br>différence de buts : <?php echo $equipe[0]->difference_but?>
                                </div>
                              </div>
                              <hr>
                              <div class="card-text text-sm-center">

                              </div>
                          </div>
                      </div>
                  </div>
                </div><!-- .row -->

                <div class="row">

                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <strong class="card-title">Liste des joueur</strong>
                          </div>
                          <div class="card-body">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Poste</th>
                                    <th scope="col">N° Maillot</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  foreach ($allplayer as $item) {
                                      $lien = site_url("Player/player_card/$item->id_joueur");?>
                                      <tr>
                                          <td><a href="<?php echo $lien ?>"><?php echo $item->nom_joueur; ?></td>
                                          <td><?php echo $item->prenom_joueur; ?></td>
                                          <td><?php echo $item->poste; ?></td>
                                          <td><?php echo $item->num_maillot ?></td>
                                       </tr>
                                      </a>
                                    <?php } ?>

                                </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

                </div><!-- .row -->

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>


</body>
</html>

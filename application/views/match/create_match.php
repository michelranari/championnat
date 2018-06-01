<?php
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
                  <h3 class="menu-title">Equipe</h3><!-- /.menu-title -->
                  <li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Team/create_link'); ?>">Creer une equipe</a></li>
                      </ul>
                  </li>
                  <h3 class="menu-title">Gestion</h3><!-- /.menu-title -->
                  <li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Day'); ?>">Gerer les journées</a></li>
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

                  <form action="<?php echo site_url("Match/create_match") ?>" method="post" class="form-horizontal">

                    <div class="col-lg-6">
                      <div class="form-group">
                          <label class=" form-control-label">Date du match</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                              <input type="date" id="date_match" name="date_match"  class="form-control">
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class=" form-control-label">Journée n°</label>
                          <div class="input-group">
                            <select  name= "journee" class="standardSelect" tabindex="1">
                              <?php
                                foreach ($journee as $item) {?>
                                  <option value =" <?php echo $item->id_journee; ?>"><?php echo $item->libelle;?></option>
                              <?php } ?>
                            </select>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class=" form-control-label">Equipe Domicile </label>
                          <div class="input-group">
                            <select  name= "equipe1" class="standardSelect" tabindex="1">
                              <?php
                                foreach ($equipe as $item) {?>
                                  <option value =" <?php echo $item->id_equipe; ?>"><?php echo $item->nom_equipe;?></option>
                               <?php } ?>
                            </select>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <p> VS </p>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class=" form-control-label">Equipe Exterieur</label>
                          <div class="input-group">
                            <select  name= "equipe2" class="standardSelect" tabindex="1">
                              <?php
                                foreach ($equipe as $item) {?>
                                  <option value =" <?php echo $item->id_equipe; ?>"><?php echo $item->nom_equipe;?></option>
                               <?php } ?>
                            </select>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class=" form-control-label">Arbitre centrale n°</label>
                          <div class="input-group">
                            <select  name= "arbitre_centre" class="standardSelect" tabindex="1">
                              <?php
                                foreach ($arbitre as $item) {?>
                                  <option value =" <?php echo $item->id_arbitre; ?>"><?php echo $item->nom_arbitre;?></option>
                               <?php } ?>
                            </select>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class=" form-control-label">Arbitre de touche N°1</label>
                          <div class="input-group">
                            <select  name= "arbitre_touche_1" class="standardSelect" tabindex="1">
                              <?php
                                foreach ($arbitre as $item) {?>
                                  <option value =" <?php echo $item->id_arbitre; ?>"><?php echo $item->nom_arbitre;?></option>
                               <?php } ?>
                            </select>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class=" form-control-label">Arbitre de touche N°2</label>
                          <div class="input-group">
                            <select  name= "arbitre_touche_2" class="standardSelect" tabindex="1">
                              <?php
                                foreach ($arbitre as $item) {?>
                                  <option value =" <?php echo $item->id_arbitre; ?>"><?php echo $item->nom_arbitre;?></option>
                              <?php } ?>
                            </select>
                          </div>
                      </div>
                    </div>

                    <div class="card-footer ">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Envoyer
                      </button>

                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>
                  </form>

                </div><!-- .row -->


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>


</body>
</html>

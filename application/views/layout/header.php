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
    <title>Championnat</title>
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
                    <a class="navbar-brand" href="./"><img src="<?php echo base_url() ?>images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url() ?>images/logo2.png" alt="Logo"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Joueur</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Player'); ?>">Liste des joueur</a></li>
                              <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Player/create_link'); ?>">Creer joueur</a></li>
                          </ul>
                      </li>
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Championnat</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Championship'); ?>">Calendrier</a></li>
                              <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Championship/ranking'); ?>">Classement</a></li>
                          </ul>
                      </li>
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Equipe</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Team/create_link'); ?>">Creer une equipe</a></li>
                          </ul>
                      </li>
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Gestion</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Day'); ?>">Gestion</a></li>
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
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>images/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="<?php echo site_url('Connexion/disconnect'); ?>"><i class="fa fa-power -off"></i>Logout</a>
                                <a class="nav-link" href="<?php echo site_url('Connexion/create_user_link'); ?>"><i class="fa fa-power -off"></i>Ajouter membre</a>
                        </div>
                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="<?php echo site_url('Connexion/create_user_link'); ?>"><i class="fa fa-power -off"></i>Ajouter membre</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

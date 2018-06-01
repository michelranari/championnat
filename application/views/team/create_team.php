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
                  <h3 class="menu-title">equipe</h3><!-- /.menu-title -->
                  <li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Player'); ?>">Liste des equipes</a></li>
                          <li><i class="fa fa-bars"></i><a href="<?php echo site_url('Player/create_link'); ?>">Creer equipe</a></li>
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

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">Ajouter une Equipe</div>
                      <div class="card-body card-block">
                        <form action="<?php echo site_url("Team/$action") ?>" method="post" class="form-horizontal">

                          <input name="id_equipe" type="hidden" <?php if (isset($equipe)) echo "value = \"" .  $equipe[0]->id_equipe . "\""?>>

                          <div class="form-group">
                            <label class=" form-control-label">Nom de l'équipe</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="nom_equipe" name="nom_equipe" placeholder="Nom de l'équipe"  class="form-control" <?php if (isset($equipe)) echo "value = \"" . $equipe[0]->nom_equipe . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Adresse</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="adresse_equipe" name="adresse_equipe" placeholder="adresse"  class="form-control" <?php if (isset($equipe)) echo "value = \"" . $equipe[0]->adresse_equipe . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Ville</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="ville_equipe" name="ville_equipe" placeholder="ville"  class="form-control" <?php if (isset($equipe)) echo "value = \"" . $equipe[0]->ville_equipe . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Code postal</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="code_p_equipe" name="code_p_equipe" placeholder="code postal" class="form-control" <?php if (isset($equipe)) echo "value = \"" . $equipe[0]->code_p_equipe . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Nom Stade</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="stade_equipe" name="stade_equipe" placeholder="stade"  class="form-control" <?php if (isset($equipe)) echo "value = \"" . $equipe[0]->stade_equipe . "\""?>>
                            </div>
                          </div>

                          <div class="card-footer ">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Envoyer
                            </button>

                            <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Recommencer
                            </button>
                          </div>

                        </form>

                      </div>
                    </div>
                  </div>

                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>

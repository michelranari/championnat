<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Championnat</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url() ?>apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico">

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
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                      <img class="align-content" src="<?php echo base_url() ?>images/logo.png" alt="">
                      <p>Ajouter un nouveau membre</p>
                </div>
                <div class="login-form">
                    <form action="<?php echo site_url("Connexion/try_add_user") ?>" method="post">
                        <div class="form-group">
                            <label>Entrez un Identifiant :</label>
                            <input type="text" name="login" class="form-control" placeholder="Identifiant">
                        </div>
                        <div class="form-group">
                            <label>Entrez un mot de passe :</label>
                            <input type="password" name ="password" class="form-control" placeholder="Mot de passe">
                        </div>
                        <button type="submit"  class="btn btn-primary btn-flat m-b-30 m-t-30">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>
</html>
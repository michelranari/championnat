
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">Ajouter une Equipe</div>
                      <div class="card-body card-block">
                        <form action="<?php echo site_url("Team/$action") ?>" method="post" class="form-horizontal">

                          <input name="id_equipe" type="hidden" <?php if (isset($joueur))echo "value = \"" .  $equipe[0]->id_equipe . "\""?>>

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

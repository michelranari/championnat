        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">Ajouter un joueur</div>
                      <div class="card-body card-block">
                        <form action="<?php echo site_url("Player/$action") ?>" method="post" class="form-horizontal">

                          <input name="id_joueur" type="hidden" <?php if (isset($joueur)) echo "value = \"" .  $joueur[0]->id_joueur . "\""?>>

                          <div class="form-group">
                            <label class=" form-control-label">Nom</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="nom_joueur" name="nom_joueur" placeholder="Nom"  class="form-control" <?php if (isset($joueur)) echo "value = \"" . $joueur[0]->nom_joueur . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Prenom</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="prenom_joueur" name="prenom_joueur" placeholder="prenom"  class="form-control" <?php if (isset($joueur)) echo "value = \"" . $joueur[0]->prenom_joueur . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                              <label class=" form-control-label">Date de naissance</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  <input type="date" id="date_n_joueurr" name="date_n_joueur"  class="form-control"<?php if (isset($joueur)) echo "value = \"" . $joueur[0]->date_n_joueur . "\""?>>
                              </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Poste</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="poste" name="poste" placeholder="poste" class="form-control" <?php if (isset($joueur)) echo "value = \"" . $joueur[0]->poste . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Numero Maillot</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="num_maillot" name="num_maillot" placeholder="numero maillot" class="form-control" <?php if (isset($joueur)) echo "value = \"" . $joueur[0]->num_maillot . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Numero licence</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="num_licence_joueur" name="num_licence_joueur" placeholder="Numero licence"  class="form-control" <?php if (isset($joueur)) echo "value = \"" . $joueur[0]->num_licence_joueur . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Equipe</label>
                              <div class="input-group">
                                <select  name= "equipe" class="standardSelect" tabindex="1">
                                  <?php
                                    foreach ($equipe as $item) {
                                       $selected = "";
                                        if ($joueur[0]->id_equipe == $item->id_equipe) {
                                               $selected = "selected";
                                        }?>
                                      <option  <?php echo $selected; ?> value =" <?php echo $item->id_equipe; ?>"><?php echo $item->nom_equipe;?></option>
                                   <?php } ?>
                                </select>
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

                      </div>
                    </div>
                  </div>

                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->


        <div class="content mt-3">
            <div class="animated fadeIn">
              <div class="card">
                <div class="card-body">
                  <div class="container">
                    <form action="<?php echo site_url("Match/edit_match") ?>" method="post" class="form-horizontal">

                      <input name="id_match" type="hidden" <?php echo "value = \"" .  $match[0]->id_match . "\""?>>
                      <input name="equipe1" type="hidden" <?php echo "value = \"" .  $match[0]->id_equipe . "\""?>>
                      <input name="equipe2" type="hidden" <?php echo "value = \"" .  $match[0]->id_equipe_deplacer . "\""?>>

                      <div class="row">
                        <div class="col-lg-4 text-lg-center">
                          <h3><?php echo $equipe_dom[0]->nom_equipe ?> </h1>
                        </div>
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4 text-lg-center">
                          <h3><?php echo $equipe_ext[0]->nom_equipe ?></h1>
                        </div>
                      </div><!-- .row -->

                      <div class="row">

                        <div class="col-lg-4 text-lg-center">
                          <p class="text-center">logo<p/>
                        </div>

                        <div class="col-lg-4 text-lg-center">

                          <div class="row">
                            <div class="col-lg-12 text-lg-center">
                              <div class="row form-group">
                                <div class="col-12 col-md-12">
                                    <select name="journee" id="select" class="form-control">
                                      <?php
                                        foreach ($all_journee as $item) {
                                           $selected = "";
                                            if ($journee[0]->id_journee == $item->id_journee) {
                                                   $selected = "selected";
                                            }?>
                                          <option  <?php echo $selected; ?> value =" <?php echo $item->id_journee; ?>"><?php echo $item->libelle;?></option>
                                       <?php } ?>
                                    </select>
                                  </div>
                              </div>
                            </div>

                            <div class="col-lg-12 text-lg-center">
                              <div class="form-group">
                                <div class="col-lg-12 text-lg-center">
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                      <input type="date" id="date_match" name="date_match"  class="form-control" <?php echo "value = \"" . $match[0]->date_match . "\""?>>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div><!-- .row -->
                        </div>

                        <div class="col-lg-4 text-lg-center">
                          <p class="text-center">logo<p/>
                        </div>
                      </div><!-- .row -->

                      <div class="row form-group">
                          <div class="col-lg-4 text-lg-center">
                            <input class="text-center form-control " type="text" id="text-input" name="score1" placeholder="Score equipe domicile" <?php echo "value = \"" . $match[0]->score1 . "\""?>>
                          </div>
                          <div class="col-lg-4  text-lg-center">
                            <h3> - </h3>
                          </div>
                          <div class="col-lg-4  text-lg-center">
                            <input class="text-center form-control " type="text" id="text-input" name="score2" placeholder="Score equipe exterieur" <?php echo "value = \"" . $match[0]->score2 . "\""?>>
                          </div>
                      </div><!-- .row-->

                      <div class="row">
                        <div class="col-lg-4 text-lg-center">
                          <p> Stade :
                            <br><?php echo $equipe_dom[0]->stade_equipe ?>
                          </p>
                        </div>
                        <div class="col-lg-4 text-lg-center">

                            <div class="row form-group">
                              <div class="col col-md-6"><label for="select" class=" form-control-label">Arbitre Centrale</label></div>
                              <div class="col-12 col-md-6">
                                <select name="arbitre_centre" id="select" class="form-control">
                                  <?php
                                    foreach ($all_arbitre as $item) {
                                       $selected = "";
                                        if ($arbitre[0]->id_arbitre == $item->id_arbitre) {
                                               $selected = "selected";
                                        }?>
                                      <option  <?php echo $selected; ?> value =" <?php echo $item->id_arbitre; ?>"><?php echo $item->nom_arbitre . " " . $item->prenom_arbitre ;?></option>
                                   <?php } ?>
                                </select>
                              </div>
                            </div>

                            <div class="row form-group">
                              <div class="col col-md-6"><label for="select" class=" form-control-label">Arbitre de touche n°1</label></div>
                              <div class="col-12 col-md-6">
                                <select name="arbitre_touche_1" id="select" class="form-control">
                                  <?php
                                    foreach ($all_arbitre as $item) {
                                       $selected = "";
                                        if ($arbitre[1]->id_arbitre == $item->id_arbitre) {
                                               $selected = "selected";
                                        }?>
                                      <option  <?php echo $selected; ?> value =" <?php echo $item->id_arbitre; ?>"><?php echo $item->nom_arbitre . " " .$item->prenom_arbitre ;?></option>
                                   <?php } ?>
                                </select>
                              </div>
                            </div>

                            <div class="row form-group">
                              <div class="col col-md-6"><label for="select" class=" form-control-label">Arbitre de touche n°2</label></div>
                              <div class="col-12 col-md-6">
                                <select name="arbitre_touche_2" id="select" class="form-control">
                                  <?php
                                    foreach ($all_arbitre as $item) {
                                       $selected = "";
                                        if ($arbitre[2]->id_arbitre == $item->id_arbitre) {
                                               $selected = "selected";
                                        }?>
                                      <option  <?php echo $selected; ?> value =" <?php echo $item->id_arbitre; ?>"><?php echo $item->nom_arbitre . " " .$item->prenom_arbitre ;?></option>
                                   <?php } ?>
                                </select>
                              </div>
                            </div>

                        </div>

                        <div class="col-lg-4">
                        </div>
                      </div><!-- .row -->
                      <div class="row">

                        <div class="col-lg-12 text-center ">
                          joué : <label class="switch switch-3d switch-success mr-3"><input type="checkbox" name="joue" class="switch-input" <?php if(strcmp($match[0]->joue, "t") == 0) echo "checked" ;?>> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                        </div>
                      </div><!-- .row -->
                      <hr>
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Envoyer
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

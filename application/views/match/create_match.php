
        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                  <form action="<?php echo site_url("Match/create_match") ?>" method="post" class="form-horizontal">

                    <div class="row">
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
                    </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                              <label class=" form-control-label">Equipe Domicile </label>
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

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                              <div class="input-group text-center">
                                <label class=" form-control-label">Equipe Exterieur</label>
                                <select  name= "equipe2" class="standardSelect" tabindex="1">
                                  <?php
                                    foreach ($equipe as $item) {?>
                                      <option value =" <?php echo $item->id_equipe; ?>"><?php echo $item->nom_equipe;?></option>
                                   <?php } ?>
                                </select>
                              </div>
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

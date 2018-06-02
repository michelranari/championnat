
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="row form-group">
                      <form action="<?php echo site_url("Day/create_day") ?>" method="post" class="form-horizontal">
                        <div class="col-3 col-md-6"><label for="select" class=" form-control-label"> Nombre de journée a créer :</label></div>
                        <div class="col-9 col-md-6">
                          <select name="create_day" id="select" class="form-control">
                              <?php
                                for ($i = 0; $i < (int)$nbTeam[0]->count * 2 ; $i++) { ?>
                                  <option value="<?php echo $i + 1; ?>"><?php echo $i + 1; ?></option>
                              <?php } ?>
                          </select>

                          <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Creer
                          </button>
                        </div>
                      </form>
                    </div>

                </div><!-- .row -->
                <div class="row">

                  <div class="row form-group">
                    <form action="<?php echo site_url("Day/create_day") ?>" method="post" class="form-horizontal">
                      <div class="col col-md-3"><label for="select" class=" form-control-label"> Modifier journée N° :</label></div>
                      <div class="col-12 col-md-6">
                        <select  name= "modif_day" class="standardSelect" tabindex="1">
                          <?php
                            foreach ($day as $item) {?>
                              <option value =" <?php echo $item->id_journee; ?>"><?php echo $item->libelle;?></option>
                           <?php } ?>
                        </select>
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Modifier
                        </button>
                      </div>
                    </form>
                  </div>

                </div><!-- .row -->

                <div class="row">
                  <a href="<?php echo site_url("match/create_match_link")?>"><button type="button" class="btn btn-warning">Créer un match</button></a>
                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

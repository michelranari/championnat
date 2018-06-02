
        <div class="content mt-3">
            <div class="animated fadeIn">
              <div class="card">
                <div class="card-body">
                  <div class="container">
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
                            <p class="text-center"> <?php echo $match[0]->date_match ?>
                              <br> <?php echo $journee[0]->libelle ?>
                            </p>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col-lg-12 text-lg-center">
                            <h1 class="text-center">
                              <?php if (!($match[0]->joue)){  echo $all_match[0]->score1 . " - " . $match[0]->score2;
                              } else {
                                echo " - ";
                              }?>
                             </h1>
                          </div>
                        </div><!-- .row -->
                      </div>

                      <div class="col-lg-4 text-lg-center">
                        <p class="text-center">logo<p/>
                      </div>
                    </div><!-- .row -->

                    <div class="row">
                      <div class="col-lg-4 text-lg-center">

                        <p> Stade :
                          <br><?php echo $equipe_dom[0]->stade_equipe ?>
                        </p>
                      </div>
                      <div class="col-lg-4 text-lg-center">
                          <p class="text-center"> <?php echo $arbitre[0]->role_arbitre. " : " . $arbitre[0]->nom_arbitre . " " . $arbitre[0]->prenom_arbitre  ?>
                            <br> <?php echo $arbitre[1]->role_arbitre. " : " . $arbitre[1]->nom_arbitre . " " . $arbitre[1]->prenom_arbitre  ?>
                            <br> <?php echo $arbitre[2]->role_arbitre. " : " . $arbitre[2]->nom_arbitre . " " . $arbitre[2]->prenom_arbitre  ?>
                          </p>
                      </div>
                      <div class="col-lg-4">
                      </div>
                    </div><!-- .row -->
                    <hr>
                    <a href="<?php $id = $match[0]->id_match; echo site_url("match/edit_match_link/$id")?>"><button type="button" class="btn btn-warning">Modifier</button></a>
                  </div>
                </div>
              </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

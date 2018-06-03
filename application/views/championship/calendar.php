
        <div class="content mt-3">
            <div class="animated fadeIn">
              <?php  for ($i = 0; $i < $nb_match[0]->nb_match - 1 ; $i++){ ?>
                <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <h4><?php echo $all_match[$i]->libelle; ?></h4>
                          </div>
                          <div class="card-body">
                              <ul class="list-unstyled">
                                  <?php
                                    $j = $i;
                                   while ($j < $nb_match[0]->nb_match && $all_match[$j]->id_journee == $all_match[$i]->id_journee) { ?>
                                     <?php $match =  $all_match[$j]->id_match;
                                     $lien = site_url("Match/match_card/$match");
                                      ?>
                                    <li><a href="<?php echo $lien ?>">
                                      <div class="container">
                                        <div class="row ">

                                          <div class="col-lg-12 ">
                                            <p class="text-center"> <?php echo $all_match[$j]->date_match; ?></p>
                                          </div>

                                        </div><!-- .row -->

                                        <div class="row">

                                          <div class="col-lg-4">
                                            <p class="text-center"><?php echo $all_match[$j]->equipe1; ?></p>
                                          </div>

                                          <div class="col-lg-4">
                                            <h1 class="text-center">
                                              <?php if (strcmp($all_match[$j]->joue, "t") == 0){  echo $all_match[$j]->score1 . " - " . $all_match[$j]->score2;
                                              } else {
                                                echo " - ";
                                              }?>
                                            </h1>
                                          </div>

                                          <div class="col-lg-4">
                                            <p class="text-center"><?php echo $all_match[$j]->equipe2; ?></p>
                                          </div>

                                        </div><!-- .row -->
                                      </div>

                                      </a>
                                    </li>
                                  <?php $j++; } ?>
                              </ul>

                          </div>
                      </div>
                  </div>
                </div><!-- .row -->
              <?php $i = $j -1;} ?>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

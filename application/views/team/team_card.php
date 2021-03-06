
        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <strong class="card-title mb-3"><?php echo $equipe[0]->nom_equipe ?></strong>
                              <a href="<?php $id = $equipe[0]->id_equipe; echo site_url("team/modify_link/$id")?>"><i class="fa fa-pencil"></i> Modifier</a>
                              <a href="<?php $id = $equipe[0]->id_equipe; echo site_url("team/delete_team/$id")?>"><i class="fa fa-trash-o"></i> Supprimer</a>
                          </div>
                          <div class="card-body">
                            <div class="col-md-6">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>images/admin.jpg" alt="Card image cap">
                                    <p>
                                      Adresse : <?php echo $equipe[0]->adresse_equipe ?>
                                      <br>Ville : <?php echo $equipe[0]->ville_equipe ?>
                                      <br>Code Postal : <?php echo $equipe[0]->code_p_equipe?>
                                      <br>Stade : <?php echo $equipe[0]->stade_equipe ?>
                                    </p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="mx-auto d-block">
                                  classement :
                                  <br>Nombre de points : <?php echo $equipe[0]->point ?>
                                  <br>Victoires : <?php echo $equipe[0]->nb_victoire ?>
                                  <br>Defaites : <?php echo $equipe[0]->nb_defaite ?>
                                  <br>Match nul  : <?php echo $equipe[0]->nb_nul ?>
                                  <br>Nombre de buts marqués : <?php echo $equipe[0]->but_marque ?>
                                  <br>Nombre de buts concedés : <?php echo $equipe[0]->but_encaisse ?>
                                  <br>différence de buts : <?php echo $equipe[0]->difference_but?>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div><!-- .row -->

                <div class="row">

                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <strong class="card-title">Liste des joueur</strong>
                          </div>
                          <div class="card-body">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Poste</th>
                                    <th scope="col">N° Maillot</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  foreach ($allplayer as $item) {
                                      $lien = site_url("Player/player_card/$item->id_joueur");?>
                                      <tr>
                                          <td><a href="<?php echo $lien ?>"><?php echo $item->nom_joueur; ?></td>
                                          <td><?php echo $item->prenom_joueur; ?></td>
                                          <td><?php echo $item->poste; ?></td>
                                          <td><?php echo $item->num_maillot ?></td>
                                       </tr>
                                      </a>
                                    <?php } ?>

                                </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

                </div><!-- .row -->

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

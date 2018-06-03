<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

          <div class="col-lg-12">
              <div class="card">
                  <div class="card-header">
                      <strong class="card-title">Classement</strong>
                  </div>
                  <div class="card-body">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Pos</th>
                            <th scope="col">Equipe</th>
                            <th scope="col">Pts</th>
                            <th scope="col">G</th>
                            <th scope="col">N</th>
                            <th scope="col">P</th>
                            <th scope="col">BP</th>
                            <th scope="col">BC</th>
                            <th scope="col">Dif</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($equipe as $item) {
                              $lien2 = site_url("Team/team_card/$item->id_equipe");?>
                              <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><a href="<?php echo $lien2 ?>"><?php echo $item->nom_equipe; ?></td>
                                  <td><?php echo $item->point; ?></td>
                                  <td><?php echo $item->nb_victoire; ?></td>
                                  <td><?php echo $item->nb_nul; ?></td>
                                  <td><?php echo $item->nb_defaite; ?></td>
                                  <td><?php echo $item->but_marque; ?></td>
                                  <td><?php echo $item->but_encaisse; ?></td>
                                  <td><?php echo $item->difference_but; ?></td>
                               </tr>
                              </a>
                            <?php $i++;}  ?>
                        </tbody>
                      </table>

                  </div>
              </div>
          </div>
        </div><!-- .row -->
    </div><!-- .animated -->
</div><!-- .content -->

</div><!-- /#right-panel -->

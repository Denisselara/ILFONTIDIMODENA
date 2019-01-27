<?php get_header(); ?>

<!-- carrousel -->
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-12" id="carousel">
        <div class="owl-carousel owl-carousel-fullwidth">
          <div class="item">
            <a href="#">
              <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/sitio/il_fonti_di_modena.jpg" alt="restaurant il fonti di modena">
              <div class="slider-copy">
                <h2>Bienvenidos</h2>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sitio/mesas.jpg" alt="mesas restaurant">
              <div class="slider-copy">
                <h2>Reserva tu mesa</h2>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sitio/pizza.jpg" alt="Deliciosas Pizzas">
              <div class="slider-copy">
                <h2>Especialidad en Pizza</h2>
              </div>
            </a>
          </div>
        </div>
      </div><!--cierre col 12-->
    </div><!--cierre row-->
  </div><!--cierre gto-cantainer carrousel-->

  <div class="gtco-section">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 gtco-heading text-center" id="carta">
          <h2 class="black-tipo"> <i class="fas fa-utensils padding_right2"></i> LA CARTA</h2>
          <p class="padding_top">Te invitamos a probar una verdadera degustación Italiana,<br>
             a continuación te presentamos nuestra carta completa.</p>
        </div>
      </div>
      <div class="row">
      <!--COMIENZO ANTIPASTOS-->
      <h3 class="titulos-carta">ANTIPASTOS</h3>

        <div class="col-md-12">
          <div class="owl-carousel owl-carousel-carousel">




                  <?php
                    $arg = array(
                      'post_type'		 => 'products',
                      'posts_per_page' => 6
                    );
                    $get_arg = new WP_Query( $arg );
                    while ( $get_arg->have_posts() ) {
                      $get_arg->the_post();
                    ?>

                      <div class="item">
                        <div class="gtco-item" href="<?php the_post_thumbnail_url( 'large' ); ?>">
                          <?php the_post_thumbnail( '', array( 'class' => 'img-responsive' ) ); ?>
                          <h4 class="container_platos">

                                  <?php the_title() ?>
                                </h4>
                                <p class="role">
                                  <?php the_content() ?>
                                </p>
                              </div>
                          </div>
                        </a>
                          </div>
                      </div>

                    <?php } wp_reset_postdata();
                  ?>





            </div>

            </div>


          </div><!--CIERRE ROW-->

          <div class="row">
          <!--COMIENZO ENSALADAS-->
          <h3 class="titulos-carta">ENSALADAS</h3>
            <div class="col-md-12">
              <div class="owl-carousel owl-carousel-carousel">
                <div class="item">
                  <div class="gtco-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/insalatta_danubio.jpg" alt="" class="img-responsive">
                    <div class="container_platos">
                    <h4> INSALATTA DANUBIO </h4>
                    <p class="role">Selección de lechugas, fondos de alcachofa, berenjenas asadas, tomates secos
                      zuccini grillado con aderezo de albahaca.</p>
                    <spam>$6.200</spam>
                  </div><!--cierre container platos-->
                  </div>
                </div>
                <div class="item">
                  <div class="gtco-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/insalatta_pilarre.jpg" alt="" class="img-responsive">
                    <div class="container_platos">
                    <h4> INSALATTA PILARRE </h4>
                    <p class="role">Espinacas, panceta crujiente, nueces, tomates asados y champiñones
                    con aderezo dulce de aceto balsámico.</p>
                    <spam>$6.500</spam>
                  </div><!--cierre container platos-->
                  </div>
                </div>
                <div class="item">
                  <div class="gtco-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/insalatta_andree.jpg" alt="" class="img-responsive">
                    <div class="container_platos">
                    <h4> INSALATTA ANDREÉ </h4>
                    <p class="role">Selección de lechugas, rúcula, queso de cabra, prosciutto,
                      aceitunas, pimientos confitados y aderezo de orégano.</p>
                    <spam>$7.000</spam>
                  </div><!--cierre container platos-->
                  </div>
                </div>

              </div><!--cierre owl-->
            </div><!--cierre col 12-->
              </div><!--CIERRE ROW-->

              <div class="row">
              <!--COMIENZO SOPAS-->
              <h3 class="titulos-carta">SOPAS</h3>
                <div class="col-md-12">
                  <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                      <div class="gtco-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/zuppa_di_chef.jpg" alt="" class="img-responsive">
                        <div class="container_platos">
                        <h4> ZUPPA DI CHEF </h4>
                        <p class="role">Sopa del día seleccionada por el Chef.</p>
                        <spam>$5.300</spam>
                      </div><!--cierre container platos-->
                      </div>
                    </div>
                    <div class="item">
                      <div class="gtco-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/ministrone_genovese.jpg" alt="" class="img-responsive">
                        <div class="container_platos">
                        <h4> MINISTRONE GENOVESE </h4>
                        <p class="role">Sopa tradicional italiana a base de verduras, porotos blancos y pesto de albahaca.</p>
                        <spam>$5.300</spam>
                      </div><!--cierre container platos-->
                      </div>
                    </div>



                  </div><!--cierre owl-->
                </div><!--cierre col 12-->
                  </div><!--CIERRE ROW-->

                  <div class="row">
                  <!--COMIENZO PIZZAS TRADICIONAL-->
                  <h3 class="titulos-carta">PIZZAS TRADICIONALES</h3>
                    <div class="col-md-12">
                      <div class="owl-carousel owl-carousel-carousel">
                        <div class="item">
                          <div class="gtco-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/marguerita.jpg" alt="" class="img-responsive">
                            <div class="container_platos">
                            <h4> MARGHERITA </h4>
                            <p class="role">Mozzarella, pomodoro, albahaca fresca, aceite de oliva.</p>
                            <spam>$7.200</spam>
                          </div><!--cierre container platos-->
                          </div>
                        </div>
                        <div class="item">
                          <div class="gtco-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/marinara.jpg" alt="" class="img-responsive">
                            <div class="container_platos">
                            <h4> MARINARA </h4>
                            <p class="role">Pomodoro,láminas de ajo, aceite de oliva.</p>
                            <spam>$5.900</spam>
                          </div><!--cierre container platos-->
                          </div>
                        </div>
                        <div class="item">
                          <div class="gtco-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/caprissiosa.jpg" alt="" class="img-responsive">
                            <div class="container_platos">
                            <h4> CAPRISSIOSA </h4>
                            <p class="role">Mozzarella, pomodoro, champiñones, jamón, fondos de alcachofa,
                              aceite de oliva.</p>
                            <spam>$7.100</spam>
                          </div><!--cierre container platos-->
                          </div>
                        </div>
                        <div class="item">
                          <div class="gtco-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/cinque_formaggi.jpg" alt="" class="img-responsive">
                            <div class="container_platos">
                            <h4> CINQUE FORMAGGI </h4>
                            <p class="role">Mozzarella, queso azul, ricotta, parmesano, mozzarella di buffala.</p>
                            <spam>$7.100</spam>
                          </div><!--cierre container platos-->
                          </div>
                        </div>

                      </div><!--cierre owl-->
                    </div><!--cierre col 12-->
                      </div><!--CIERRE ROW-->

                      <div class="row">
                      <!--COMIENZO PIZZAS-->
                      <h3 class="titulos-carta">PIZZE SPECIALI</h3>
                        <div class="col-md-12">
                          <div class="owl-carousel owl-carousel-carousel">
                            <div class="item">
                              <div class="gtco-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/pepperoni.jpg" alt="" class="img-responsive">
                                <div class="container_platos">
                                <h4> PEPPERONI </h4>
                                <p class="role">Mozzarella, pomodoro, pepperoni.</p>
                                <spam>$6.200</spam>
                              </div><!--cierre container platos-->
                              </div>
                            </div>
                            <div class="item">
                              <div class="gtco-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/putannesca.jpg" alt="" class="img-responsive">
                                <div class="container_platos">
                                <h4> PUTANNESCA </h4>
                                <p class="role">Mozzarella, pomodoro, ajo, pepperoncino, pepperoni, aceitunas.</p>
                                <spam>$6.500</spam>
                              </div><!--cierre container platos-->
                              </div>
                            </div>
                            <div class="item">
                              <div class="gtco-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/putannesca.jpg" alt="" class="img-responsive">
                                <div class="container_platos">
                                <h4> CAPRESSE </h4>
                                <p class="role"> Mozzarella, pomodoro, tomate, albahaca.</p>
                                <spam>$7.000</spam>
                              </div><!--cierre container platos-->
                              </div>
                            </div>
                            <div class="item">
                              <div class="gtco-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/mediterranea.jpg" alt="" class="img-responsive">
                                <div class="container_platos">
                                <h4> MEDITERRANEA </h4>
                                <p class="role">Mozzarella, pomodoro, queso de cabra, pimentón, rúcula, aceituna.</p>
                                <spam>$5.300</spam>
                              </div><!--cierre container platos-->
                              </div>
                            </div>
                            <div class="item">
                              <div class="gtco-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/torino.jpg" alt="" class="img-responsive">
                                <div class="container_platos">
                                <h4> TORINO </h4>
                                <p class="role">Mozzarella, pomodoro, pepperoni, champiñon, cebolla morada, aceituna.</p>
                                <spam>$5.300</spam>
                              </div><!--cierre container platos-->
                              </div>
                            </div>
                            <div class="item">
                              <div class="gtco-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/vegetariana.jpg" alt="" class="img-responsive">
                                <div class="container_platos">
                                <h4>VEGETARIANA </h4>
                                <p class="role">Mozzarella, pomodoro, esparrago, pimentón, rúcula, choclo.</p>
                                <spam>$7.000</spam>
                              </div><!--cierre container platos-->
                              </div>
                            </div>
                            <div class="item">
                              <div class="gtco-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/griega.jpg" alt="" class="img-responsive">
                                <div class="container_platos">
                                <h4>GRIEGA </h4>
                                <p class="role">Mozzarella, pomodoro, queso de cabra, berenjena, cebolla.</p>
                                <spam>$5.300</spam>
                              </div><!--cierre container platos-->
                              </div>
                            </div>

                          </div><!--cierre owl-->
                        </div><!--cierre col 12-->
                          </div><!--CIERRE ROW-->

              <div class="space"> </div>

                          <div class="row">
                          <!--COMIENZO POSTRES-->
                          <h3 class="titulos-carta">POSTRES</h3>
                            <div class="col-md-12">
                              <div class="owl-carousel owl-carousel-carousel">
                                <div class="item">
                                  <div class="gtco-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/gelato.jpg" alt="" class="img-responsive">
                                    <div class="container_platos">
                                    <h4> GELATO </h4>
                                    <p class="role">3 bolas de helado.</p>
                                    <spam>$2.500</spam>
                                  </div><!--cierre container platos-->
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gtco-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/gelato_di_ciocolatto.jpg" alt="" class="img-responsive">
                                    <div class="container_platos">
                                    <h4> GELATO DI CIOCCOLATO </h4>
                                    <p class="role">3 bolas de helado.</p>
                                    <spam>$2.500</spam>
                                  </div><!--cierre container platos-->
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gtco-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/panna_cotta.jpg" alt="" class="img-responsive">
                                    <div class="container_platos">
                                    <h4> PANNA COTTA </h4>
                                    <p class="role">Postre de crema y manjar.</p>
                                    <spam>$3.500</spam>
                                  </div><!--cierre container platos-->
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gtco-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/tiramisu.jpg" alt="" class="img-responsive">
                                    <div class="container_platos">
                                    <h4> TIRAMISU </h4>
                                    <p class="role">Tradicional tiramisú cremoso de mascarpone con base de galletas maceradas
                                      en licor de café.</p>
                                    <spam>$3.500</spam>
                                  </div><!--cierre container platos-->
                                  </div>
                                </div>

                              </div><!--cierre owl-->
                            </div><!--cierre col 12-->
                              </div><!--CIERRE ROW-->

                              <div class="row">
                              <!--COMIENZO INFUSIONES-->
                              <h3 class="titulos-carta">INFUSIONES</h3>
                                <div class="col-md-12">
                                  <div class="owl-carousel owl-carousel-carousel">
                                    <div class="item">
                                      <div class="gtco-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/infusiones.jpg" alt="" class="img-responsive">
                                        <div class="container_platos">
                                        <h4> INFUSIONES </h4>
                                        <spam>$1.100</spam>
                                      </div><!--cierre container platos-->
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="gtco-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/espresso.jpg" alt="" class="img-responsive">
                                        <div class="container_platos">
                                        <h4> CAFÉ ESPRESSO </h4>

                                        <spam>$1.200</spam>
                                      </div><!--cierre container platos-->
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="gtco-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/latte.jpg" alt="" class="img-responsive">
                                        <div class="container_platos">
                                        <h4> LATTE </h4>

                                        <spam class="role">$2.100</spam>
                                      </div><!--cierre container platos-->
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="gtco-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/moccaccino.jpg" alt="" class="img-responsive">
                                        <div class="container_platos">
                                        <h4> MOCCACCINO </h4>
                                      <spam class="role">$2.000</spam>
                                      </div><!--cierre container platos-->
                                      </div>
                                    </div>

                                  </div><!--cierre owl-->
                                </div><!--cierre col 12-->
                                  </div><!--CIERRE ROW-->



        </div><!--CIERRE CONTAINER-->
      </div><!--cierre gtco-section-->
    </div><!--cierre id page-->


<!--COMIENZO SECTION RESERVAS-->
  <div class="gtco-section" id="reserva">
    <div class="gtco-container reservas">
      <div class="row">
        <div class="col-md-12">
          <h2 class="center black-tipo"> <a href=""> RESERVAS </a></h2>

        </div>
      </div>
    </div>
  </div><!--CIERRE GTCO-SECTION-->

<?php get_footer(); ?>

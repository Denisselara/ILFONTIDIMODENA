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
            <!--AQUÍ COMIENZA EL CPT-->
            <?php
              $arg = array(
                'category_name' => 'ANTIPASTO',
                'post_type'		 => 'product',
                'posts_per_page' => 10
              );
              $get_arg = new WP_Query( $arg );
              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>

            <?php $imagen = get_field('imagen'); ?>

                <div class="item">
                  <div class="gtco-item">
                    <?php $imagen = get_field( 'imagen' ); ?>
                    <?php if ( $imagen ) { ?>
                    	<img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                    <?php } ?>
                    <div class="container_platos">
                    <h4> <?php the_field( 'nombre' ); ?> </h4>
                    <p class="role"> <?php the_field( 'descripcion' ); ?> </p>
                    <spam>  <?php the_field( 'valor' ); ?></spam>
                  </div><!--cierre container platos-->
                  </div>
                </div>

              <?php } wp_reset_postdata(); ?>

            </div><!--CIERRE OWL-CAROUSEL-->
          </div><!--CIERRE COL12-->
          </div><!--CIERRE ROW-->
          <!--AQUÍ TERMINA EL CPT-->

          <div class="row">
          <!--COMIENZO ENSALADAS-->
          <h3 class="titulos-carta">ENSALADAS</h3>
            <div class="col-md-12">
              <div class="owl-carousel owl-carousel-carousel">

                <!--AQUÍ COMIENZA EL CPT-->
                <?php
                  $arg = array(
                    'category_name' => 'ENSALADAS',
                    'post_type'		 => 'product',
                    'posts_per_page' => 10
                  );
                  $get_arg = new WP_Query( $arg );
                  while ( $get_arg->have_posts() ) {
                    $get_arg->the_post();
                  ?>

                <?php $imagen = get_field('imagen'); ?>

                    <div class="item">
                      <div class="gtco-item">
                        <?php $imagen = get_field( 'imagen' ); ?>
                        <?php if ( $imagen ) { ?>
                          <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                        <?php } ?>
                        <div class="container_platos">
                        <h4> <?php the_field( 'nombre' ); ?> </h4>
                        <p class="role"> <?php the_field( 'descripcion' ); ?> </p>
                        <spam>  <?php the_field( 'valor' ); ?></spam>
                      </div><!--cierre container platos-->
                      </div>
                    </div>

                  <?php } wp_reset_postdata(); ?>

                </div><!--CIERRE OWL-CAROUSEL-->
              </div><!--CIERRE COL12-->
              </div><!--CIERRE ROW-->
              <!--AQUÍ TERMINA EL CPT-->

              <div class="row">
              <!--COMIENZO SOPAS-->
              <h3 class="titulos-carta">SOPAS</h3>
                <div class="col-md-12">
                  <div class="owl-carousel owl-carousel-carousel">
                    <!--AQUÍ COMIENZA EL CPT-->
                    <?php
                      $arg = array(
                        'category_name' => 'SOPAS',
                        'post_type'		 => 'product',
                        'posts_per_page' => 10
                      );
                      $get_arg = new WP_Query( $arg );
                      while ( $get_arg->have_posts() ) {
                        $get_arg->the_post();
                      ?>

                    <?php $imagen = get_field('imagen'); ?>

                        <div class="item">
                          <div class="gtco-item">
                            <?php $imagen = get_field( 'imagen' ); ?>
                            <?php if ( $imagen ) { ?>
                              <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                            <?php } ?>
                            <div class="container_platos">
                            <h4> <?php the_field( 'nombre' ); ?> </h4>
                            <p class="role"> <?php the_field( 'descripcion' ); ?> </p>
                            <spam>  <?php the_field( 'valor' ); ?></spam>
                          </div><!--cierre container platos-->
                          </div>
                        </div>

                      <?php } wp_reset_postdata(); ?>

                    </div><!--CIERRE OWL-CAROUSEL-->
                  </div><!--CIERRE COL12-->
                  </div><!--CIERRE ROW-->
                  <!--AQUÍ TERMINA EL CPT-->

                  <div class="row">
                  <!--COMIENZO PIZZAS TRADICIONAL-->
                  <h3 class="titulos-carta">PIZZAS TRADICIONALES</h3>
                    <div class="col-md-12">
                      <div class="owl-carousel owl-carousel-carousel">
                        <!--AQUÍ COMIENZA EL CPT-->
                        <?php
                          $arg = array(
                            'category_name' => 'PIZZAS_TRADICIONALES',
                            'post_type'		 => 'product',
                            'posts_per_page' => 10
                          );
                          $get_arg = new WP_Query( $arg );
                          while ( $get_arg->have_posts() ) {
                            $get_arg->the_post();
                          ?>

                        <?php $imagen = get_field('imagen'); ?>

                            <div class="item">
                              <div class="gtco-item">
                                <?php $imagen = get_field( 'imagen' ); ?>
                                <?php if ( $imagen ) { ?>
                                  <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                                <?php } ?>
                                <div class="container_platos">
                                <h4> <?php the_field( 'nombre' ); ?> </h4>
                                <p class="role"> <?php the_field( 'descripcion' ); ?> </p>
                                <spam>  <?php the_field( 'valor' ); ?></spam>
                              </div><!--cierre container platos-->
                              </div>
                            </div>

                          <?php } wp_reset_postdata(); ?>

                        </div><!--CIERRE OWL-CAROUSEL-->
                      </div><!--CIERRE COL12-->
                      </div><!--CIERRE ROW-->
                      <!--AQUÍ TERMINA EL CPT-->

                      <div class="row">
                      <!--COMIENZO PIZZAS-->
                      <h3 class="titulos-carta">PIZZE SPECIALI</h3>
                        <div class="col-md-12">
                          <div class="owl-carousel owl-carousel-carousel">
                            <!--AQUÍ COMIENZA EL CPT-->
                            <?php
                              $arg = array(
                                'category_name' => 'PIZZE_SPECIALI',
                                'post_type'		 => 'product',
                                'posts_per_page' => 10
                              );
                              $get_arg = new WP_Query( $arg );
                              while ( $get_arg->have_posts() ) {
                                $get_arg->the_post();
                              ?>

                            <?php $imagen = get_field('imagen'); ?>

                                <div class="item">
                                  <div class="gtco-item">
                                    <?php $imagen = get_field( 'imagen' ); ?>
                                    <?php if ( $imagen ) { ?>
                                      <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                                    <?php } ?>
                                    <div class="container_platos">
                                    <h4> <?php the_field( 'nombre' ); ?> </h4>
                                    <p class="role"> <?php the_field( 'descripcion' ); ?> </p>
                                    <spam>  <?php the_field( 'valor' ); ?></spam>
                                  </div><!--cierre container platos-->
                                  </div>
                                </div>

                              <?php } wp_reset_postdata(); ?>

                            </div><!--CIERRE OWL-CAROUSEL-->
                          </div><!--CIERRE COL12-->
                          </div><!--CIERRE ROW-->
                          <!--AQUÍ TERMINA EL CPT-->

              <div class="space"> </div>

                          <div class="row">
                          <!--COMIENZO POSTRES-->
                          <h3 class="titulos-carta">POSTRES</h3>
                            <div class="col-md-12">
                              <div class="owl-carousel owl-carousel-carousel">
                                <!--AQUÍ COMIENZA EL CPT-->
                                <?php
                                  $arg = array(
                                    'category_name' => 'POSTRES',
                                    'post_type'		 => 'product',
                                    'posts_per_page' => 10
                                  );
                                  $get_arg = new WP_Query( $arg );
                                  while ( $get_arg->have_posts() ) {
                                    $get_arg->the_post();
                                  ?>

                                <?php $imagen = get_field('imagen'); ?>

                                    <div class="item">
                                      <div class="gtco-item">
                                        <?php $imagen = get_field( 'imagen' ); ?>
                                        <?php if ( $imagen ) { ?>
                                          <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                                        <?php } ?>
                                        <div class="container_platos">
                                        <h4> <?php the_field( 'nombre' ); ?> </h4>
                                        <p class="role"> <?php the_field( 'descripcion' ); ?> </p>
                                        <spam>  <?php the_field( 'valor' ); ?></spam>
                                      </div><!--cierre container platos-->
                                      </div>
                                    </div>

                                  <?php } wp_reset_postdata(); ?>

                                </div><!--CIERRE OWL-CAROUSEL-->
                              </div><!--CIERRE COL12-->
                              </div><!--CIERRE ROW-->
                              <!--AQUÍ TERMINA EL CPT-->

                              <div class="row">
                              <!--COMIENZO INFUSIONES-->
                              <h3 class="titulos-carta">INFUSIONES</h3>
                                <div class="col-md-12">
                                  <div class="owl-carousel owl-carousel-carousel">
                                    <!--AQUÍ COMIENZA EL CPT-->
                                    <?php
                                      $arg = array(
                                        'category_name' => 'INFUSIONES',
                                        'post_type'		 => 'product',
                                        'posts_per_page' => 10
                                      );
                                      $get_arg = new WP_Query( $arg );
                                      while ( $get_arg->have_posts() ) {
                                        $get_arg->the_post();
                                      ?>

                                    <?php $imagen = get_field('imagen'); ?>

                                        <div class="item">
                                          <div class="gtco-item">
                                            <?php $imagen = get_field( 'imagen' ); ?>
                                            <?php if ( $imagen ) { ?>
                                              <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                                            <?php } ?>
                                            <div class="container_platos">
                                            <h4> <?php the_field( 'nombre' ); ?> </h4>
                                            <p class="role"> <?php the_field( 'descripcion' ); ?> </p>
                                            <spam>  <?php the_field( 'valor' ); ?></spam>
                                          </div><!--cierre container platos-->
                                          </div>
                                        </div>

                                      <?php } wp_reset_postdata(); ?>

                                    </div><!--CIERRE OWL-CAROUSEL-->
                                  </div><!--CIERRE COL12-->
                                  </div><!--CIERRE ROW-->
                                  <!--AQUÍ TERMINA EL CPT-->

                                  <div class="row">
                                  <!--COMIENZO INFUSIONES-->
                                  <h3 class="titulos-carta">BEBIDAS</h3>
                                    <div class="col-md-12">
                                      <div class="owl-carousel owl-carousel-carousel">
                                        <!--AQUÍ COMIENZA EL CPT-->
                                        <?php
                                          $arg = array(
                                            'category_name' => 'BEBIDAS',
                                            'post_type'		 => 'product',
                                            'posts_per_page' => 10
                                          );
                                          $get_arg = new WP_Query( $arg );
                                          while ( $get_arg->have_posts() ) {
                                            $get_arg->the_post();
                                          ?>

                                        <?php $imagen = get_field('imagen'); ?>

                                            <div class="item">
                                              <div class="gtco-item">
                                                <?php $imagen = get_field( 'imagen' ); ?>
                                                <?php if ( $imagen ) { ?>
                                                  <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                                                <?php } ?>
                                                <div class="container_platos">
                                                <h4> <?php the_field( 'nombre' ); ?> </h4>
                                                <p class="role"> <?php the_field( 'descripcion' ); ?> </p>
                                                <spam>  <?php the_field( 'valor' ); ?></spam>
                                              </div><!--cierre container platos-->
                                              </div>
                                            </div>

                                          <?php } wp_reset_postdata(); ?>

                                        </div><!--CIERRE OWL-CAROUSEL-->
                                      </div><!--CIERRE COL12-->
                                      </div><!--CIERRE ROW-->
                                      <!--AQUÍ TERMINA EL CPT-->



        </div><!--CIERRE CONTAINER-->
      </div><!--cierre gtco-section-->
    </div><!--cierre id page-->


<!--COMIENZO SECTION RESERVAS-->
  <div class="gtco-section" id="reserva">
    <div class="gtco-container reservas">
      <div class="row">
        <div class="col-md-12 ">
          <h2 class="center black-tipo"> <!--<a href=""> RESERVAS </a>--> RESERVAS</h2>

    <form class="form-transparente">
      <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">número de personas</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>más</option>
          </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Fecha y Motivo</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>

     <button type="button" class="btn btn-primary btn-md"> Enviar</button>
        </div>
      </div>
    </div>
  </div><!--CIERRE GTCO-SECTION-->

<?php get_footer(); ?>

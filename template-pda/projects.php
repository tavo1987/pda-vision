<!--========================================================
    PROYECTOS
    ========================================================-->


<div class="container-proyect">
	

<!--========================================================
    ZONA NORTE
    ========================================================-->	
	<div class="project-items norte">

		<?php 
			$filtro = array(		
				'post_type' => 'proyectos',

				'tax_query' => array(
					array(
					'taxonomy' => 'zona',
					'field'    => 'term_id',
					'terms'    => 26,
					),
				),
			);
			
			$zona_norte = new WP_Query( $filtro );
			
		 ?>

		
		<div class="project cerrar-norte">

			 <!--INICIO TITULO-->
			<div class="btn-norte">
				X
			</div>

			<div class="project__container-thumb-title">
				<div class="project__thumbnail">
					<img src="http://www.worldvision.org.ec/wp-content/uploads/2015/09/ZonaNorte.jpg" alt="">
					<h3 class="project__thumbnail__caption">Zona Norte</h3>
				</div>
				<div class="project__title">
					<h2 class="btn-carchi">CARCHI - IMBABURA</h2>
					<h2 class="btn-esmeraldas">ESMERALDAS</h2>
				</div>
				
			</div>
			
			<?php if ( $zona_norte->have_posts() ) : while ( $zona_norte->have_posts() ) : $zona_norte->the_post(); ?>

				
					
				<?php if( get_the_ID() == 3453/*CARCHI*/):?>
					<div class="project__content carchi">
					  <?php the_content();?>
					</div>
				<?php endif;?>

				<?php if(get_the_ID() == 3464/*ESMERALDAS*/):?>
					<div class="project__content esmeraldas">
					  <?php the_content();?>
					</div>
				<?php endif;?>

				<!-- <div class="project__map">
					<?php /*the_field('mapa')*/ ?>
				</div> -->

			<?php endwhile; ?>
		</div>
			<!-- post navigation -->
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<h2>No se encontrarón proyectos</h2>
			<?php endif; ?>
	</div><!--fin de zona norte-->


	
<!--========================================================
    ZONA COSTA
    ========================================================-->
	<div class="project-items costa">
		<?php 
			$filtro = array(		
				'post_type' => 'proyectos',

				'tax_query' => array(
					array(
					'taxonomy' => 'zona',
					'field'    => 'term_id',
					'terms'    => 29,
					),
				),
			);
			
			$zona_costa = new WP_Query( $filtro );
			
		 ?>
		
		<div class="project cerrar-costa">
			<!--INICIO TITULO-->
			<div class="btn-costa">
				X
			</div>		

			<div class="project__container-thumb-title">
				<div class="project__thumbnail">
					<img src="http://www.worldvision.org.ec/wp-content/uploads/2015/09/ZonaCosta.jpg" alt="">
					<h3 class="project__thumbnail__caption">Zona Costa</h3>
				</div>
				<div class="project__title">
					<h2 class="btn-los-rios">LOS RIOS</h2>
				</div>

				<div class="project__title">
					<h2 class="btn-manabi">MANABÍ</h2>
				</div>
				
			</div>
			
							
			<?php if ( $zona_costa->have_posts() ) : while ( $zona_costa->have_posts() ) : $zona_costa->the_post(); ?>

				<?php if( get_the_ID() == 3467/*LOS RIOS*/):?>
					<div class="project__content los-rios">
					  <?php the_content();?>
					</div>
				<?php endif;?>

				<?php if(get_the_ID() == 3454/*MANABI*/):?>
					<div class="project__content manabi">
					  <?php the_content();?>
					</div>
				<?php endif;?>

				<!-- <div class="project__map">
					<?php /*the_field('mapa')*/ ?>
				</div> -->

			<?php endwhile; ?>
		</div>
			<!-- post navigation -->
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<h2>No se encontrarón proyectos</h2>
			<?php endif; ?>
	</div>



<!--========================================================
    ZONA CENTRO
    ========================================================-->
	<div class="project-items centro">
		<?php 
			$filtro = array(		
				'post_type' => 'proyectos',

				'tax_query' => array(
					array(
					'taxonomy' => 'zona',
					'field'    => 'term_id',
					'terms'    => 28,
					),
				),
			);
			
			$zona_centro = new WP_Query( $filtro );
			
		 ?>
		
		<div class="project cerrar-centro">
			<!--INICIO TITULO-->
			<div class="btn-centro">
				X
			</div>		

			<div class="project__container-thumb-title">
				<div class="project__thumbnail">
					<img src="http://www.worldvision.org.ec/wp-content/uploads/2015/09/ZonaCentro.jpg" alt="">
					<h3 class="project__thumbnail__caption">Zona Centro</h3>
				</div>
				<div class="project__title">
					<h2 class="btn-tungurahua">TUNGURAHUA</h2>
					<h2 class="btn-cotopaxi">COTOPAXI</h2>
				</div>
			</div>
			
							
			<?php if ( $zona_centro->have_posts() ) : while ( $zona_centro->have_posts() ) : $zona_centro->the_post(); ?>
				
				<?php if( get_the_ID() == 3456/*TUNGURAHUA*/):?>
					<div class="project__content tungurahua">
					  <?php the_content();?>
					</div>
				<?php endif;?>

				<?php if(get_the_ID() == 3469/*COTOPAXI*/):?>
					<div class="project__content cotopaxi">
					  <?php the_content();?>
					</div>
				<?php endif;?>

			<?php endwhile; ?>
		</div>
			<!-- post navigation -->
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<h2>No se encontrarón proyectos</h2>
			<?php endif; ?>
	</div>



<!--========================================================
    ZONA SUR
    ========================================================-->
	<div class="project-items sur">

		<?php 
			$filtro = array(		
				'post_type' => 'proyectos',

				'tax_query' => array(
					array(
					'taxonomy' => 'zona',
					'field'    => 'term_id',
					'terms'    => 27,
					),
				),
			);
			
			$zona_sur = new WP_Query( $filtro );
			
		 ?>
		
		<div class="project cerrar-sur">
			<!--INICIO TITULO-->
			<div class="btn-sur">
				X
			</div>		

			<div class="project__container-thumb-title">
				<div class="project__thumbnail">
					<img src="http://www.worldvision.org.ec/wp-content/uploads/2015/09/ZonaSur.jpg" alt="">
					<h3 class="project__thumbnail__caption">Zona Sur</h3>
				</div>
				<div class="project__title">
					<h2 class="btn-chimborazo">CHIMBORAZO</h2>
					<h2 class="btn-bolivar">BOLIVAR</h2>
				</div>
				
			</div>
			
							
			<?php if ( $zona_sur->have_posts() ) : while ( $zona_sur->have_posts() ) : $zona_sur->the_post(); ?>
				<?php if( get_the_ID() == 3455/*CHIMBORAZO*/):?>
					<div class="project__content chimborazo">
					  <?php the_content();?>
					</div>
				<?php endif;?>

				<?php if(get_the_ID() == 3472/*BOLIVAR*/):?>
					<div class="project__content bolivar">
					  <?php the_content();?>
					</div>
				<?php endif;?>

				<!-- <div class="project__map">
					<?php /*the_field('mapa')*/ ?>
				</div> -->

			<?php endwhile; ?>
		</div>
			<!-- post navigation -->
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<h2>No se encontrarón proyectos</h2>
			<?php endif; ?>
		
	</div>

	
</div>
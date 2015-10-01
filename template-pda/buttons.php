
<div class="group-buttons">
	
	<div class="content-buttons wow bounceInLeft">
		<div class="button"  href="#" data-wow-delay=".5s">
			<?php 
				$field = get_field_object('programas_y_proyectos');
				echo $field['label'];
			 ?>
		</div>

		<div class="content programas">
			<?php the_field('programas_y_proyectos') ?>
			
		</div>
	</div>

	<div class="content-buttons wow bounceInRight">
		<div class="button"  href="#" data-wow-delay=".6s">
			<?php 
				$field = get_field_object('estadisticas_relevantes');
				echo $field['label'];
			 ?>
			
		</div>

		<div class="content  estadisticas">
			<?php the_field('estadisticas_relevantes') ?>
		</div>
	</div>
	


	<div class="content-buttons wow bounceInLeft">
		<div class="button dashicons-format-video"  href="#" data-wow-delay=".5s">
			<?php 
				$field = get_field_object('galeria_fotografica_y_videoteca');
				echo $field['label'];
			 ?>
		</div>

		<div class="content galeria">
			<?php the_field('galeria_fotografica_y_videoteca') ?>
		</div>
	</div>
		

	<div class="content-buttons wow bounceInRight">
		<div class="button"  href="#" data-wow-delay=".8s">
			<?php 
				$field = get_field_object('investigacion_y_estudio');
				echo $field['label'];
			 ?>
		</div>
		<div class="content investigacion">
			<?php the_field('investigacion_y_estudio') ?>
		</div>
	</div>

	<div class="content-buttons wow bounceInUp preguntas">
		<div class="button"  href="#" data-wow-delay=".8s">
			<?php 
				$field = get_field_object('preguntas_frecuentes');
				echo $field['label'];
			 ?>
		</div>
		<div class="content investigacion">
			<?php the_field('preguntas_frecuentes') ?>
		</div>
	</div>

</div>
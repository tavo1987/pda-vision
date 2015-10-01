<?php 
	/*Template Name: Proyectos*/
 ?>

 <?php get_header();?>


<div class="main-content main-pda">
    <div class="container">
		
		<div class="bg-map">

			<!--INICIO ZONAS-->
	        <div class="container-zonas">
	            <?php require_once( get_stylesheet_directory() . '/template-pda/zonas.php' ); ?>
	        </div>

	        <!--INICIO PROYECTOS-->
	        <?php require_once( get_stylesheet_directory() . '/template-pda/projects.php' ); ?>
		</div>
		
		<!--INICIO BOTONES-->
		<?php require_once(get_stylesheet_directory().'/template-pda/buttons.php') ?>
        
    </div>
</div>

<?php get_template_part('templates/testimonials'); ?>

<?php get_footer('pda'); ?>

jQuery(document).ready(function($) {


	//acordeon 
	$('.button').on('click', function() {
		$(this).next('.content').slideToggle();
	});



	/*===========================================================================
	/*BOTONES PARA ABRIR ZONAS
	/*===========================================================================*/
	$('.zona-norte').on('click', function(even) {
		event.preventDefault();
		$('.norte  .project').toggleClass('active animated zoomInDown');
		$('.preguntas').hide();
		
	});

	$('.zona-centro').on('click', function(even) {
		even.preventDefault();
		$('.centro  .project').toggleClass('active animated zoomInDown');
		$('.preguntas').hide();
	});

	$('.zona-costa').on('click', function(even) {
		even.preventDefault();
		$('.costa  .project').toggleClass('active animated zoomInDown');
		$('.preguntas').hide();
	});

	$('.zona-sur').on('click', function(even) {
		even.preventDefault();
		$('.sur  .project').toggleClass('active animated zoomInDown');
		$('.preguntas').hide();
	});


	/*===========================================================================
	/*BOTONES PARA CERRA ZONAS
	/*===========================================================================*/
	$('.btn-norte').on('click', function() {
		$('.norte  .project.cerrar-norte').toggleClass('active animated zoomInDown');
		$('.preguntas').show();
	});

	$('.btn-centro').on('click', function() {
		$('.centro  .project.cerrar-centro').toggleClass('active animated zoomInDown');
		$('.preguntas').show();
	});

	$('.btn-costa').on('click', function() {
		$('.costa  .project.cerrar-costa').toggleClass('active animated zoomInDown');
		$('.preguntas').show();
	});

	$('.btn-sur').on('click', function() {
		$('.sur  .project.cerrar-sur').toggleClass('active animated zoomInDown');
		$('.preguntas').show();
	})



	/*===========================================================================
	/*BOTONES PARA ABRIR PROYECTOS ZONA NORTE
	/*===========================================================================*/
	//tab Carchi
	$('.btn-carchi').on('click', function() {
		$('.project__content.carchi').toggleClass('show');
		$('.project__content.esmeraldas').removeClass('show');
	});

	$('.btn-esmeraldas').on('click', function() {
		$('.project__content.esmeraldas').toggleClass('show');
		$('.project__content.carchi').removeClass('show');
	});

	

	/*===========================================================================
	/*BOTONES PARA ABRIR PROYECTOS ZONA COSTA
	/*===========================================================================*/
	$('.btn-los-rios').on('click', function() {
		$('.project__content.los-rios').toggleClass('show');
		$('.project__content.manabi').removeClass('show');
	});

	$('.btn-manabi').on('click', function() {
		$('.project__content.manabi').toggleClass('show');
		$('.project__content.los-rios').removeClass('show');
	});



	/*===========================================================================
	/*BOTONES PARA ABRIR PROYECTOS ZONA COSTA
	/*===========================================================================*/
	$('.btn-tungurahua').on('click', function() {
		$('.project__content.tungurahua').toggleClass('show');
		$('.project__content.cotopaxi').removeClass('show');
	});

	$('.btn-cotopaxi').on('click', function() {
		$('.project__content.cotopaxi').toggleClass('show');
		$('.project__content.tungurahua').removeClass('show');
	});


	/*===========================================================================
	/*BOTONES PARA ABRIR PROYECTOS ZONA SUR
	/*===========================================================================*/
	$('.btn-chimborazo').on('click', function() {
		$('.project__content.chimborazo').toggleClass('show');
		$('.project__content.bolivar').removeClass('show');
	});

	$('.btn-bolivar').on('click', function() {
		$('.project__content.bolivar').toggleClass('show');
		$('.project__content.chimborazo').removeClass('show');
	});






		

	//PARA NINAR LA ZONA AL DAR CLICK EN LA FOTO
	$('.zona').on('click', function(){

		$(this).toggleClass('animated bounce');
	});


});
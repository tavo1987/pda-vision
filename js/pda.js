
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

		$('.project__content.carchi').css({'opacity':'1','z-index':'40',});
		$('.project__content.esmeraldas').css({'opacity':'0','z-index':'0'});
		$(this).addClass('current');
		$('.btn-esmeraldas').removeClass('current');

	});//fin carchi

	$('.btn-esmeraldas').on('click', function() {
		$('.project__content.esmeraldas').css({'opacity':'1','z-index':'40'});
		$('.project__content.carchi').css({'opacity':'0','z-index':'0'});
		$(this).addClass('current');
		$('.btn-carchi').removeClass('current');
	});

	

	/*===========================================================================
	/*BOTONES PARA ABRIR PROYECTOS ZONA COSTA
	/*===========================================================================*/
	$('.btn-los-rios').on('click', function() {
		$('.project__content.los-rios').css({'opacity':'1','z-index':'40',});
		$('.project__content.manabi').css({'opacity':'0','z-index':'0'});
		$(this).addClass('current');
		$('.btn-manabi').removeClass('current');
	});

	$('.btn-manabi').on('click', function() {
		$('.project__content.manabi').css({'opacity':'1','z-index':'40',});
		$('.project__content.los-rios').css({'opacity':'0','z-index':'0'});
		$(this).addClass('current');
		$('.btn-los-rios').removeClass('current');
	});



	/*===========================================================================
	/*BOTONES PARA ABRIR PROYECTOS ZONA CENTRO
	/*===========================================================================*/
	$('.btn-tungurahua').on('click', function() {
		$('.project__content.tungurahua').css({'opacity':'1','z-index':'40',});
		$('.project__content.cotopaxi').css({'opacity':'0','z-index':'0'});
		
		$(this).addClass('current');
		$('.btn-cotopaxi').removeClass('current');
	});

	$('.btn-cotopaxi').on('click', function() {
		$('.project__content.cotopaxi').css({'opacity':'1','z-index':'40',});
		$('.project__content.tungurahua').css({'opacity':'0','z-index':'0'});
		$(this).addClass('current');
		$('.btn-tungurahua').removeClass('current');
	});


	/*===========================================================================
	/*BOTONES PARA ABRIR PROYECTOS ZONA SUR
	/*===========================================================================*/
	$('.btn-chimborazo').on('click', function() {
		$('.project__content.chimborazo').css({'opacity':'1','z-index':'40',});
		$('.project__content.bolivar').css({'opacity':'0','z-index':'0'});
		$(this).addClass('current');
		$('.btn-bolivar').removeClass('current');

	});

	$('.btn-bolivar').on('click', function() {
		$('.project__content.bolivar').css({'opacity':'1','z-index':'40',});
		$('.project__content.chimborazo').css({'opacity':'0','z-index':'0'});
		$(this).addClass('current');
		$('.btn-chimborazo').removeClass('current');
	});




	//PARA NINAR LA ZONA AL DAR CLICK EN LA FOTO
	$('.zona').on('click', function(){

		$(this).toggleClass('animated bounce');
	});


});
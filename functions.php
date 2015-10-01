<?php 


/*------------------------------------------------------------------------------*/
/* ESTILOS
/*------------------------------------------------------------------------------*/

	function load_styles(){
		wp_enqueue_style( 'styles-world-vision', get_stylesheet_directory_uri().'/css/style.css' );
	}

	add_action('wp_enqueue_scripts','load_styles','','','false');

/*-----------------------------------------------------------------------------------*/
/*  vincular scripts
/*-----------------------------------------------------------------------------------*/

	function cargar_scripts(){

	    /*esta funcion nos permite vincular los scritps de manera correcta*/
	    //wp_enqueue_script( $handle, $src, $depencias, $version, $donde se va deplegar el scrip en el footer="true" o head="false" o vacio= "false" );

	 	wp_deregister_script( 'jquery' );
	    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
	    wp_register_script('wow', get_stylesheet_directory_uri().'/js/wow.min.js');
	    wp_register_script('pda', get_stylesheet_directory_uri().'/js/pda.js');

	    wp_enqueue_script( 'jquery');
	    wp_enqueue_script( 'wow');
	    wp_enqueue_script( 'pda');
	}

	add_action('wp_enqueue_scripts','cargar_scripts');

/*------------------------------------------------------------------------------*/
/* ELIMINA MENSAJES DE ERROR EN LOGIN  WORDPRESS
/*------------------------------------------------------------------------------*/

	function login_errors_message() {
		return 'Ooooops! Intenta de nuevo :)';
	}
	add_filter('login_errors', 'login_errors_message');

/*------------------------------------------------------------------------------*/
/* SOPORTE PARA POST FORMAT
/*------------------------------------------------------------------------------*/
	add_action( 'after_setup_theme', 'childtheme_formats', 11 );
		function childtheme_formats(){
		   	 add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link','video' ) );
	}
		


/*------------------------------------------------------------------------------*/
/* NUEVO POST TYPE PARA PROYECTYOS PDAS
/*------------------------------------------------------------------------------*/

	// La función no será utilizada antes del 'init'.
	add_action( 'init', 'proyectos' );
	add_post_type_support( 'proyectos', 'post-formats' );

	/* Here's how to create your customized labels */
	function proyectos() {
		$labels = array(
			'name'               => _x( 'Proyectos', 'post type general name', 'world vision' ),
			'singular_name'      => _x( 'Proyecto', 'post type singular name', 'world vision' ),
			'all_items'          => __( 'Todos los Proyectos', 'world vision'),
			'add_new'            => _x( 'Añadir nuevo', 'Proyecto', 'world vision' ),
			'add_new_item'       => __( 'Añadir nuevo Proyecto', 'world vision' ),
			'edit_item'          => __( 'Editar Proyecto', 'world vision' ),
			'new_item'           => __( 'Nuevo Proyecto', 'world vision' ),
			'view_item'          => __( 'Ver Proyectos', 'world vision' ),
			'search_items'       => __( 'Buscar Proyecto', 'world vision' ),
			'not_found'          =>  __( 'No se han encontrado Proyectos', 'world vision' ),
			'not_found_in_trash' => __( 'No se han encontrado Proyectos en la papelera', 'world vision' ),
			'parent_item_colon'  => ''
	    );

	    // Creamos un array para $args
		$args = array(
				'labels'              => $labels,
		        'public'              => true,
		        'publicly_queryable'  => true,
		        'exclude_from_search' => false,
		        'show_in_nav_menus'   => true,
		        'show_ui'             => true,
		        'show_in_menu'        => true,
		        'show_in_admin_bar'   => true,
		        'menu_position'       => 5,
		        'menu_icon'           => 'dashicons-location-alt',
		        'can_export'          => true,
		        'delete_with_user'    => false,
		        'hierarchical'        => false,
		        'has_archive'         => true,
		        'query_var'           => true,
		        'capability_type'     => 'post',
		        'map_meta_cap'        => true,

		        // 'capabilities' => array(),
		        'rewrite'             => array( 
		        	
		        	'with_front' => true,
		        	'pages' => true,
		        	'feeds' => true,
		        ),
		        'supports'            => array( 
		        	'title', 
		        	'editor', 
		        	'thumbnail',
		        	'excerpt',
		        	//'post-format'
		        	//'author', 
		        	//'custom-fields' 
		        )
		);
	    register_post_type('proyectos', $args ); /* Registramos y a funcionar */
	}



	/*---------------------------------------------------------------------------
	/*	taxonomias para el post type carreras
	/*---------------------------------------------------------------------------*/

		function proyecto_taxonomy() {

			$labels_zona = array(
				'name'              => _x( 'Zonas', 'taxonomy general name' ),
				'singular_name'     => _x( 'Zona', 'taxonomy singular name' ),
				'search_items'      => __( 'Buscar Zonas' ),
				'all_items'         => __( 'Todas las Zonas' ),
				'parent_item'       => __( 'Zona padre' ),
				'parent_item_colon' => __( 'Zona padre:' ),
				'edit_item'         => __( 'Editar Zona' ),
				'update_item'       => __( 'Actualizar Zona' ),
				'add_new_item'      => __( 'Agregar Nueva Zona' ),
				'new_item_name'     => __( 'Nuevo Nombre de Zona' ),
				'menu_name'         => __( 'Zona' ),
				'not_found'         => __( 'No se encontraron Zonas' ),
			);

			register_taxonomy( 'zona',
			    'proyectos',
			    array(
			      'hierarchical' => true,
			      'labels'        => $labels_zona,
			      'rewrite'      => array( 'slug' => 'zonas-proyectos' )
			    )
			);
		}

		add_action( 'init', 'proyecto_taxonomy' );


/*---------------------------------------------------------------------------
/*	AGREGAR THUMBNAILS EN TAXONOMIAS MEDIANTE PLUGIN
/*---------------------------------------------------------------------------*/
	add_filter( 'sftth_taxonomies', 'my_taxonomies_with_thumbnail' );

	function my_taxonomies_with_thumbnail( $taxonomies ) {
	    unset( $taxonomies['post_tag'] );
	    $taxonomies['zona'] = 'zona';
	    return $taxonomies;
	}

/*---------------------------------------------------------------------------
/*	shorcode para las redes sociales
/*---------------------------------------------------------------------------*/
	function  shortcode_button($atts,$content = ''){
		
		return '
			<div class="group-buttons acordeon-pda">
				'.do_shortcode( $content).'
			</div>			
		';
	}
	add_shortcode('acordeon','shortcode_button');
	

	function shortcode_acordeon($atts,$content = '') {
		$atts = shortcode_atts( array(
			'title'     => 'Titulo',
			'animacion' => 'bounceIn',
			'delay'     => '0.5',
			'name'      => 'programas'
		), $atts );
	
		extract($atts);

		return '
				<div class="content-buttons wow '.$animacion.'">
					<div class="button"  href="#" data-wow-delay="'.$delay.'s">
						'.$title.'
					</div>

					<div class="content '.$name.'">
						'.do_shortcode($content).'
					</div>
				</div>
		';
	}
	add_shortcode('acordeon_button','shortcode_acordeon');

 ?>
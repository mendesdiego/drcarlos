<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */

/* Criando um Post Type Personalizado */
add_action('init', 'servico_register');
function servico_register() {
	 $labels = array(
			'name' => 'Serviços',
			'singular_name' => 'Post',
			'all_items' => 'Todos os Serviços',
			'add_new' => 'Adicionar Serviço',
			'add_new_item' => 'Adicionar novo Serviço',
			'edit_item' => 'Editar post',
			'new_item' => 'Novo post',
			'view_item' => 'Ver post',
			'search_items' => 'Procurar Serviço',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => ''
	);
	$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'taxonomy' => array('servico'),
			'menu_position' => 6,
			'supports' => array('title','editor','excerpt','comments','thumbnail','category'),
			'rewrite' => array('slug' => 'servico')
	  );
	register_post_type('servico',$args);
}

add_action('init', 'testimonial_register');
function testimonial_register() {
	 $labels = array(
			'name' => 'Depoimentos',
			'singular_name' => 'Post',
			'all_items' => 'Todos os Depoimentos',
			'add_new' => 'Adicionar Depoimento',
			'add_new_item' => 'Adicionar novo Depoimento',
			'edit_item' => 'Editar post',
			'new_item' => 'Novo post',
			'view_item' => 'Ver post',
			'search_items' => 'Procurar Depoimento',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => ''
	);
	$args = array(
			'menu_icon'   => 'dashicons-admin-comments',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'taxonomy' => array('depoimento'),
			'menu_position' => 6,
			'supports' => array('title','editor','excerpt','comments','thumbnail','category'),
			'rewrite' => array('slug' => 'depoimento')
	  );
	register_post_type('testimonial',$args);
}

/* ----------------------------------------------------- */
/* Taxonomias */
/* ----------------------------------------------------- */

/* Criando uma Taxonomia Personalizada */
register_taxonomy("portfolio", array("portfolio"), array("hierarchical" => true,
	"label" => "Categorias", "singular_label" => "Categoria",'rewrite' => array( 'slug' => 'categoria-portfolio' )));

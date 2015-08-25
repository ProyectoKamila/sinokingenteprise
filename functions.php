<?php

include('library/main.php');
include('library/slideshow.php');
include('library/cotizar.php');

show_admin_bar( false );

function theme_custom_types() {

    add_custom_post_type(array(
        'type' => 'portada',
        'plural' => 'portada'
    ));
    add_custom_taxonomy(array(
        'name' => 'categoria-portadas',
        'singular' => 'Categorías',
        'genero' => 'f',
        'post_type' => 'portada',
        'hierarchical' => true
    ));
    
    /*
     add_custom_post_type(array(
        'type' => 'nosotros',
        'plural' => 'Nosotros'
    ));
    add_custom_taxonomy(array(
        'name' => 'categoria-nosotros',
        'singular' => 'Categoria',
        'genero' => 'f',
        'post_type' => 'nosotros',
        'hierarchical' => true
    ));
    */
    
     add_custom_post_type(array(
        'type' => 'servicios',
        'plural' => 'Servicios'
    ));
    add_custom_taxonomy(array(
        'name' => 'categoria-servicios',
        'singular' => 'Categorías',
        'genero' => 'f',
        'post_type' => 'servicios',
        'hierarchical' => true
    ));
    
     add_custom_post_type(array(
        'type' => 'testimonios',
        'plural' => 'testimonios'
    ));
    add_custom_taxonomy(array(
        'name' => 'categoria-nosotros',
        'singular' => 'Categorías',
        'genero' => 'f',
        'post_type' => 'testimonios',
        'hierarchical' => true
    ));
}


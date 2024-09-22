<?php
//Główna funkcja ładowania skryptów oraz stylów
function my_theme_enqueue_styles() {
    // Dodaj Bootstrap CSS z CDN
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    //Dodaje style css
    wp_enqueue_style( 'style',get_stylesheet_uri() );
    wp_enqueue_style( 'main',get_template_directory_uri().'/assets/css/main.css' );
    wp_enqueue_style('fontello-icons', get_template_directory_uri() . '/assets/fontello/fontello.css');
    //Dodaje Google font Monserant
    wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap', false );
  

    //Dodaje JQUERY
    wp_enqueue_script('jquery');

   
    // Dodaje bootstrap w wersji online
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js');
}

// Hook do ładowania stylów i skryptów
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>

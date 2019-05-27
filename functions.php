<?php
/*Denne fil er en del af divi-childtheme, Divi child theme.

Alle funktionerne i denne fil vil blive indlæst før det overordnet temas funktioner.
Lær mere af https://codex.wordpress.org/Child_Themes.

Note: denne funktion indlæser det overordnet temas stylesheet før undertemaets stylesheet
(lad være tomt med mindre du ved hvad du laver.)
*/

function divi_childtheme_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'divi_childtheme_enqueue_child_styles' );

/*Skriv her dine egne funktioner */



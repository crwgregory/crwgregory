<?php

/*------------------------------------*\
    //Enques
		//CSS
		//Javascript
\*------------------------------------*/


/*------------------------------------*\
    //CSS
\*------------------------------------*/

function theme_styles(){
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), print($versionCSS),'screen, projection' );

	// enqueing:
	wp_enqueue_style( 'style' );
}
add_action('wp_enqueue_scripts', 'theme_styles');
if($is_IE) {
	function ie_styles(){
		wp_register_style( 'ie', get_template_directory_uri() . '/css/ie.css', array(), '1.0','screen, projection' );

		// enqueing:
		wp_enqueue_style( 'ie' );
	}
	add_action('wp_enqueue_scripts', 'ie_styles');
}
/*------------------------------------*\
    //Javascript
\*------------------------------------*/
// Register some javascript files, because we love javascript files. Enqueue a couple as well
// Reference: wp_register_script( $handle, $src, $deps, $ver, $in_footer );
function load_js_files() {
	if(!is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, '1.10.1', true);
		wp_register_script('foundation-js', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js', false, '6.0.1', true);
		wp_register_script('custum-js', '/wp-content/themes/zemplate/js/main.js', false,  print($versionJS), true);

		//Get in line!
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'foundation-js' );
		wp_enqueue_script( 'custum-js' );
		//If necessary, page specific enqueues
		// if ( is_page() ) {

		// }

		// Enable ajax support for comments
		if(is_singular() && comments_open() && get_option('thread_comments')){
		    wp_enqueue_script('comment-reply');
		}
	}
}
add_action( 'wp_enqueue_scripts', 'load_js_files' );


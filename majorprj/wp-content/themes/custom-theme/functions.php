<?php

function custom_css(){
 $directory = get_stylesheet_directory_uri();
   wp_enqueue_style("font-awesome", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" );
    wp_enqueue_style("bootstrap", $directory ."/css/bootstrap.min.css");
    wp_enqueue_style("MDbootstrap",$directory."/css/mdb.min.css");
    wp_enqueue_style("customtheme-style",$directory."/style.css" );
    // wp_enqueue_style("footer-style",$directory."/css/footer.css" );   
}
add_action("wp_enqueue_scripts","custom_css");

function custom_js(){
		 $directory = get_stylesheet_directory_uri();
wp_enqueue_script( 'pluginjs', "$directory/js/jquery-3.1.1.min.js", false, '', true );
wp_enqueue_script( 'popperrjs', $directory."/js/popper.min.js", false, '', true );
wp_enqueue_script( 'bootstrap', $directory."/js/bootstrap.min.js", false, '', true );
wp_enqueue_script( 'MDbootstrap', $directory."/js/mdb.min.js", false, '', true );
}
add_action("wp_enqueue_scripts","custom_js");


?>
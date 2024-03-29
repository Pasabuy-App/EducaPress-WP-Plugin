<?php
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/** 
        * @package educapress-wp-plugin
		* @version 0.1.0
		* This is the primary gateway of all the rest api request.
	*/
?>

<?php

    //Require the USocketNet class which have the core function of this plguin. 
    require plugin_dir_path(__FILE__) . '/v1/users/class-auth.php'; // Example
	
	// Init check if USocketNet successfully request from wapi.
    function educapress_route()
    {
        // Example
        register_rest_route( 'educapress/v1/user', 'auth', array(
            'methods' => 'POST',
            'callback' => array('EP_Authenticate','listen'),
        ));       
    }
    add_action( 'rest_api_init', 'educapress_route' );

?>
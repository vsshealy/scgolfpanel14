<?php 
    /**
     * php/menus/menu-footer-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-5',
            'menu_id' => 'Footer-Primary'
        )
    );
?>
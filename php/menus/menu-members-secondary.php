<?php 
    /**
     * php/menus/menu-members-secondary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-8',
            'menu_id' => 'Members-Secondary'
        )
    );
?>
<?php 
    /**
     * php/scripts/footer/footer-scripts.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<div id="footer-scripts">
    
    <!-- WP-FOOTER -->
    <?php wp_footer(); ?>

    <!-- FRAMEWORK -->
    <?php include(get_stylesheet_directory()."/php/theme/scripts/external/bootstrap/footer.php"); ?>

    <!-- THEME -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>

</div>
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package madhat
 */
?>
<?php get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <div class="header-container">
        <div class="header-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="/wp-content/themes/inspiredby/assets/images/wsc-logo.png">
            </a>
        </div>

        <!--Nav Toggle-->        
        <div class="nav_toggle" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </div>
        <!--Mob Nav-->   
        <nav class="sm-menu" id="nav-overlay">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>


        <!--Desktop Nav-->     
        <nav class="lg-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
    </div>
    <script>
        $('#toggle').click(function() {
            $(this).toggleClass('active');
            $('.sm-menu').toggleClass('open');
        });
    </script>  

    <?php //get_template_part('modules/header/jumbosearch'); ?>
    <?php //get_template_part('modules/header/top-bar'); ?>
    <?php //get_template_part('modules/header/masthead'); ?>
    <?php //get_template_part('modules/navigation/top','menu'); ?>

<div class="mega-container">
    <?php if( class_exists('rt_slider') ) {
        rt_slider::render('slider', 'nivo' );
    } ?>

<?php //get_template_part('framework/featured-components/featured', 'skew'); ?>
<?php //get_template_part('framework/featured-components/featured', 'area2'); ?>
		
<div id="content" class="site-content container">

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eElectronics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="profile" href="https://gmpg.org/xfn/11"><!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
   
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <?php
                    if (is_user_logged_in()) {
                     ?>
                        <ul>
                            <li><a href="<?php echo get_the_permalink(); ?>my-account"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="<?php echo get_the_permalink();?>cart"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="<?php echo get_the_permalink(); ?>checkout"><i class="fa fa-user"></i> Checkout</a></li>                    
                        </ul>
                        <?php
                    } else {
                        ?>
                        <ul>
                            <li><a href="<?php echo get_the_permalink(); ?>my-account"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="<?php echo get_the_permalink(); ?>registration"><i class="fa fa-user"></i> Register</a></li>
                        </ul>
                    <?php
                    }
                    ?>
                        
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <?php echo do_shortcode('[language-switcher]'); ?>                
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="<?php echo get_home_url(); ?>">e<span>Electronics</span></a></h1>
                    </div>
                </div>
                <div class="col-sm-6">
                <span style="padding-bottom: 10px;">
                    <div class="shopping-item dropdown">  
                        <a href="<?php echo get_the_permalink(); ?>cart">Cart - <span class="cart-amunt woocommerce-mini-cart__total">
                            <?php
                            /**
                             * Hook: woocommerce_widget_shopping_cart_total.
                             *
                             * @hooked woocommerce_widget_shopping_cart_subtotal - 10
                             */
                            do_action( 'woocommerce_widget_shopping_cart_total' );
                            ?>
                        </span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo WC()->cart->get_cart_contents_count() ?></span></a>
                </span>
                    </div>
                    
                    <?php woocommerce_mini_cart(); ?>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'primary',
                    'menu'            => 'div',
                    'container'       => 'div',
                    'container_class' => 'navbar-collapse collapse',
                    'container_id'    => '',
                    'menu_class'      => 'navbar-collapse collapse',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
                ?>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

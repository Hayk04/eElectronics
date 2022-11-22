<?php
/*
Template Name: Home
Template Post Type: Page
*/
?>

<?php
get_header(); ?>

<div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are awesome</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab molestiae minus reiciendis! Pariatur ab rerum, sapiente ex nostrum laudantium.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are great</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aspernatur, dolorum harum molestias tempora deserunt voluptas possimus quos eveniet, vitae voluptatem accusantium atque deleniti inventore. Enim quam placeat expedita! Quibusdam!</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are superb</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptates necessitatibus dicta recusandae quae amet nobis sapiente explicabo voluptatibus rerum nihil quas saepe, tempore error odio quam obcaecati suscipit sequi.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                        <?php $my_posts = get_posts( array(
                            'numberposts' => 0,
                            'post_type'   => 'product',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            'orderby' => 'date'
                        ) );
                
                        foreach( $my_posts as $post ){
                            setup_postdata( $post ); ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <?php the_post_thumbnail('') ?>
                                        <div class="product-hover">
                                        <a class="view-details-link" href="<?php echo get_post_permalink(); ?>"><i class="fa fa-link"></i>See Details</a>
                                        </div>
                                    </div>
                                    
                                    <h2><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    
                                    <div class="product-carousel-price">
                                        <?php
                                            /**
                                             * Hook: woocommerce_after_shop_loop_item_title.
                                             *
                                             * @hooked woocommerce_template_loop_rating - 5
                                             * @hooked woocommerce_template_loop_price - 10
                                             */
                                            do_action( 'woocommerce_after_shop_loop_item_title' );
                                        ?>
                                    </div> 
                                </div>  
                                <?php
                            }
                            wp_reset_postdata(); // сброс
                        ?>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands</h2>
                        <div class="brand-list">
                            <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/hisense.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/apple.webp" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/lenovo.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/sony.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/xiaomi.svg.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/microsoft.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/samsung.svg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?> . /assets/img/dell.svg.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="<?php echo get_the_permalink(); ?>shop" class="wid-view-more">View All</a>
                        <?php $my_posts = get_posts( array(
                            'numberposts' => 3,
                            'post_type'   => 'product',
                            'orderby' => 'comment_count',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                        foreach( $my_posts as $post ){
                            setup_postdata( $post ); ?>
                            <div class="single-wid-product">
                                <a class="post-img-link" href="<?php echo get_post_permalink(); ?>"><?php the_post_thumbnail('') ?></a>
                                <h2><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="product-wid-rating">
                                <?php
                                    /**
                                    * Hook: woocommerce_after_shop_loop_item_title.
                                    *
                                    * @hooked woocommerce_template_loop_rating - 5
                                    * @hooked woocommerce_template_loop_price - 10
                                    */
                                    do_action( 'woocommerce_after_shop_loop_item_title' );
                                ?>
                                </div> 
                            </div>
                            <?php
                            }
                            wp_reset_postdata(); // сброс
                        ?>                                                    
                    </div>
                </div>
                <div class="col-md-4">
                <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Added</h2>
                        <a href="<?php echo get_the_permalink(); ?>shop" class="wid-view-more">View All</a>
                <?php $my_posts = get_posts( array(
                            'numberposts' => 3,
                            'post_type'   => 'product',
                            'orderby'     => 'date',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                        foreach( $my_posts as $post ){
                            setup_postdata( $post ); ?>
                            <div class="single-wid-product">
                                <a class="post-img-link" href="<?php echo get_post_permalink(); ?>"><?php the_post_thumbnail('') ?></a>
                                <h2><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="product-wid-rating">
                                <?php
                                    /**
                                    * Hook: woocommerce_after_shop_loop_item_title.
                                    *
                                    * @hooked woocommerce_template_loop_rating - 5
                                    * @hooked woocommerce_template_loop_price - 10
                                    */
                                    do_action( 'woocommerce_after_shop_loop_item_title' );
                                ?>
                                </div> 
                            </div>
                            <?php
                            }
                            wp_reset_postdata(); // сброс
                        ?>  
                    </div>           
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="<?php echo get_the_permalink(); ?>shop" class="wid-view-more">View All</a>
                        <?php $my_posts = get_posts( array(
                            'numberposts' => 3,
                            'post_type'   => 'product',
                            'orderby'     => 'date',
                            'orderby'     => 'comment_count',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                        foreach( $my_posts as $post ){
                            setup_postdata( $post ); ?>
                            <div class="single-wid-product">
                                <a class="post-img-link" href="<?php echo get_post_permalink(); ?>"><?php the_post_thumbnail('') ?></a>
                                <h2><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="product-wid-rating">
                                <?php
                                    /**
                                    * Hook: woocommerce_after_shop_loop_item_title.
                                    *
                                    * @hooked woocommerce_template_loop_rating - 5
                                    * @hooked woocommerce_template_loop_price - 10
                                    */
                                    do_action( 'woocommerce_after_shop_loop_item_title' );
                                ?>
                                </div> 
                            </div>
                            <?php
                            }
                            wp_reset_postdata(); // сброс
                        ?>  
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->

<?php get_footer(); ?>
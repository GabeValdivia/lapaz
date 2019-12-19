<?php
/*
*  Template Name: Our Specialties
*/

?>

<?php get_header(); ?>



    <?php while(have_posts()): the_post(); ?>
        <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="hero-content">
                <hero-text>
                <h2><?php the_title(); ?></h2>
                </hero-text>
            </div>
        </div>

        <div class="main-content container">
            <main class="text-center content-text">
                <?php the_content(); ?>
            </main>
        </div>

        <class class="our-specialties">
            <h3 class="primary-text">Pizzas</h3>
            <div class="container-grid">
                <?php                 
                    $args = array(
                        'post_type' => 'specialties',
                        'posts_per_page' => 10,
                        'orderby' => 'title',
                        'order' => 'ASC'
                    );

                    $pizzas = new WP_Query($args);
                    while($pizzas->have_posts()): $pizzas->the_post(); ?>

                    <h2><?php the_title(); ?></h2>
                        
                        
                    <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </class>
        

        
        

        <?php endwhile; ?>

<?php get_footer(); ?>
<?php get_header(); ?>
    <!-- Hero Section  -->
    <?php while(have_posts()): the_post(); ?>
        <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="hero-content">
                <hero-text>
                <h2><?php the_title(); ?></h2>
                </hero-text>
            </div>
        </div>
    <!-- Main Content Section -->
        <div class="main-content container">
            <main class="text-center content-text">
                <?php the_content(); ?>
            </main>
        </div>
    <!-- Info Box Area -->
    <div class="box-information container clear">
        <div class="box">
            <div class="content-box">
                <?php the_field('description_1') ?>
            </div>
        </div>
    </div>
        

        
        

        <?php endwhile; ?>

<?php get_footer(); ?>
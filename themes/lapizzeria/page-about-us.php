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
    <div class="box-information container">

        <div class="single-box">
            <?php 
                $id_image = get_field('image_1');
                $image = wp_get_attachment_image_src($id_image, 'boxes');
            ?>
            <img src="<?php echo $image[0]; ?>" />
            <div class="content-box">
                <?php the_field('description_1') ?>
            </div>
        </div><!-- Single Box 1 -->

        <div class="single-box">
            <?php 
                $id_image = get_field('image_2');
                $image = wp_get_attachment_image_src($id_image, 'boxes');
            ?>
            <img src="<?php echo $image[0]; ?>" />
            <div class="content-box">
                <?php the_field('description_2') ?>
            </div>
        </div><!-- Single Box 2 -->

        <div class="single-box">
            <?php 
                $id_image = get_field('image_3');
                $image = wp_get_attachment_image_src($id_image, 'boxes');
            ?>
            <img src="<?php echo $image[0]; ?>" />
            <div class="content-box">
                <?php the_field('description_3') ?>
            </div>
        </div><!-- Single Box 3 -->
    </div>
        

        
        

        <?php endwhile; ?>

<?php get_footer(); ?>
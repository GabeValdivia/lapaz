<?php
/*
* Template Name: Galleryx
*/
 get_header(); ?>

    <?php while(have_posts()): the_post(); ?>
        <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="hero-content">
                <hero-text>
                <h2><?php the_title(); ?></h2>
                </hero-text>
            </div>
        </div>

        <div class="main-content container">
            <main class="content-box clear">

            <?php 
                $gallery = get_post_gallery( get_the_ID(), false );
                $gallery_images_ids = explode(',', $gallery['ids']);
            ?>   
            
            <ul class="gallery-images">
                <?php
                $i = 0;
                    foreach($gallery_images_ids as $id): 
                        $size = ($i ===  3 || $i === 6) ? 'thumbnail' : 'thumbnail';
                        $imageThumb = wp_get_attachment_image_src($id, $size);
                        $image = wp_get_attachment_image_src($id, 'large');                        
                ?>
                        <li>
                            <a href="<?php echo $image[0]; ?>" data-lightbox="gallery">
                            <img src="<?php echo $imageThumb[0]; ?>" />
                            </a>
                        </li>
                    <?php $i++; endforeach; ?>
            </ul>
        <?php endwhile; ?>

            </main>
        </div>

<?php get_footer(); ?>
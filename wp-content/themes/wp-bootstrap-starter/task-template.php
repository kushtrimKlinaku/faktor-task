<?php
//Template name:Task template 
get_header();
?>


<div class="container">
    <h1>ALBUM</h1>

    <div class="row">

        <?php
        $args = array('post_type' => 'album', 'posts_per_page' => 100);
        $the_query = new WP_Query($args);
        ?>


        <?php if ($the_query->have_posts()) : ?>


            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-md-4">


                    <div class="entry-content">
                        <a href="<?php the_permalink(); ?>">
                            <!-- <?php the_post_thumbnail();
                                    ?> -->
                            <?php if (get_field('photo_of_album')) : ?>
                                <img src="<?php the_field('photo_of_album'); ?>" />
                            <?php endif; ?>

                            <h2 class="album-title"><?php the_title(); ?></h2>
                        </a>

                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>


        <?php else :  ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>


    </div>
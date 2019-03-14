<?php get_header(); ?>

    <div class="row">
        <div class="col-sm-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1 class="main-heading"><?php the_title(); ?></h1>
                <p><em><?php the_time('j. F Y'); ?></em></p>

                <?php the_content(); ?>

                    <hr>

                    <?php endwhile; else: ?>
                        <p>
                            <?php _e('Sorry, this page does not exist.'); ?>
                        </p>
                        <?php endif; ?>

        </div>
        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <div class="row">
            <?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Front page area 2') ) :
      endif; ?>
        </div>

    <?php get_footer(); ?>

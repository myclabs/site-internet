<?php
/**
 * Template Name: Page NoSidebars
 */

get_header(); ?>

<div id="content">
	<div class="container">
  	<div class="indent">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
    
          <div id="page-content">
            <?php the_content(); ?>
          </div><!--#pageContent -->
        </div><!--#post-# .post-->
    
      <?php endwhile; ?>
    </div>
  </div>
</div><!--#content-->
<?php get_footer(); ?>

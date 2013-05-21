<?php get_header(); ?>
<div class="container">
	<div id="content" class="last">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
        <article class="single-post">
          <header>
            <h1><?php the_title(); ?></h1>
          </header>
          <?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ ?>
          <div class="post-content">
            <?php the_content(); ?>
            <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
          </div><!--.post-content-->
        </article>
  
          
  


  
      </div><!-- #post-## -->
      
      
      <nav class="oldernewer">
        <div class="older">
          <?php previous_post_link('%link', '&laquo; Previous post') ?>
        </div><!--.older-->
        <div class="newer">
          <?php next_post_link('%link', 'Next Post &raquo;') ?>
        </div><!--.newer-->
      </nav><!--.oldernewer-->
  
      <?php comments_template( '', true ); ?>
  
    <?php endwhile; /* end loop */ ?>
  </div><!--#content-->

</div>
<?php get_footer(); ?>
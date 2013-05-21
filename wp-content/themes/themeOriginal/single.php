<?php get_header(); ?>
<div class="container">
	<div id="content" class="two_third">
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
  
          
  
        <?php /* If a user fills out their bio info, it's included here */ ?>
        <div id="post-author">
          <h3>Written by <?php the_author_posts_link() ?></h3>
          <p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '80' ); /* This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address */  } ?></p>
          <div id="author-description">
            <?php the_author_meta('description') ?> 
            <div id="author-link">
              <p>View all posts by: <?php the_author_posts_link() ?></p>
            </div><!--#author-link-->
          </div><!--#author-description -->
        </div><!--#post-author-->
  
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
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
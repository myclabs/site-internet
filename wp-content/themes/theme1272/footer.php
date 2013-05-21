  </div><!--.container-->
  <div id="after-content">
    <div class="container clearfix">
      <div class="two_third">
        <?php if ( ! dynamic_sidebar( 'After Content 1' ) ) : ?>
          <!--Widgetized 'After Content 1' for the home page-->
        <?php endif ?>
      </div>
      <div class="one_third last">
        <?php if ( ! dynamic_sidebar( 'After Content 2' ) ) : ?>
          <!--Widgetized 'After Content 2' for the home page-->
        <?php endif ?>
      </div>
    </div>
  </div>
	<footer id="footer">
		<div class="container clearfix">
      <div class="copy">
      	<?php $theme1272_footer_text = get_option('theme1272_footer_text'); ?>
				<?php if($theme1272_footer_text){?>
          <?php echo get_option('theme1272_footer_text'); ?>
        <?php } else { ?>
          <?php bloginfo('name'); ?> &copy; <?php echo date("Y") ?><br /> <!-- {%FOOTER_LINK} -->
        <?php } ?>
      </div>
      <?php if ( get_option('theme1272_footermenu') == 'true') { ?>  
        <nav class="footer">
          <?php wp_nav_menu( array(
            'container'       => 'ul', 
            'menu_class'      => 'footer-nav', 
            'depth'           => 0,
            'theme_location' => 'footer_menu' 
            )); 
          ?>
        </nav>
      <?php } ?>
        
		</div><!--.container-->
	</footer>
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->

<?php echo stripslashes(get_option('theme1272_ga_code')); ?><!-- Show Google Analytics -->
<script type="text/javascript"> //Cufon.now(); </script>
</body>
</html>
<?php get_header(); ?>
<div class="container">
	<div class="indent">
    <div id="content">
      <div class="wrapper">
        <div class="two_third">
          <?php if ( ! dynamic_sidebar( 'Home Widget 1' ) ) : ?>
            <!--Widgetized 'Home Widget 1' for the home page-->
          <?php endif ?>
          <div class="wrapper">
            <div class="one_half">
              <?php if ( ! dynamic_sidebar( 'Home Widget 2' ) ) : ?>
                <!--Widgetized 'Home Widget 2' for the home page-->
              <?php endif ?>
            </div>
            <div class="one_half last">
              <?php if ( ! dynamic_sidebar( 'Home Widget 3' ) ) : ?>
                <!--Widgetized 'Home Widget 3' for the home page-->
              <?php endif ?>
            </div>
          </div>
        </div>
        <div class="one_third last">
          <?php if ( ! dynamic_sidebar( 'Home Widget 4' ) ) : ?>
            <!--Widgetized 'Home Widget 4' for the home page-->
          <?php endif ?>
        </div>
      </div>
    </div><!--#content-->
  </div>
</div>
<?php get_footer(); ?>

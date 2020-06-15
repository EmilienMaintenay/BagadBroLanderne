<?php get_header(); ?>

	<div class="row">
        <div class="col-sm-2 col-sm-offset-0" style="background-color:white; margin-top:20px">
            <div class="sidebar-module sidebar-module-inset">
                <?php wp_nav_menu ( array ('theme_location' => 'navigation' ,'menu_class' => 'my-navigation') ); ?>
            </div> 
        </div><!– /.blog-sidebar –>
		<div class="col-sm-8 blog-main" >

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->
        
		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>
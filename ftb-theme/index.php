<?php get_header(); ?>

<?php get_template_part('featured-posts'); ?>
<?php get_template_part('instagram-photos'); ?>

<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">

				<div class="content__grid">
						<div class="row">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-post' );
								endwhile;
								the_posts_pagination(
									array(
										'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
										'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>',
										'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
									)
								);
							else :
								get_template_part( 'template-parts/post/content', 'none' );
							endif;
							?>
						</div>
					</div>
			</div>
      <div class="col-xs-12 col-md-4">
				<?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
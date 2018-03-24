<?php get_header(); ?>

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
                  get_template_part( 'template-single' );
                  
                  if ( comments_open() || get_comments_number() ) :
                    comments_template();
                  endif;
								endwhile;
							endif;
							?>
							<div class="col-xs-12">
								<?php 
									the_posts_pagination(
										array(
											'screen_reader_text' => ' ',
											'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
											'next_text'          => '<span class="screen-reader-text">' . __( 'Next', 'twentyseventeen' ) . '</span>',
											'before_page_number' => '',
										)
									); ?>
							</div>
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
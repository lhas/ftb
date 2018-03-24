<section class="featuredposts">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
      <?php
            $args = array(
              'posts_per_page' => 1,
            );
$query = new WP_query ( $args );
if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="featuredposts__item" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
          <span class="featuredposts__item__mask"></span>
          <div class="featuredposts__item__meta">
            <p class="featuredposts__item__meta__category"><?php echo main_category(); ?></p>
            <p class="featuredposts__item__meta__title"><?php the_title(); ?></p>
          </div>
        </a>
          <?php endwhile; endif; ?>
      </div>
      <div class="col-xs-12 col-md-4">
        <div class="row">
      <?php
            $args = array(
              'offset' => 1,
              'posts_per_page' => 2,
            );
$query = new WP_query ( $args );
if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-xs-12">
            <a href="<?php the_permalink(); ?>" class="featuredposts__item featuredposts__item--small" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
              <span class="featuredposts__item__mask"></span>
              <div class="featuredposts__item__meta">
                <p class="featuredposts__item__meta__category"><?php echo main_category(); ?></p>
                <p class="featuredposts__item__meta__title"><?php the_title(); ?></p>
              </div>
            </a>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
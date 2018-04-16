
<div class="content__sidebar">
  <div class="row">
    <div class="col-xs-12">

      <div class="content__sidebar__widget">
        <p class="content__sidebar__widget__title">Recent Posts</p>
        <div class="content__sidebar__widget__items">
          <?php
            $args = array(
              'posts_per_page' => 4,
            );
$query = new WP_query ( $args );
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="content__sidebar__widget__item">
            <div class="content__sidebar__widget__item__photo"  style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
            </div>
            <div class="content__sidebar__widget__item__meta">
              <p class="content__sidebar__widget__item__meta__category"><?php echo main_category(); ?></p>
              <p class="content__sidebar__widget__item__meta__title"><?php the_title(); ?></p>
            </div>
          </a>
          <?php endwhile; endif; ?>
        </div>
        <!-- .content__sidebar__widget__items -->
      </div>
      <!-- .content__sidebar__widget -->

      <a href="mailto:contact@feed-the-birds.com" class="content__sidebar__advertisement">
        <span class="content__sidebar__advertisement__bg"></span>
        <p class="content__sidebar__advertisement__title">Advertise
          <br /> Here</p>
        <p class="content__sidebar__advertisement__email">contact@feed-the-birds.com</p>
      </a>

      <div class="content__sidebar__widget">
        <p class="content__sidebar__widget__title">Categories</p>
        <?php $categories = get_categories(); ?>
        <ul class="content__sidebar__widget__list">
          <?php foreach($categories as $category) : ?>
          <li>
            <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="content__sidebar__widget" style="margin-top: 2em;">
        <div class="fb-page" data-href="https://www.facebook.com/feedthebirds420/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/feedthebirds420/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/feedthebirds420/">Feed The Birds</a></blockquote></div>
      </div>

    </div>
  </div>
</div>
<div class="col-xs-12 col-md-6">
  <a class="content__grid__item" href="<?php the_permalink(); ?>">
    <span class="content__grid__item__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></span>
    <div class="content__grid__item__inner">
      <div class="content__grid__item__inner__meta">
        <p class="content__grid__item__inner__meta__category"><?php echo main_category(); ?></p>
        <p class="content__grid__item__inner__meta__date"><?php echo get_the_date('F j, Y'); ?></p>
      </div>
      <p class="content__grid__item__inner__title"><?php the_title(); ?></p>
      <div class="content__grid__item__inner__text"><?php the_excerpt(); ?>
      </div>
      <p class="content__grid__item__inner__readmore">Read More</p>
    </div>
  </a>
</div>
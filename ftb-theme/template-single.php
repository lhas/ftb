<div class="col-xs-12">
  <div class="content__grid__item content__grid__item--single">
    <?php if(!empty(get_the_post_thumbnail_url())) : ?>
    <span class="content__grid__item__photo" style="height: 20em; background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></span>
<?php endif; ?>
    <div class="content__grid__item__inner">
    <div class="content__grid__item__inner__meta">
      <p class="content__grid__item__inner__meta__category"><?php echo main_category(); ?><em>Written By <?php echo get_author_name(); ?></em></p>
      <p class="content__grid__item__inner__meta__date"><?php echo get_the_date('F j, Y'); ?></p>
    </div>
      <p class="content__grid__item__inner__title"><?php the_title(); ?></p>
      <div class="content__grid__item__inner__text"><?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
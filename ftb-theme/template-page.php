<div class="col-xs-12">
  <div class="content__grid__item content__grid__item--single">
    <?php if(!empty(get_the_post_thumbnail_url())) : ?>
    <span class="content__grid__item__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></span>
<?php endif; ?>
    <div class="content__grid__item__inner">
      <p class="content__grid__item__inner__title"><?php the_title(); ?></p>
      <div class="content__grid__item__inner__text"><?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
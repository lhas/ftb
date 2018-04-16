<div class="col-xs-12">
  <div class="content__grid__item content__grid__item--single">
    <?php if(!empty(get_the_post_thumbnail_url())) : ?>
    <span class="content__grid__item__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></span>
<?php endif; ?>
    <div class="content__grid__item__inner">

      <div class="content__grid__item__inner__title__wrapper">
        <p class="content__grid__item__inner__title" style="margin-right: 0.25em;"><?php the_title(); ?></p>
        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
      </div>

      <div class="content__grid__item__inner__text"><?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<section class="instagramphotos">
  <span class="instagramphotos__bg"></span>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="instagramphotos__titlegroup">
          <h2 class="instagramphotos__titlegroup__title">Feed the Birds on Instagram</h2>
          <h3 class="instagramphotos__titlegroup__subtitle">Share your photo here!
            <strong>#feedthebirds</strong>
          </h3>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $endpoint = 'https://www.instagram.com/explore/tags/weed/?__a=1';
      $json = json_decode(file_get_contents($endpoint));
      $limit = 4;
      $current = 0;
      foreach($json->graphql->hashtag->edge_hashtag_to_top_posts->edges as $post) :
        if($current < $limit) :
          $current++;
      ?>
      <div class="col-xs-6 col-md-3">
        <a href="https://www.instagram.com/p/<?php echo $post->node->shortcode; ?>/" target="_blank" class="instagramphotos__item">
          <span class="instagramphotos__item__mask"></span>
          <span class="instagramphotos__item__photo" style="background-image: url('<?php echo $post->node->display_url; ?>')"></span>
          <p class="instagramphotos__item__likes">
            <i class="material-icons">favorite</i> <?php echo $post->node->edge_liked_by->count; ?></p>
        </a>
      </div>
        <?php endif; endforeach; ?>
    </div>
  </div>
</section>
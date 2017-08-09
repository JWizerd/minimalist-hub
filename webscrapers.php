<? require('controllers/webscraper.php'); ?>
<div class="row">
  <nav class="col-md-12"></nav><!-- navigation -->
  <?php 
  if (isset($_POST['add_webscraper_widget'])) : $url = $_POST['url']; $rss_feed = new RSS_Feed($url); ?>
    <?php if (count($rss_feed->post_obj) == 0) : ?>
      <?php print_r($rss_feed->post_obj); ?>
      <h1 class="error text-center">No RSS FEED FOUND. <a href="<?= $_SERVER['PHP_SELF'] ?>">Try again.</a>

    <?php else: ?>

      <?php 
      $posts = $rss_feed->get_all_posts();
      foreach ($posts as $post): ?>
        <div class="col-sm-6">
          <div class="well">
            <div class="post">
              <h2 class="text-center"><?= $post['title']; ?></h2>
              <hr>
              <?= $post['content']; ?>
            </div><!-- post -->
          </div><!-- well -->
        </div><!-- col -->
      <?php endforeach ?>

    <?php endif; ?>
  <?php endif ?>
</div>


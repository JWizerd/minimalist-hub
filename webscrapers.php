<? require('controllers/webscraper.php'); ?>
<div class="row">
  <nav class="col-md-12"></nav><!-- navigation -->
  <?php 
  if (isset($_POST['add_webscraper_widget'])) : $url = $_POST['url']; $rss_feed = new RSS_Feed($url); ?>
    <?php if (count($rss_feed->post_obj) == 0) : ?>
      <?php print_r($rss_feed->post_obj); ?>
      <h1 class="error">No RSS FEED FOUND. <a href="<?= $_SERVER['PHP_SELF'] ?>">Try again.</a>

    <?php else: ?>

      <div class="col-sm-6">
        <div class="well">
          <div class="post">
            <h2 class="text-center"><?php echo $rss_feed->post_obj['title']; ?></h2>
            <hr>
            <?php echo $rss_feed->post_obj['content']; ?>
          </div>
        </div>
      </div>

    <?php endif; ?>
  <?php endif ?>
</div>


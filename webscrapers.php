<? require('controllers/webscraper.php'); ?>
<div class="row">
  <nav class="col-md-12"></nav><!-- navigation -->
  <?php if (isset($_POST['add_webscraper_widget'])): ?>
    <div class="col-sm-6">
      <div class="well">
        <div class="post">
          <h2 class="text-center"><?php echo $latest_post['title']; ?></h2>
          <hr>
          <?php echo $latest_post['content']; ?>
        </div>
      </div>
    </div>
  <?php endif ?>
</div>


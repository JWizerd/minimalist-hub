<? require('controllers/webscraper.php'); ?>
<div class="row">
  <nav class="col-md-12"></nav><!-- navigation -->
  <?php if (isset($_POST['add_webscraper_widget'])): ?>

    <? foreach ($the_posts as $post): ?>
      <div class="col-sm-6">
        <div class="well">
          <? echo $post; ?>
        </div>
      </div>    
    <? endforeach ?>
    
  <?php endif ?>
</div>


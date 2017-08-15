<?php require('./controllers/RSS_Feed.php'); ?>

<?
if (isset($_POST['remove_post'])) {
  $post_title = $_POST['post_title'];
  RSS_Feed::remove_post($post_title);
}
?>

<script>window.location.replace("index.php")</script>
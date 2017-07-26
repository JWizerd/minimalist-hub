// TOGGLE POST CONTENT
function togglePostContent() {
  $post = $('.post');
  $post.after('<button class="btn btn-default btn-article">Read Article</button>');
  $post.addClass('hide-post-content');

  $('.btn-article').on('click', function(){
    $post.toggleClass('hide-post-content');
  }); 
}

togglePostContent();
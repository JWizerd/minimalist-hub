function littleLazyLoader(postClass) {
  var $post       = $("." + postClass);
      postContent = $post.html();

  function postExcerpt() {
    var half_length = Math.round($post.html().length / 10)
        $excerpt    = $post.html().slice(0, half_length)
        $excerpt    += "<div><a class='read-more text-center btn btn-success'>Read More</a></div>";

    $post.html($excerpt)
  }

  function showMoreContent() {
    $('.read-more').click(function(e){
      e.preventDefault();
      $post.html(postContent);
    });
  }

  console.log($post);
  postExcerpt();
  showMoreContent()
}

littleLazyLoader('post');
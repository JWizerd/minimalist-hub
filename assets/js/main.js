// TOGGLE POST CONTENT
function togglePostContent() {
  $post = $('.post')
  $post.after('<button class="btn btn-default btn-article">Read Article</button>')
  $post.addClass('hide-post-content')

  $('.btn-article').on('click', function(){
    $post.toggleClass('hide-post-content')
  })
}

function backgroundSlideShow(wallpaperCount) {
  var count = 1
 
  setInterval(function(){
    if (count > wallpaperCount) {
      count = 1
    } else {
      $('body').css(
        {
          'background': 'linear-gradient(rgba(255, 255, 255, 0.45), rgba(255, 255, 255, 0.45)), url(assets/img/zen-wallpaper-' + count + '.jpg)'
        }
      )
      count++
      console.log(count)
    }
  }, 8000) 
}

$(document).ready(function(){
  togglePostContent()
  // backgroundSlideShow(3);
})
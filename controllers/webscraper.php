<?
  require('inc/simple_html_dom.php');

  function return_html_from_webpage($element, $url) {
    // Retrieve the DOM from a given URL
    $html = file_get_html($url);
    $posts = $html->find($element);
    return $posts;
  }

  if (isset($_POST['add_webscraper_widget'])) {
    $url = $_POST['url'];
    $element = $_POST['element'];
    $the_posts = return_html_from_webpage($element, $url); 
  }



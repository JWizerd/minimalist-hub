<?
  require('inc/simple_html_dom.php');

  function output_html($element, $url = "https://zenhabits.net/") {
    // Retrieve the DOM from a given URL
    $html = file_get_html($url);
    foreach ($html->find($element) as $content) {
      echo $content;
    }
  }

  output_html('h2');
  output_html('.post');


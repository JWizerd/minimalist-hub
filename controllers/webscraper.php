<?
  function rss_parser($url) {
    // Retrieve the DOM from a given URL
    $rss = new DOMDocument();
    $rss->load($url);
    $feed = [];
    foreach ($rss->getElementsByTagName('item') as $node) {
      $item = [
              'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
              'content' => $node->getElementsByTagName('encoded')->item(0)->nodeValue
              ];
      array_push($feed, $item);
    }
    return $feed[0];
  }

  if (isset($_POST['add_webscraper_widget'])) {
    $url = $_POST['url'];
    $latest_post = rss_parser($url);
  }
